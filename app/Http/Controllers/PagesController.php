<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to PHP Laravel";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }


    public function about(){
        $title="Welcome to About us";
        return view('pages.index')->with('title',$title);
    }

    public function services(){
        $data=array(
            'title'=>'services',
            'services'=>['web developer','programming','sco']
        );
        // return view('pages.services',)->with($data);
            return view('pages.services',[ 'title'=>'services',
            'services'=>['web developer','programming','sco']]);

    }
}
