<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ["name" => "Rashid", "email" => "rashid@gmail.com"],
            ["name" => "Ali", "email" => "ali@gmail.com"],
            ["name" => "Mahek", "email" => "mahek@gmail.com"],
        ];
        return view("users", ['manushjon' => $users]);
    }
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required | numeric | min:1',
        ]);
        $age_flag = "";
        if($request['age'] >= 18){
            $age_flag = 'Welcome';
        } else {
            $age_flag = 'Underage';
        }

        

        return "Form Submitted Successfully!<br> Name: " .
            $request['name'] . " | Email: " . $request['email'] . $age_flag;
    }
}
