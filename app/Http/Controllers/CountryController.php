<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Country;

class CountryController extends Controller
{
    public function show()
    {	
    	return view('welcome');
    }

    public function fetch(Request $request)
    {
    	$input = $request->all();

    	$code = $input['code'];
    	
    	$country = Country::where('code', $code)->first();

    	if(!is_null($country))
    	{
			return Response::json([
                'message' => 'Fetched country!',
                'country' => $country,
            ], 200);    		
    	}
    	else 
    	{
    		return Response::json([
                'message' => 'Bad Request!',
            ], 400); 
    	}
    }
}
