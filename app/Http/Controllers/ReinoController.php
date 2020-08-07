<?php

namespace App\Http\Controllers;

use App\Reino;
use App\Imperio;
use App\JSONUtils;

use Illuminate\Http\Request;

class ReinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['reinos'] = Reino::get();
        
        return view('reino.index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['reinos'] = Reino::get();
        return view('reino.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try{
            $reino = new Reino();
            $reino = $this->enrichReino( $request, $reino );

            $reino->save();
            
            return JSONUtils::returnSuccess('Reino criado com sucesso', json_encode($reino));
        } catch(\Exception $ex) {
            return JSONUtils::returnDanger('Ocorreu um erro interno ao criar um reino.', json_encode($ex));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reino  $reino
     * @return \Illuminate\Http\Response
     */
    public function show(Reino $reino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  {Id}  $reinoid
     * @return \Illuminate\Http\Response
     */
    public function edit($reinoid)
    {
        $data['reino'] = Reino::find($reinoid)->imperio;
       
        return view('reino.edit', $data); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imperio  $imperio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        try{
            $reino = Reino::find($request->id);
            $reino = $this->enrichReino( $request, $reino );
            $reino->save();
            
            return JSONUtils::returnSuccess('Reino atualizado com sucesso', json_encode($imperio));
        } catch(\Exception $ex) {
            return JSONUtils::returnDanger('Ocorreu um erro interno.', json_encode($ex));
        }        
    }

    private function enrichReino( Request $request, $reinoToEnrich ) {
        $reinoToEnrich->nome = $request->nome;
        $reinoToEnrich->sigla = $request->sigla;
        $reinoToEnrich->imagem = '';
        $reinoToEnrich->id_imperio=$request->imperioid;

        return $reinoToEnrich;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imperio  $imperio
     * @return \Illuminate\Http\Response
     */
    public function delete($imperioId)
    {
        try{
            
            $imperio = Imperio::find($imperioId);
            $imperio->delete();
            
            $imperios = Imperio::get();

            return JSONUtils::returnSuccess('Império deletado com sucesso', json_encode($imperios));
        } catch(\Exception $ex) {
            return JSONUtils::returnDanger('Ocorreu um erro interno.', json_encode($ex));
        }        
    }
}
