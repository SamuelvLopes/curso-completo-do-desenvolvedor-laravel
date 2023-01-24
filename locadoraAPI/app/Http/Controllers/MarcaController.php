<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public Marca $marca;
    public function __construct(Marca $marca)
    {
        $this->marca=$marca;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marca = $this->marca->all();
        return $marca;
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
    public function store(Request $request)
    {
        // dd([__METHOD__,$request->all()]);
        $regras=[
            'nome'=>'required|unique:marcas',
            'imagem'=>'required'
        ];
        $feedback=[
            'required'=>'O campo :attribute eh obrigatorio',
            'nome.unique'=>'O nome da marca já existe'
        ];
        $request->validate($regras,$feedback);
        $marca = $this->marca->create($request->all());
        return $marca;//'chegamos em '.__METHOD__;
        // return 'chegamos em '.__METHOD__;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = $this->marca->find($id);
        

         if(null===$marca){
            return response()->json(['erro'=>'id  is null'],404);
         }
        return $marca;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca=$this->marca->find($id);
        if($marca===null){
            return response()->json(['erro'=>'nãoo existe'],404);
        }
        $marca->update($request->all());
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        // var_dump($marca->getAttributes());
        $marca->delete();
        return ['delete'=>'bastante'];
    }
}
