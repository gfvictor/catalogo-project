<?php

namespace App\Http\Controllers;

use App\Http\Requests\objectsRequest;
use App\Models\Objects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ObjectsController extends Controller
{
    public function createObject(objectsRequest $request): RedirectResponse
    {
        Objects::create($request->validated() + ['user_id' => auth()->id()]);

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Adicionado com Sucesso!');
    }

    public function deleteObject($id): RedirectResponse
    {
        $object = Objects::find($id);
        Gate::authorize('delete', $object);

        $object->delete();

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Excluído com Sucesso!');
    }

    public function updateObject(objectsRequest $request, $id): RedirectResponse
    {

        $object = Objects::find($id);
        Gate::authorize('update', $object);

        $object->update($request->validated());

        return redirect('/overview/'.auth()->id())->with('success', 'Objeto Alterado com Sucesso!');
    }

    public function searchObject(Request $request): View
    {
        $term = $request->input('search');

        if (empty($term)) {
            abort(403, 'Busca vazia!');
        }

        $object = Objects::search($term)->where('user_id', auth()->id())->get();

        if ($object->isEmpty()) {
            abort(403, 'Objeto não encontrado!');
        }

        return view('search-results', ['objects' => $object, 'term' => $term]);
    }
}
