<?php

namespace App\Controllers;

class Home extends BaseController
{
	

	public function index()
	{
		$client = \Config\Services::curlrequest([
			'base_uri' => 'https://api.covid19api.com',
		]);
 
		 d($client);
 
		$response = $client->request('GET', 'https://api.covid19api.com/summary', [
			'auth' => ['corona', 'ZUav4vawzCfMcMXHV8B']
		]);
 
		d($response);
		

		return view('welcome_message');
	}
}
