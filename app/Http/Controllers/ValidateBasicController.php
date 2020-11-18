<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateBasicController extends Controller
{
    //
    public function index(Request $request) {

        $data = strcasecmp($request->keyword,'sleep') == 0 ? ['status' => 'can'] : ['status' => 'cannot'];
        $data = json_encode($data,JSON_PRETTY_PRINT); // convert from array to json

        return view('validateBasic', compact('data'));
    }
}
