<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Produto;
use App\Models\Slider;
use App\Models\ViewNoticia;
use App\Models\ViewProduto;

class HomeController extends Controller
{
    function __construct(Slider $slider, Noticia $noticia, Produto $produto)
    {
        $this->slider = $slider;
        $this->noticia = $noticia;
        $this->produto = $produto;
    }

    public function index()
    {
        $produtos = $this->produto->getLimit(3);
        $noticias = $this->noticia->getLimit(3);
        $slider =  $this->slider->getAll();
        return view('site.index', compact('slider', 'noticias', 'produtos'));
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

    public function produtoDetalhes($slug)
    {
        $data = Produto::where('slug', $slug)->first();

        $i = 1;
        $view = ViewProduto::where('produto_id', $data->id)->first();
        if ($view == null) {
            ViewProduto::create([
                'produto_id' => $data->id,
                'views' => 1
            ]);
        } else {
            $view['views'] = $view['views'] + $i;
            $view->save();
        }
        return view('site.pages.produto-details', compact('data'));
    }
}
