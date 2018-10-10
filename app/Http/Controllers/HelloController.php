<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
	$data = array();

	$data['name'] = 'maa';
	$data['message'] = 'Hello!';

	$today = date('Y/m/d H:i:s');

	return view('hello', ['data' => $data, 'today' => $today]);
    } 
}
