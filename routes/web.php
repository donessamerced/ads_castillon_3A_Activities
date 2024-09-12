<?php

use App\Models\courses;
use App\Models\student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/create', function () {
    $student = new Student();
    $student->first_name = 'John';
    $student->last_name = 'Doe';
    $student->age = 22;
    $student->email = 'john.doe@example.com';
    $student->save();
    return 'Student Create!!!';
});

Route::get('/student', function () {
    $student = Student::all();
    return $student;
});

Route::get('/student/update', function () {
    $student = Student::where('email', 'johndoe@example.com')->first();
    $student->email = 'johndoe@newemail.com';
    $student->age = 23;
    $student->save();
    return 'Student Updated!!';
});

Route::get('/student/delete', function () {
    $student = Student::where('email', 'johndoe@newemail.com')->first();
    $student->delete();
    return 'Student Deleted!!';
});

Route::get('/course/create', function(){
    $course = new courses();
    $course->course_name = 'introduction to Databases';
    $course->save();
    return 'Course Created';
}
);

Route::get('/course/{id}/student', function($id){
    $course = courses::find($id);
    return $course->student;
}
);