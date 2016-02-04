<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
// use Illuminate\Log\Writer;
class PagesController extends Controller {

	public function about()
	{
		$people = [
			'Tylor Otwell', 'Dayle Rees', 'Eric Barnes'
		];

		\Log::info('This is some useful information.');

		return view('pages.about', compact('people'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
