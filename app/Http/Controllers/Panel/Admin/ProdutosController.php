<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\ViewProduto;
use Rd7\ImagemUpload\ImagemUpload;

class ProdutosController extends Controller
{
    public function __construct()
    {
        $this->img = [
            'input_file' => 'img', //nome do input
            'destino' => 'produtos/', //Pasta que será criada automáticamente dentro de storage/app/public/
            'resolucao' => [
                'p' => ['h' => 70, 'w' => 70],
                'm' => ['h' => 220, 'w' => 370],
                'g' => ['h' => 420, 'w' => 770],
            ] //Não há limites de quantos tamanhos podem ser configuradas.
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produto::orderby('created_at', 'desc')->paginate(50);
        return view('panel.admin.pages.produtos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = ImagemUpload::salva($this->img);
        Produto::create([
            'img' => $image,
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title')),
            'desc' => $request->get('desc'),
            'content' => $request->get('content'),
            'user_id' => auth()->user()->id

        ]);
        return redirect()->back()->with('success', 'Cadastrado com sucesso!');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produto::find($id);
        return view('panel.admin.pages.produtos.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Produto::find($id);
        $image = ImagemUpload::salva($this->img);
        if ($image == true) {
            $data->update([
                'img' => $image,
                'title' => $request->get('title'),
                'slug' => str_slug($request->get('title')),
                'desc' => $request->get('desc'),
                'content' => $request->get('content'),
                'user_id' => auth()->user()->id
            ]);
        } else {
            $data->update([
                'title' => $request->get('title'),
                'slug' => str_slug($request->get('title')),
                'desc' => $request->get('desc'),
                'content' => $request->get('content'),
                'user_id' => auth()->user()->id
            ]);
        }
        return redirect()->back()->with('success', 'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Produto::destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
