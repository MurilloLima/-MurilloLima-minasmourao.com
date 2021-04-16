<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Orcamento;
use App\Models\Produto;
use App\Models\Slider;
use App\Models\ViewNoticia;
use App\Models\ViewProduto;
use Illuminate\Support\Facades\Cache;

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

    public function empresa()
    {
        return view('site.pages.empresa');
    }

    public function madeira()
    {
        return view('site.pages.madeira');
    }

    public function tratamento()
    {
        return view('site.pages.tratamento');
    }

    public function orcamentos()
    {
        $data = Orcamento::where('uid', Cache::get('uid'))->orderby('created_at', 'desc')->get();
        return view('site.pages.orcamentos', compact('data'));
    }

    public function produtos(Produto $produto)
    {
        $produtos  = $produto->getAll();
        return view('site.pages.produtos', compact('produtos'));
    }

    public function noticias(Noticia $noticia)
    {
        $noticias = $noticia->getAll();
        return view('site.pages.noticias', compact('noticias'));
    }

    public function contatos()
    {
        return view('site.pages.contatos');
    }

    public function noticiaDetalhes($slug, Noticia $noticia)
    {
        $data = $noticia->getFirst($slug);
        $noticiasRight = $noticia->getLimit(3);

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
