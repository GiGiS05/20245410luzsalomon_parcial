<?php

namespace App\Http\Controllers;

use App\Models\Leave_Requests;
use App\Http\Requests\StoreLeave_RequestsRequest;
use App\Http\Requests\UpdateLeave_RequestsRequest;
use App\Http\Resources\LeaveRequestsResource;
use App\Models\Students;

class LeaveRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeave_RequestsRequest $request)
    {
        $data = $request->validated();
        $data['date_solicited'] = now();
        $data['status'] = 'pending';

        //recover the amount of permits the studen has available
        $student = Students::find($data['student_id']);
        
        if($student['state']!='active'){
            return response()->json(['error' => 'Studiante no está activo'], 400);
        }

        $permits_available=$student->available_permits;


        if ($permits_available<=0){
            return response()->json(['error' => 'Studiante no tiene permisos disponibles'], 422);
        }

        $permit = Leave_Requests::create($data);
        
        return response()->json(LeaveRequestsResource::make($permit), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave_Requests $leave_Requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave_Requests $leave_Requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeave_RequestsRequest $request, Leave_Requests $leave_Requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave_Requests $leave_Requests)
    {
        //
    }
}
