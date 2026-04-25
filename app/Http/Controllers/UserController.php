<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
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
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]);
        return redirect('/students')->with('success', 'Student Saved Successfully');
    }
    public function students()
    {
        $students = Student::all();
        return view("students", compact("students"));
    }
    public function edit($id)
    {
        $student = Student::find($id);

        return view("edit", compact("student"));
    }
    public function findStudent(Request $request)
    {
        $id = $request->input('id');
        $student = Student::find($id);

        if($student){
            return view('findStudent', [
                'student' => $student,
                'success' => 'Student found Successfully'
            ]);
        } else {
            return view('findStudent', [
                'error' => 'No Student found!'
            ]);
        }
    }

    public function countStudent(){
        return Student::count();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric|min:1',
        ]);

        $student = Student::find($id);

        $student->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age
            ]
        );

        return redirect('/students')->with('success', 'Student Data Updated!');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student Deleted!');
    }

    public function task6(){
        $studentWithAge18 = Student::where('age', '>', 18)->get();
        return $studentWithAge18;
    }

    public function task7(){
        $studentWithnameAli = Student::where('name', 'LIKE', 'Ali')->get();
    }

    public function task9(){
        $studentWithAge18 = Student::where('age', '>', 18)->delete();
    }

}
