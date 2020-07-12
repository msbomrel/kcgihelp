<?php

namespace App\Http\Controllers;

use App\HelpPage;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $navbars = HelpPage::where('is_live', '=', 1)->get();
        return view('welcome', compact('navbars'));
    }

    public function page($slug){
        $navbars = HelpPage::where('is_live', '=', 1)->get();
        $page = HelpPage::where('slug','=',$slug)->first();
//        dd($page);
        return view('page', compact('page','navbars'));
    }
}
