<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\Admin\SliderRequest;
use App\Models\Slider;
use Rd7\ImagemUpload\ImagemUpload;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->img = [
            'input_file' => 'img', //nome do input
            'destino' => 'slider/', //Pasta que será criada automáticamente dentro de storage/app/public/
            'resolucao' => [
                'g' => ['h' => 450, 'w' => 1280],
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
        $data = Slider::orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.slider.index', compact('data'));
    }


    public function store(SliderRequest $request)
    {
        $image = ImagemUpload::salva($this->img);
        Slider::create([
            'img' => $image,
            'title' => $request->get('title')
        ]);
        return redirect()->back()->with('success', 'Inserido com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $data = Slider::find($id);
        $image = ImagemUpload::salva($this->img);
        if ($image == true) {
            $data->update([
                'img' => $image,
                'title' => $request->get('title')
            ]);
        } else {
            $data->update([
                'title' => $request->get('title'),
            ]);
        }

        return redirect()->back()->with('success', 'Editado com sucesso!');
    }

    public function delete($id)
    {
        Slider::destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
