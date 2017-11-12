<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Magnet;

class MagnetController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $req)
    {
        $name = $req->input('name', '');
        $magnet = New Magnet;
        if(!empty($name)) {
            $collects = $magnet->where('name', 'like', "%{$name}%")->take(100)->orderBy('_id', 'desc')->get();
        } else {
            $collects = $magnet->take(100)->orderBy('_id', 'desc')->get();
        }
        $total = $magnet->count();
        return view('magnet.list', compact('collects', 'name', 'total'));
    }
}
