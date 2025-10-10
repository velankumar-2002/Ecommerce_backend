<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $person->password = Hash::make($request->register_password);
        $person->mobile_no = $request->register_mobile_no;
        $person->save();
        return redirect('/')->with('success', 'Registration successful! Welcome aboard');
    }

    // email verification process

    public function verifyEmail(Request $request)
    {
        $person_email_exists = Person::where('email',$request->email)->first();
        if($request->type == 'register_email')
        {
            if($person_email_exists)
            {
                return response()->json(false);
            }
            else
            {
                return response()->json(true);
            }
        }
        else if($request->type == 'login_email')
        {
            if(!$person_email_exists)
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

    // password verification process

    public function verifyPassword(Request $request)
    {
        $person_email_exists = Person::where('email',$request->email)->first();
        if($person_email_exists)
        {
            if (Hash::check($request->password, $person_email_exists->password)) {
                return response()->json(true);
            } else {
                return response()->json(false);
            }
        }
        else
        {
            return response()->json(true);
        }
    }

    // login verification

    public function verifyLogin(Request $request)
    {
        $person_email_exists = Person::where('email',$request->login_email)->first();
        if($person_email_exists)
        {
            return redirect('/admin/dashboard');
        }
        else
        {
            return redirect('/')->with('error', 'Something went wrong!');
        }
    }
}
