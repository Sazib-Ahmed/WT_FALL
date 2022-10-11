<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    function register()
    {
        return view('register');
    }

    function registration(Request $request)
    {
        
        $rules=[
            'name'=>"required|regex:/^[a-z ,.'-]+$/i",
            'age'=>'required|integer',
            'mobile' => 'required|min:11|max:11|numeric',
            'address'=>"required|regex:\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\.",
            'image' => 'required|image'



        ];
        $messages=[
        'name.regex'=>'Please enter a valid name.',
         'age.integer'=>'Please enter a valid age.',
         'mobile.numeric'=>'Please enter a valid number.',
         'address.regex'=>'Please enter a valid address.',
         'image.image'=>'Please enter a valid file.'
    ];
    $this->validate($request,$rules,$messages);

    $output="<h1>Submitted<h1>";

        $output.="Name: ".$request->name;
        $output.="Age: ".$request->age;
        $output.="Mobile: ".$request->mobile;
        $output.="Image: ".$request->image;
        $output.="Address: ".$request->address;

        return $output;
    }

}

?>
