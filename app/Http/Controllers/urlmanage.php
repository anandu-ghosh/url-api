<?php

namespace App\Http\Controllers;

use App\Models\urlmanages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class urlmanage extends Controller
{
    //
    function change(Request $request){
        $random = Str::random(6);
        $dom = parse_url($request->link);
        $dom=  $dom['host'];
        $inputs = [
                    'shortlink' => $dom.'/'.$random,
                    'link'  => $request->link
                ];
        urlmanages::create($inputs);
        return response()->json([
         "status"=>400,
         "short-url"=>$dom.'/'.$random
        ]);
    }
}
