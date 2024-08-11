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
            // Adicione uma mensagem de debug
            \Log::info('Nenhum registro encontrado para como_soube_empresa = Amigos');
        }

        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
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

        Crud::create($validatedData);

        return redirect()->route('crud.index')->with('success', 'CRUD criado com sucesso!');
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
     * Display the specified resource.
     */
    public function edit($id)
    {
        $crud = Crud::find($id);

        if (!$crud) {
            return redirect()->route('crud.index')->with('msg', 'Registro não encontrado')->with('msg_type', 'error');
        }

        return view('crud.edit', compact('crud'));
    }



    /**
     * Display the specified resource.
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

        return redirect()->route('crud.index')->with('success', 'CRUD atualizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();

        return redirect()->route('crud.index')->with('success', 'Registro apagado com sucesso!');
    }
}
