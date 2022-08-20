<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function __construct(){
        $this->middleware('can:board')->only('index');
        $this->middleware('can:board/create')->only('create','store');
        $this->middleware('can:board/edit')->only('edit','update');
        $this->middleware('can:board/destroy')->only('destroy');
    }

    public function index()
    {
        return "Vista principal del crud Mesas(Board)";
    }

    public function create()
    {
        return "Formulario de registro de mesas";
    }

    public function store(Request $request)
    {
        return "pendiente por registrar la mesa";
    }

    public function edit($id)
    {
        return "Formulario de edicion de mesas";
    }

    public function update(Request $request, Board $board)
    {
        return "pendiente el update de mesa";
    }

    public function destroy($id)
    {
        return "Pendiente el eliminar mesa";
    }
}
