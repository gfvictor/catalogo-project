<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function validateInput(Request $request): array
    {
        return $request->validate([
            'object_name' => 'required|min:3|max:30',
            'object_tag' => 'required|max:15',
            'quantity' => 'required|integer',
            'container_name' => 'required|integer',
            'container_type' => 'required',
            'container_room' => 'required',
        ]);
    }
    public function createObject(Request $request): RedirectResponse
    {
        $validate = $this->validateInput($request);

        Objects::create($validate + ['user_id' => auth()->id()]);

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Adicionado com Sucesso!');
    }
    public function deleteObject($id): RedirectResponse
    {
        $object = Objects::find($id);

        if ($object->user_id != auth()->id()) {
            return redirect('/overview/'.auth()->id())->with('error', 'Você não tem permissão para excluir este objeto!');
        }

        $object->delete();

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Excluído com Sucesso!');
    }
    public function updateObject(Request $request, $id): RedirectResponse
    {
        $object = Objects::find($id);

        if ($object->user_id != auth()->id()) {
            return redirect('/overview/'.auth()->id())->with('error', 'Você não tem permissão para excluir este objeto!');
        }

        $object->update($this->validateInput($request));

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Alterado com Sucesso!');
    }
}
