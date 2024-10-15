<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\DespesaResource;
use App\Models\Despesa;
use App\Models\Usuario;
use App\Http\Requests\StoreDespesaRequest;
use App\Jobs\SendDespesaCadastradaEmail;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DespesaResource::collection(Despesa::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDespesaRequest $request)
    {
        $despesa = Despesa::create($request->validated());

        $usuario = Usuario::findOrFail($despesa->usuario_id);

        SendDespesaCadastradaEmail::dispatch($usuario, $despesa);

        return new DespesaResource($despesa);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $despesa = Despesa::findOrFail($id);
        return new DespesaResource($despesa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDespesaRequest $request, string $id)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->update($request->validated());
        return new DespesaResource($despesa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->delete();
        return response()->json(null, 204);
    }
}
