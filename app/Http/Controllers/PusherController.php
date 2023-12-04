<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PusherBroadcast;

class PusherController extends Controller
{
    public function broadcast(Request $request){
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('components.broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request){
        return view('components.receive', ['message' => $request->get('message')]);
    }

}
