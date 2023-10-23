<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $paises = DB::table('tb_pais')
                ->get();

            return view("paises.index", ["paises" => $paises]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $paises = DB::table('tb_pais')->get();
            return view('paises.new', ['paises' => $paises]);
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
                'pais_codi' => 'required|alpha|size:3',
                'pais_nomb' => 'required',
                'pais_capi' => 'required|numeric',
            ]);
        
            $pais = new Pais();
            $pais->pais_codi = $request->input('pais_codi');
            $pais->pais_nomb = $request->input('pais_nomb');
            $pais->pais_capi = $request->input('pais_capi');
            $pais->save();
        
            return redirect()->route('paises.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pais = Pais::findOrFail($id);
        return view('paises.edit', compact('pais'));
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
        $request->validate([
            'pais_nomb' => 'required',
            'pais_capi' => 'required|numeric',
        ]);

        $pais = Pais::find($id);
        $pais->pais_nomb = $request->input('pais_nomb');
        $pais->pais_capi = $request->input('pais_capi');
        $pais->save();

        return view("paises.index", ["paises" => $paises]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);

        if ($pais) {
            $pais->delete();
        }

        $paises = DB::table('tb_pais')->get(); // Puedes ajustar esta consulta según tus necesidades

        return view('paises.index', ['paises' => $paises]);
    }
}
