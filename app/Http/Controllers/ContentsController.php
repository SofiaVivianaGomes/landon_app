<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContentsController extends Controller
{
    //
    public function home( Request $request )
    {
        $data = [];
        $data['version'] = '0.1.2';

        // If it's in the session values, let's set it with request, session, pull last updated. 
        // If it's not, then we just set it to none. 
        $last_updated = $request->session()->has('last_updated') ? $request->session()->pull('last_updated') : 'none';
        
        // To add to the view
        $data['last_updated'] = $last_updated;
        
        return view('contents/home', $data);
    }

    public function upload( Request $request )
    {
        $data = [];

        if( $request->isMethod('post') )
        {
            // verify that it is not harmful
            $this->validate(
                $request, 
                [
                    'image_upload' => 'mimes:jpeg,bmp,png,jpg'
                ]
            );

            // Taking the uploaded file field, and once it reaches our server, moves it to our public images folder and names it attractions.jpg, replacing the old one.
            Input::file('image_upload')->move('images', 'attractions.jpg');
            return redirect('/');
        }
                
        return view('contents/upload', $data);
    }
}
