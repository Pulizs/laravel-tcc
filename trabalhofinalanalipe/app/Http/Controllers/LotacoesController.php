<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Lotacao;


class LotacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from tb_produto order by id desc limit 10
        $lotacoes= Lotacao::orderBy("id", "desc")->paginate(10);
        return view("lotacoes.index", compact("lotacoes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("lotacoes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nomeCampus' => 'required|max:255',
            'departamento' => 'required|max:255',
            'areaAtuacao' => 'required|numeric',
            
        ]);
        Lotacao::create($storeData);
        return redirect()->route('lotacoes.index')->withSuccess(__('Lotacao criado com sucesso.'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lotacao = Lotacao::findOrFail($id);
        return view("lotacoes.show", compact("lotacao"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lotacao = Lotacao::findOrFail($id);
        return view("lotacoess.edit", compact("lotacao"));
        
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
        $storeData = $request->validate([
            'nomeCampus' => 'required|max:255',
            'departamento' => 'required|max:255',
            'areaAtuacao' => 'required|numeric',
            
        ]);
        Lotacao::whereId($id)->update($storeData);
        return redirect()->route('lotacoes.index')->withSuccess(__('Lotacoes atualizado com sucesso.'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lotacao = Lotacao::findOrFail($id);
        $lotacao->delete();
        return redirect('/lotacoes')->with('completed', 'Lotacao removido com sucesso');
    }
}
