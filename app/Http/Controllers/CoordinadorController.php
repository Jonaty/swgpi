<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CoordinadorController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'roles:coordinador']);
    }

    public function index()
    {
        return view('coordinador.index');
    }

       public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
