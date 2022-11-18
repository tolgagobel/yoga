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

    public function create(AsanaAddRequest $request){
        return Asana::addAsana($request->validated());
    }

    public function update(AsanaUpdateRequest $request,Asana $asana){
        Asana::updateAsana($asana->id, $request->validated());
        return $asana->fresh();
    }

    public function destroy(Asana $asana){
        return Asana::deleteAsana($asana->id);
    }
}
