<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsanaAddRequest;
use App\Http\Requests\AsanaUpdateRequest;
use App\Models\Asana;

class AsanaController extends Controller
{
    public function index() {
        return Asana::getAsana();
    }

    public function show(Asana $asana){
        return Asana::getAsanaById($asana->id);
    }

    public function create(AsanaAddRequest $request){
        return Asana::addAsana($request->validated());
    }

    public function update(AsanaUpdateRequest $request,Asana $asana){
        Asana::updateAsana($asana->id, $request->validated());
        return $asana->fresh();
    }

    public function delete(Asana $asana){
        $deleted = Asana::deleteAsana($asana->id);
        if ($deleted)
            return response()->json(['status' => 'success']);

        return response()->json(['status' => 'failure']);
    }
}
