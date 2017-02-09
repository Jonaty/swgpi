<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Protocolo;

class DocenteController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'roles:Docente']);
    }
    
    public function index()
    {
        $protocolos = Protocolo::all();
        return view('docente.index', compact('protocolos'));
    }

    public function create()
    {
        //return view('docente.protocolo');
    }

    public function store(Request $request)
    {
        // Protocolo::create($request->all());

        // return redirect()->route('docente.create')->with('info', 'Protocolo enviado!');
    }

    public function show($id)
    {
        $protocolo = Protocolo::find($id);

        return view('docente.protocoloShow', compact('protocolo'));
    }

    public function edit($id)
    {
        $protocolo = Protocolo::find($id);

        return view('docente.editar', compact('protocolo'));
    }

    public function update(Request $request, $id)
    {
        Protocolo::find($id)->update($request->all());

        return redirect()->route('docente.edit')->with('info2', 'Protocolo Editado');
    }
    public function destroy($id)
    {
        //
    }
}




















































