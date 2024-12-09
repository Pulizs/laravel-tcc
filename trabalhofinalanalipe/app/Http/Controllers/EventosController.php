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
            'data' =>  'required|date',
            'titulo' => 'required|max:255',
            'conteudo' => 'max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'palestrantre' => 'required|max:255',
            'local' =>'required|string',
        ]);

        $data = Carbon::parse($storeData['data'])->format('Y-m-d');
        
        $evento = new Evento();
        $evento->data = $data;
        $evento->titulo = $storeData["titulo"];
        $evento->conteudo = $storeData["conteudo"];
        $evento->palestrante = $storeData["palestrante"];
        $evento->local = $storeData["local"];
        
        $user_id = $request["user_id"];
        
        $evento->user_id = $user_id;
        
        $imagePaths = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $imageFile) {
                    $path = $imageFile->store('evento', 'public');
                    $imagePaths[] = $path;
                }
            }
   
        $evento->images = json_encode($imagePaths);

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
            'titulo' => 'required|max:255',
            'conteudo' => 'max:255',
            'imagem' => 'required|max:255',
            'curtidas' => 'required|max:255',
        ]);
        
        $evento = new Evento();
        $evento->titulo = $storeData["titulo"];
        $evento->conteudo = $storeData["conteudo"];

        $evento->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
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
