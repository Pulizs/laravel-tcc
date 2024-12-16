<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SobreNos;

class SobreNosController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sobreNos = SobreNos::orderBy("id")->paginate(10);
        return view("sobreNos.index")
        ->with('user', $user)
        ->with('sobreNos', $sobreNos);
        
      
    }
}
