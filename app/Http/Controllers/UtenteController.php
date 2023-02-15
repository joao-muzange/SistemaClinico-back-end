<?php

namespace App\Http\Controllers;

use App\Models\Utente;
use Illuminate\Http\Request;

class UtenteController extends Controller
{
    public function getAll()
    {
        return Utente::all();
    }

    public function get($id)
    {
        return Utente::find($id);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $especialidade = Utente::create($request->all());

        return $especialidade;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $especialidade = Utente::findOrFail($id);

        $especialidade->update($request->all());

        return $especialidade;
    }

    public function delete($id)
    {
        return  Utente::destroy($id);
    }
}
