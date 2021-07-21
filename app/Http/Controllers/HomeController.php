<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contacto;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('home');
    }

    public function editUser($id) 
    {
        return view('auth.editUser');
    }

    public function updateUser(Request $request, $id) 
    {   

        $usuario = User::findOrFail($id);

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->save();

        return redirect()->route('welcome')->with('success','Usuario actualizado con exito');

    }

    public function formContacto() 
    {
        return view('contacto.dudas');
    }

    public function contacto(Request $request) 
    {   
        Contacto::create($request->all());
        return redirect()->route('welcome')->with('success','Hemos enviado su formulario de contacto con exito');
    }

    public function getContactos() 
    {   
        $contactos = Contacto::all();
        return view('contacto.verformularios', compact('contactos'));
    }
}
