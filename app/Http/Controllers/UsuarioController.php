<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Exceptions\NotFoundException;
use App\Http\Resources\UsuarioResource;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UsuarioResource::collection(Usuario::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        $usuario = Usuario::create($request->validated());
        return new UsuarioResource($usuario); // Retorna um recurso
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            throw new NotFoundException('Usuário não encontrado.');
        }
        return new UsuarioResource($usuario); // Retorna um recurso
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->validated());
        return new UsuarioResource($usuario); // Retorna um recurso
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            throw new NotFoundException('Usuário não encontrado.');
        }
        $usuario->delete();
        return response()->json(null, 204);
    }
}
