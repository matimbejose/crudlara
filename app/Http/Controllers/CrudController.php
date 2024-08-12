<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::where('como_soube_empresa', 'Amigos')->paginate(10);

        // Verifica se a consulta está retornando dados
        if ($cruds->isEmpty()) {
            return response()->json(['message' => 'Nenhum registro encontrado para como_soube_empresa = Amigos'], 404);
        }

        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Não utilizado para API
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:15',
            'contato2' => 'nullable|string|max:15',
            'cpf' => 'required|string|max:14',
            'cep' => 'required|string|max:9',
            'como_soube_empresa' => 'nullable|string|max:255',
        ]);

        $crud = Crud::create($validatedData);

        return response()->json($crud, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crud = Crud::find($id);

        if (!$crud) {
            return response()->json(['message' => 'Registro não encontrado'], 404);
        }

        return response()->json($crud);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:15',
            'contato2' => 'nullable|string|max:15',
            'cpf' => 'required|string|max:14',
            'cep' => 'required|string|max:9',
            'como_soube_empresa' => 'nullable|string|max:255',
        ]);

        $crud = Crud::findOrFail($id);
        $crud->update($validatedData);

        return response()->json($crud);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();

        return response()->json(['message' => 'Registro apagado com sucesso!']);
    }
}
