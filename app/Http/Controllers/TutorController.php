<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Protocolo;

class TutorController extends Controller
{
     function __construct()
    {
        $this->middleware(['auth', 'roles:Tutor']);
    }
    
    public function index()
    {
        return view('tutor.index');
    }

    public function create()
    {
        return view('tutor.create');
    }

    public function store(Request $request)
    { 
        Protocolo::create($request->all());

        return redirect()->route('tutor.create')->with('info', 'Protocolo enviado!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
