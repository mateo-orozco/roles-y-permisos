<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    
        public function create(Request $request)
        {
            return "crear un customer";
        }
        public function index()
        {
            
            return "listar todos los customer";
        }
        public function show($id)
        {
        return "mostrar un cliente";
        }
        public function update(Request $request, $id)
        {
            return "actualizar un customer";
        }
        public function destroy($id)
        {
            return "eliminar un cliente";
        }
        
}
