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
            $collects = $magnet::all()->sort(['_id'=>1])->limit(100);
        } else {

            $collects = Cache::get('collects', '');
            if(empty($collects)) {
                $collects = $magnet::all()->sort(['_id'=>1])->limit(100);
                Cache::set('collects', json_encode($collects), 1);
            }else {
                $collects = json_decode($collects);
            }
            
        }

        $collects = collect([]);

        $total = Cache::get('total', '');
        if($total === '') {
            $total = $magnet::count();
            Cache::set('total', $total, 1);
        }
        $total = $magnet::count();
        
        return view('magnet.list', compact('collects', 'name', 'total'));
    }
}
