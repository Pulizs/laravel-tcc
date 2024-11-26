<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Evento;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $eventos = Evento::orderBy("id")->paginate(10);
        return view("eventos.index")
        ->with('user', $user)
        ->with('eventos', $eventos);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("eventos.create");
              
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
            'data' => 'max:255',
            'evento' => 'max:255',
            'palestrante' => 'max:255',
            'local' => 'max:255',
        ]);
        
        $evento = new Evento();
        $evento->data = $storeData["data"];
        $evento->evento = $storeData["evento"];
        $evento->palestrante = $storeData["palestrante"];
        $evento->local = $storeData["local"];
        
        $user_id = auth()->user()->id;
        $evento->user_id = $user_id;
        
        $evento->save();
        return redirect()->route('eventos.index')->withSuccess(__('evento criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view("eventos.show",compact("evento"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        $users = User::all();
        return view("eventos.edit",compact("evento"))
        ->with('users',$users );
       
 
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
            'data' => 'max:255',
            'evento' => 'max:255',
            'palestrante' => 'max:255',
            'local' => 'max:255',
        ]);
        
        $evento = new Evento();
        $evento->data = $storeData["data"];
        $evento->evento = $storeData["evento"];
        $evento->palestrante = $storeData["palestrante"];
        $evento->local = $storeData["local"];
        
        $user_id = auth()->user()->id;
        $evento->user_id = $user_id;
        
        $evento->update();
        return redirect()->route('eventos.index')->withSuccess(__('evento atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('eventos.index')->withSuccess(__('evento removida com sucesso.'));
    }
}
