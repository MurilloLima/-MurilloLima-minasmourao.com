<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Rd7\ImagemUpload\ImagemUpload;

class NoticiasController extends Controller
{
    public function __construct()
    {
        $this->img = [
            'input_file' => 'img', //nome do input
            'destino' => 'noticias/', //Pasta que será criada automáticamente dentro de storage/app/public/
            'resolucao' => [
                'p' => ['h' => 100, 'w' => 100],
                'm' => ['h' => 370, 'w' => 370],
                'g' => ['h' => 485, 'w' => 865],
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
        $data = Noticia::orderby('created_at', 'desc')->paginate(50);
        return view('panel.admin.pages.noticias.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.noticias.create');
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
        Noticia::create([
            'img' => $image,
            'title' => $request->get('title'),
            'desc' => $request->get('desc'),
            'content' => $request->get('content'),
            'slug' => str_slug($request->get('title')),
            'user_id' => auth()->user()->id

        ]);
        return redirect()->back()->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Noticia::where('slug', $slug)->first();
        $i = 1;
        $view = CountView::where('noticia_id', $data->id)->first();
        if ($view == null) {
            CountView::create([
                'noticia_id' => $data->id,
                'views' => 1
            ]);
        } else {
            $view['views'] = $view['views'] + $i;
            $view->save();
        }
        return view('portal.pages.noticias-details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Noticia::find($id);
        return view('panel.admin.pages.noticias.edit', compact('data'));
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
        $data = Noticia::find($id);
        $image = ImagemUpload::salva($this->img);
        if ($image == true) {
            $data->update([
                'img' => $image,
                'title' => $request->get('title'),
                'desc' => $request->get('desc'),
                'content' => $request->get('content'),
                'slug' => str_slug($request->get('title')),
                'user_id' => auth()->user()->id

            ]);
        } else {
            $data->update([
                'title' => $request->get('title'),
                'desc' => $request->get('desc'),
                'content' => $request->get('content'),
                'slug' => str_slug($request->get('title')),
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
        Noticia::destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
