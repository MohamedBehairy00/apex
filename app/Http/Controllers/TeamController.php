<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $teamMembers = Team::whereIn('id', [1, 2, 3, 4])->get();

        return view('admin.team.update', compact('teamMembers'));
    }


    public function update(Request $request)
    {
        try {
            $request->validate([
                'name.*' => 'required',
                'title.*' => 'required',
                'description.*' => '',
            ]);

            $memberIds = $request->input('member_ids');
            $names = $request->input('name');
            $titles = $request->input('title');
            $descriptions = $request->input('description');

            foreach ($memberIds as $key => $memberId) {
                $teamMember = Team::find($memberId);
                if ($teamMember) {
                    $teamMember->update([
                        'name' => $names[$key],
                        'title' => $titles[$key],
                        'description' => nl2br($descriptions[$key]), // Apply nl2br() here
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Team Data Updated Successfully');
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log the exception message for debugging
            Log::error('Error updating Team Data: ' . $e->getMessage());
            // Return error message
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $id)
    {
    }
}
