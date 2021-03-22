<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke(){

    	$ControllObject = [
    		'title__page' => 'welcome',
    		'nav_links_route' => [
    			[
    				'name' => 'HOME',
    				'link' => '#'
    			],
    			[
    				'name' => 'ABOUT',
    				'link' => '#'
    			],
    			[
    				'name' => 'SERVICE',
    				'link' => '#'
    			],
    			[
    				'name' => 'CONTACT',
    				'link' => '#'
    			],
    		]
    	];

    	
    	return view('index', compact('ControllObject'));
    }
}
