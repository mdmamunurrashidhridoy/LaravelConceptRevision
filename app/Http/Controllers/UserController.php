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
            ["name"=> "Mahek", "email"=> "mahek@gmail.com"],
        ];
        return view("users", ['manushjon' => $users]);
    }
}
