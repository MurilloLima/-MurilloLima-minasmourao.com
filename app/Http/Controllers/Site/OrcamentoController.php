<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrcamentoRequest;
use App\Models\Client;
use App\Models\Orcamento;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Keygen\Keygen;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrcamentoRequest $request, Orcamento $orcamento)
    {

        //verifica se o cache existe
        if (Cache::has('uid')) {
            $orcamento->create([
                'uid' => Cache::get('uid'),
                'bitola' => $request->get('bitola'),
                'size' => $request->get('size'),
                'qtd' => $request->get('qtd')
            ]);
        } else {
            $key = Keygen::numeric(8)->generate();
            $expiresAt = Carbon::now()->addMinutes(120);
            Cache::add('uid', $key, $expiresAt);
        }
        return redirect()->back()->with('success', 'Item adicionado a lista de desejo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function finalizar(Request $request, Client $client)
    {
        $client->create([
            'uid' => Cache::get('uid'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'obs' => $request->get('obs'),
        ]);
        Cache::forget('uid');
        return redirect()->back()->with('success', 'Orçamento enviado com sucesso. Entraremos em contato o mais breve possível!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orcamento::destroy($id);
        return redirect()->back()->with('success', 'Item removido da lista de desejo!');
    }
}
