<?php

namespace App\Http\Controllers;

use App\Http\Requests\SequenceAddRequest;
use App\Http\Requests\SequenceUpdateAsanaRequest;
use App\Http\Requests\SequenceUpdateRequest;
use App\Models\Asana;
use App\Models\Sequence;

class SequenceController extends Controller
{



    public static function index(){
        return Sequence::getSequences();
    }

    public static function show(Sequence $sequence){
        return Sequence::getSequencesById($sequence->id);
    }

    public static function create(SequenceAddRequest $request){
        return Sequence::addSequence($request->validated());
    }

    public static function update(SequenceUpdateRequest $request, Sequence $sequence){
        Sequence::updateSequence($sequence->id, $request->validated());
        return $sequence->fresh();
    }

    public static function delete(Sequence $sequence){
        $deleted = Sequence::deleteSequence($sequence->id);
        if ($deleted)
            return response()->json(['status' => 'success']);

        return response()->json(['status' => 'failure']);
    }
}
