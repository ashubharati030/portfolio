<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
	{
		$title="WELCOME TO LARAVEL!!!";
		//return view('pages.index', compact('title')); 1ST WAY.
		return view('pages.index')->with('title',$title);// 2nd way.
    }
    
	public function about()
	{
	
		return view('pages.about'); 
	
    }

    public function career()
	{
		return view('pages.career'); 	
    }
    
    public function skill()
	{
		return view('pages.skill'); 	
    }
	
	public function award()
	{
		return view('pages.award'); 	
	}
    
    public function project()
	{
		return view('pages.project'); 	
	}

	public function contact()
	{
		return view('pages.contact'); 
    }
    
}
