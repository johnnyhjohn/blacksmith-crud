<?php

namespace App\Http\Controllers;

use App\Imperio;
use App\JSONUtils;

use Illuminate\Http\Request;

class ImperioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['imperios'] = Imperio::get();
        
        return view('imperio.index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imperio.create');
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
            $imperio = new Imperio();
            $imperio = $this->enrichImperio( $request, $imperio );

            $imperio->save();
            
            return JSONUtils::returnSuccess('Império criado com sucesso', json_encode($imperio));
        } catch(\Exception $ex) {
            return JSONUtils::returnDanger('Ocorreu um erro interno.', json_encode($ex));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Imperio  $imperio
     * @return \Illuminate\Http\Response
     */
    public function show(Imperio $imperio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  {Id}  $imperioId
     * @return \Illuminate\Http\Response
     */
    public function edit($imperioId)
    {
        $data['imperio'] = Imperio::find($imperioId);
        
        return view('imperio.edit', $data); 
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
            $imperio = Imperio::find($request->id);
            $imperio = $this->enrichImperio( $request, $imperio );
            $imperio->save();
            
            return JSONUtils::returnSuccess('Império atualizado com sucesso', json_encode($imperio));
        } catch(\Exception $ex) {
            return JSONUtils::returnDanger('Ocorreu um erro interno.', json_encode($ex));
        }        
    }

    private function enrichImperio( Request $request, $imperioToEnrich ) {
        $imperioToEnrich->nome = $request->nome;
        $imperioToEnrich->sigla = $request->sigla;
        $imperioToEnrich->imagem = '';

        return $imperioToEnrich;
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
