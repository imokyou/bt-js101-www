<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
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
        if(empty($name)) {
            $collects = $magnet::orderBy('_id', 'desc')->take(100)->get();
        } else {
            $collects = $magnet::where('name', 'like', "%{$name}%")->orderBy('_id', 'desc')->take(100)->get();
        }

        $m = new \MongoDB\Client();
        $db = $m->torrents;
        $collection = $db->magnets;
        $total = $collection->count();
        
        return view('magnet.list', compact('collects', 'name', 'total'));
    }
}
