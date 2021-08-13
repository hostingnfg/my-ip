<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyIpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function myIp(Request $request)
    {
        $response = ['ip' => $request->ip()];
        if($request->has('name')) {
            $response['greeting'] = $request->get('name');
        }
        return response()->json($response)->withHeaders(['x-hello-world' => env('AUTHOR')]);
    }
}
