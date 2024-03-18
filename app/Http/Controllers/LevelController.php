<?php

namespace App\Http\Controllers;

use App\Http\Requests\Levels\StoreRequest;
use App\Http\Requests\Levels\UpdateRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('levels.index');
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
        Level::create([
            'name' => $request->name,
        ]);
        // noty()->addSuccess('Level successfully added.');
        return response()->json(['success' => true, 'message' => 'Level successfully added.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Level $level)
    {
        $level->update([
            'name' => $request->name,
            'is_active' => $request->active,
        ]);

        return response()->json(['success' => true, 'message' => 'Level successfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Level::whereIn("id", $request->delete_ids)->delete();

        return response()->json(['success' => true, 'message' => 'Level successfully deleted.']);
    }

    public function get()
    {
        $levels = Level::get();

        return response()->json(['levels' => $levels]);
    }

    public function getCount()
    {
        $counts = Level::selectRaw('SUM(is_active) as active_count, SUM(NOT is_active) as inactive_count')->first();

        return response()->json(['counts' => $counts]);
    }

    public function getDetail(Level $level) {
        return response()->json(['level' => $level]);
    }
}
