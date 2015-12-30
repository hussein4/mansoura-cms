<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vlist;

class EvalController extends Controller
{
    public function store($id ,Request $request)
    {

        $vlist = Vlist::findOrFail($id);
        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('bidbond')+ $request->get('desc')) / 4, 0, PHP_ROUND_HALF_UP);

        Vlist::create([
            'user_id' => auth()->user()->id,
            'vgrade' => $average

        ] );

        return $vlist;

    }


}
