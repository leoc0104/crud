<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('register_students'); // Trocar para index
});

// Create

Route::post('/register_students', function(Request $info) {
    dd($info->all());
});

// Read

Route::get('/read_student/{student_id}', function($info) {
    $student = Student::findOrFail($info);
    echo $student->name;
    echo "<br />";
});

// Update

Route::get('/edit_student/{student_id}', function($info) {
    $student = Student::findOrFail($info);
    return view('edit_student', ['student' => $student]);
});

Route::put('/update_student/{student_id}', function(Request $info, $student_id) {
    $student = Student::findOrFail($student_id);
    $student->name = $info->student_name;
    $student->phone = $info->student_phone;
    $student->save();
    echo "Aluno atualizado com sucesso!";
});

// Delete

Route::get('/delete_student/{student_id}', function($student_id) {
    $student = Student::findOrFail($student_id);
    $student->delete();
    echo "Aluno excluído com sucesso";
});