<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;


class navbarController extends Controller
{
    public function index($slug)
    {
        $data = Contents::where('status', $slug)->get();
        // dd($data);
        if ($slug == 'DONE'){
            $hide = 'd-none';
        }else{
            $hide = '';
        }
        return view('page.contents',compact('data', 'hide','slug'));
        
    }
}
