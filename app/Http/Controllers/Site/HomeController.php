<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Slider;
use App\Models\ViewNoticia;

class HomeController extends Controller
{
    function __construct(Slider $slider, Noticia $noticia)
    {
        $this->slider = $slider;
        $this->noticia = $noticia;
    }

    public function index()
    {
        $noticias = $this->noticia->getLimit(3);
        $slider =  $this->slider->getAll();
        return view('site.index', compact('slider', 'noticias'));
    }

    public function noticiaDetalhes($slug)
    {
        $data = Noticia::where('slug', $slug)->first();
        $noticiasRight = Noticia::limit(3)->get();

        $i = 1;
        $view = ViewNoticia::where('noticia_id', $data->id)->first();
        if ($view == null) {
            ViewNoticia::create([
                'noticia_id' => $data->id,
                'views' => 1
            ]);
        } else {
            $view['views'] = $view['views'] + $i;
            $view->save();
        }
        return view('site.pages.noticia-details', compact('data', 'noticiasRight'));
    }
}
