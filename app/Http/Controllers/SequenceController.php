<?php

namespace App\Http\Controllers;

use App\Http\Requests\SequenceAddRequest;
use App\Http\Requests\SequenceUpdateRequest;
use App\Models\Sequence;
use Illuminate\Http\Request;

class SequenceController extends Controller
{
    public static function index(){
        return Sequence::getSequence();
    }

    public static function create(SequenceAddRequest $request){
        return Sequence::addSequence($request->validated());
    }

    public static function update(SequenceUpdateRequest $request,Sequence $sequence){
        Sequence::updateSequence($sequence->id, $request->validated());
        return $sequence->fresh();
    }

    public static function destroy(Sequence $sequence){
        return Sequence::deleteSequence($sequence->id);
    }
}
