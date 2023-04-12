<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\ModelStudent;
use App\Models\User;

class StudentController extends Controller
{
    private $objUser;
    private $objStudent;

    public function __construct(){
        $this->objUser = new User();
        $this->objStudent = new ModelStudent();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = $this->objStudent->all();
        return view('index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $cre = $this->objStudent->create([
            'nickname'=>$request->nickname,
            'age'=>$request->age,
            'height'=>$request->height,
            'user_id'=>$request->user_id
        ]);

        if($cre){
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = $this->objStudent->all()->find($id);
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = $this->objStudent->find($id);
        $users = $this->objUser->all();
        return view('create', compact('student', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $this->objStudent->where(['id'=>$id])->update([
            'nickname'=>$request->nickname,
            'age'=>$request->age,
            'height'=>$request->height,
            'user_id'=>$request->user_id
        ]);

        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
