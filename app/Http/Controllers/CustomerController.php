<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        
        return "listar todos los customer";
    }

    public function create()
    {
        return "crear";
    }
    public function store(Request $request)
    {
        return "guardar";
    }
    public function show($id)
    {
        return "mostrar uno";
    }
    public function edit($id)
    {
        return "cambiar";
    }
    public function update(Request $request, $id)
    {
        return "actualizar";
    }
    public function destroy($id)
    {
        return "destroy";
    }
}
