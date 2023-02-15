<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Utente;
use App\Models\Utilizador;
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
            'nome' => 'required',
            'telefone' => 'required',
        ]);

        $isEmptyPassword =  $request->password ?? true;
        if ($isEmptyPassword === true) {
            $request['password'] = '123';
        }

        $request['tipo'] = 'Utente';
        $utilizador = Utilizador::create($request->all());

        if (!$utilizador) return response('Erro ao criar utente', 400);

        $utente = $utilizador->utente()->create($request->all());

        return $utente;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $utente = Utente::findOrFail($id);

        $utente->update($request->all());

        return $utente;
    }

    public function delete($id)
    {
        return  Utente::destroy($id);
    }
}
