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
        if(!empty($name)) {
            $collects = $magnet->where('name', 'like', "%{$name}%")->take(100)->orderBy('_id', 'desc')->get();
        } else {

            $collects = Cache::get('collects', '');
            if(empty($collects)) {
                $collects = $magnet->take(100)->orderBy('_id', 'desc')->get();
                Cache::set('collects', json_encode($collects), 1);
            }else {
                $collects = json_decode($collects);
            }
            
        }

        $total = Cache::get('total', '');
        if($total === '') {
            $total = $magnet->count();
            Cache::set('total', $total, 1);
        }
        
        return view('magnet.list', compact('collects', 'name', 'total'));
    }
}
