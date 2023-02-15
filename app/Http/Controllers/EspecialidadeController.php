<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{

    public function getAll()
    {
        return Especialidade::all();
    }

    public function get($id)
    {
        return Especialidade::find($id);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $especialidade = Especialidade::create($request->all());

        return $especialidade;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $especialidade = Especialidade::findOrFail($id);

        $especialidade->update($request->all());

        return $especialidade;
    }

    public function delete($id)
    {
        return  Especialidade::destroy($id);
    }
}
