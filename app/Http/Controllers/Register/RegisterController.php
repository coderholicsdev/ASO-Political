<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        //validate user
        $this->validate($request, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone'=>'required|numeric|digits:11',
        ]);


        $users = User::where('email', '=', $request -> input('email')) -> first();
            if ($users === null) {
            // User does not exist
            //store user
                User::create([
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'email' => $request->email,
                    'phone'=>$request->phone,
                ]);
            } else {
            // User exits
            return redirect()->back()->withFail('Kindly use another email address')->withInput();
            }
        

       
        return Redirect::to("/register")->withSuccess('Thanks for registering. Your information has been received');
        // return redirect()->route('register');
    }
}
