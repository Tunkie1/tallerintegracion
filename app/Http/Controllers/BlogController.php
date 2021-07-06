<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Compras;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);

        return view('blogs.index',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function indexCliente()
    {
        $blogs = Blog::latest()->paginate(5);

        return view('blogs.indexCliente',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        Blog::create($request->all());
   
        return redirect()->route('blogs.index')
                        ->with('success','Producto añadido con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
     public function show(Blog $blog)
    {
        return view('blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $blog->update($request->all());
  
        return redirect()->route('blogs.index')
                        ->with('success','Producto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
  
        return redirect()->route('blogs.index')
                        ->with('success','Producto eliminado correctamente');
    }


    public function comprarProducto(Request $request)
    {
        $data = $request->all();
        Compras::create($data);
        return response()->json(['success'=>'Elemento Comprado']);
    }

    public function productosComprados(Request $request)
    {
        $productos = Compras::all();
        return view('blogs.productosComprados', compact('productos'));
    }
    public function cambiarEstado(Request $request)
    {   
        $idCompra = $request->input('idCompra');
        $estado = $request->input('estado');

        $compra = Compras::find($idCompra);
        $compra->estado = $estado;
        $compra->save();

        return response()->json(['success'=>$compra]);
    }
}
