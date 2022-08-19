<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('auth.admin-register');
    }


    // save user
    public function store(Request $request)
    {
        // validate input requests
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|max:12',
        ]);

        // insert to db
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        if ($admin) {
            return back()->with('message', 'User created successfully!');
        } else {
            return back()->with('message', 'Oops, something went wrong. Please try again later.');
        }
    }

    function check(Request $request)
    {

        // validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        // get user input from db
        $user_info = Admin::where('email', '=', $request->email)->first();

        if (!$user_info) {
            # code...
            return back()->with('error', 'Wrong credentials!');
        } else {
            // check password
            if (Hash::check($request->password, $user_info->password)) {
                $request->session()->put('LoggedUser', $user_info->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('error', 'Email or password is wrong!');
            }
        }
    }

    public function dashboard()
    {
        // load logged in user info
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];

        return view('admin.dashboard', $data);
    }

    public function settings()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];

        return view('admin.settings', $data);
    }
}