<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // login signup page view

    public function loginSignUp()
    {
        return view('login');
    }

    // registeration form saved

    public function saveRegister(Request $request)
    {
        $person = new Person();
        $person->name = $request->register_username;
        $person->email = $request->register_email;
        $person->password = $request->register_password;
        $person->mobile_no = $request->register_mobile_no;
        $person->save();
        return redirect('/')->with('success', 'Registration successful! Welcome aboard');
    }

    // email verification process

    public function verifyEmail(Request $request)
    {
        $person_email_exits = Person::where('email',$request->email)->first();
        if($request->type == 'register_email')
        {
            if($person_email_exits)
            {
                return response()->json(false);
            }
            else
            {
                return response()->json(true);
            }
        }

    }

    // mobile number verification process

    public function verifyMobileno(Request $request)
    {
        $person_mobile_no_exits = Person::where('mobile_no',$request->mobile_no)->first();
            if($person_mobile_no_exits)
            {
                return response()->json(false);
            }
            else
            {
                return response()->json(true);
            }

    }

}
