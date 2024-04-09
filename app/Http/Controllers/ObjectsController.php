<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\User;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function validateInput(Request $request)
    {
        return $request->validate([
            'object_name' => 'required',
            'object_tag' => 'required',
            'quantity' => 'required',
            'container_name' => 'required',
            'container_type' => 'required',
            'container_room' => 'required',
        ]);
    }
    public function createObject(Request $request)
    {
        $validate = $this->validateInput($request);

        Objects::create($validate + ['user_id' => auth()->id()]);

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Adicionado com Sucesso!');
    }
    public function deleteObject($id)
    {
        $object = Objects::find($id);

        if ($object->user_id != auth()->id()) {
            return redirect('/overview/'.auth()->id())->with('error', 'Você não tem permissão para excluir este objeto!');
        }

        $object->delete();

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Excluído com Sucesso!');
    }
    public function updateObject(Request $request, $id)
    {
        $object = Objects::find($id);

        if ($object->user_id != auth()->id()) {
            return redirect('/overview/'.auth()->id())->with('error', 'Você não tem permissão para excluir este objeto!');
        }

        $object->update($this->validateInput($request));

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Alterado com Sucesso!');
    }
}
