<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Orcamento;
use App\Models\Produto;
use App\Models\Slider;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::all();
        $produtos = Produto::all();
        $orcamentos = Orcamento::all();
        $noticias = Noticia::all();
        return view('panel.admin.index', compact(
            'slider',
            'produtos',
            'orcamentos',
            'noticias'
        ));
    }
}
