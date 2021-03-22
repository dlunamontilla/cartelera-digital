<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

    	$ObjectControl = (object)[];

        // Title Page - Object Control
        $ObjectControl->titleDocument = 'cartelera - digital';



        // Test Object
        $ObjectControl->results = [
            // test element Nª1
            [
                'id'            => 1,                                           // int
                'type'          => 'image',                                     // string - image | video | plaintext
                'path'          => './src/prueba1.png',                         // string | null - url asset
                'name'          => 'image',                                     // string - the name of element
                'description'   => 'Great image in Png format',                 // string - description
                'title'         => 'Test Image',                                // string - title
                'text'          => null                                         // string | null - text
            ],
            // test element Nª2
            [
                'id'            => 2,                                           // int
                'type'          => 'video',                                     // string - image | video | plaintext
                'path'          => './src/video.mp4',                           // string | null - url asset
                'name'          => 'video',                                     // string - the name of element
                'description'   => '4k video music by Alan Walker',             // string - description
                'title'         => 'Test video',                                // string - title
                'text'          => null                                         // string | null - text
            ],
            // test element Nª3
            [
                'id'            => 3,                                           // int
                'type'          => 'plaintext',                                 // string - image | video | plaintext
                'path'          => null,                                        // string | null - url asset
                'name'          => 'text',                                      // string - the name of element
                'description'   => 'inspirational words that fill the heart',   // string - description
                'title'         => 'Test PlainText',                            // string - title
                'text'          => 'texto de prueba para el elemento'           // string | null - text
            ]

        ];
    	
    	return view('home', compact('ObjectControl'));
    }
}
