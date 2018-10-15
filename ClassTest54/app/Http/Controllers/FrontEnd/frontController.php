<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class frontController extends Controller
{
    

	public function homeMethod()

	{

		return view('frontend.index');
	}


	public function blgMethod()

	{


		return view('frontend.blog');

	}

	public function contMethod()

	{

		return view('frontend.contact');

	}

	public function portMethod()

	{

		return view('frontend.portfolio');

	}


	public function serMethod()

	{

			return view('frontend.services');
	}


}
