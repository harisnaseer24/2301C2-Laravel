<?php

namespace App\Http\Controllers;
use App\Models\StudentModel;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(Request $request){
    //    dd($request->all());
$request->validate([
"fullName"=>"required",
"email"=>"required | email",
"contact"=>"required",
"city"=>"required",
"image"=>"required | ",
]);

$imageName=time().".".$request->image->extension();
$request->image->move(public_path('/student_uploads'),$imageName);
// dd($imageName);
$Student_data= new StudentModel();
$Student_data->fullName=$request->fullName;
$Student_data->email=$request->email;
$Student_data->contact=$request->contact;
$Student_data->city=$request->city;
$Student_data->image=$imageName;

$Student_data->save();
return back()->withSuccess('Success');

    }
    public function getStudents(){
        // $test=StudentModel::get();
        // dd($test);
        return view("students",['students'=>StudentModel::get()]);
    }
    public function deleteStudent($id){
      StudentModel::destroy($id);

      return back()->withSuccess('Deleted');
    }
}
