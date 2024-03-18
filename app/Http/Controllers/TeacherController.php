<?php

namespace App\Http\Controllers;

use App\Http\Requests\Teachers\StoreRequest;
use App\Http\Requests\Teachers\UpdateRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $teacher = Teacher::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->email,
            'name' => $request->first_name . ' ' . $request->last_name,
        ]);

        $user->user_type()->save($teacher);

        return response()->json(['success' => true, 'message' => 'Teacher successfully added.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Teacher $teacher)
    {
        dd($teacher);
        // $teacher->update([
        //     'name' => $request->name,
        //     'is_active' => $request->active,
        // ]);

        return response()->json(['success' => true, 'message' => 'Level successfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
    
    public function get()
    {
        $teachers = Teacher::get();

        return response()->json(['teachers' => $teachers]);
    }

    public function getCount()
    {
        $counts = Teacher::selectRaw('SUM(is_active) as active_count, SUM(NOT is_active) as inactive_count')->first();

        return response()->json(['counts' => $counts]);
    }

    public function getDetail(Teacher $teacher) {
        return response()->json(['teacher' => $teacher]);
    }
}
