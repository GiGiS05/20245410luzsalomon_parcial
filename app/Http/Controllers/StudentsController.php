<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use App\Http\Resources\StudentResource;
use Illuminate\Http\Request;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Students::query()
        ->when($request->has('badge'), 
            fn ($query)=>$query->where('badge', $request->input('badge')))
        
            ->when($request->has('state'), 
            fn ($query)=>$query->where('state', $request->input('state')))

        ->get();        
        
        return StudentResource::collection($students);
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
    public function store(StoreStudentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
