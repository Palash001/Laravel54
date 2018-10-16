<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class backController extends Controller
{
    
    public function homeMethod()

    {

    	return view('backend.index');
    }

    public function errorMethod()

    {

    	return view('backend.404');

    }

     public function basicMethod()

    {

    	return view('backend.basic_table');
    	
    }

     public function  dropMethod()

    {

    	return view('backend.dropzone');
    	
    }

     public function flotMethod()

    {

    	return view('backend.flot_chart');
    	
    }

     public function fontMethod()

    {

    	return view('backend.fontawesome');
    	
    }

     public function formMethod()

    {

    	return view('backend.form_component');
    	
    }

     public function forMethod()

    {

    	return view('backend.form_validation');
    	
    }

     public function gallMethod()

    {

    	return view('backend.gallery');
    	
    }

     public function glyphMethod()

    {

    	return view('backend.glyphicon');
    	
    }

     public function googMethod()

    {

    	return view('backend.google');
    	
    }

     public function gridMethod()

    {

    	return view('backend.grids');
    	
    }

     public function logMethod()

    {

    	return view('backend.login');
    	
    }

     public function mailMethod()

    {

    	return view('backend.mail');
    	
    }

     public function mailComMethod()

    {

    	return view('backend.mail_compose');
    	
    }

     public function regMethod()

    {

    	return view('backend.registration');
    	
    }

     public function resMethod()

    {

    	return view('backend.responsive');
    	
    }

   

     public function typMethod()

    {

    	return view('backend.typography');
    	
    }

     public function vecMethod()

    {

    	return view('backend.vector_map');
    	
    }
}
