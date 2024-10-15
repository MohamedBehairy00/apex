<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ServicesController extends Controller
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
        $services = Services::whereIn('id', [1, 2])->get();

        return view('admin.services', compact('services'));
    }


    public function update(Request $request)
    {
        try {
            // Validate the input fields
            $request->validate([
                'desc.*' => 'nullable|string',
                'title1.*' => 'nullable|string',
                'desc1.*' => 'nullable|string',
                'title2.*' => 'nullable|string',
                'desc2.*' => 'nullable|string',
                'title3.*' => 'nullable|string',
                'desc3.*' => 'nullable|string',
                'title4.*' => 'nullable|string',
                'desc4.*' => 'nullable|string',
                'title5.*' => 'nullable|string',
                'desc5.*' => 'nullable|string',
            ]);

            // Retrieve all the input arrays
            $serviceIds = $request->input('service_ids');
            $descs = $request->input('desc');
            $titles1 = $request->input('title1');
            $descs1 = $request->input('desc1');
            $titles2 = $request->input('title2');
            $descs2 = $request->input('desc2');
            $titles3 = $request->input('title3');
            $descs3 = $request->input('desc3');
            $titles4 = $request->input('title4');
            $descs4 = $request->input('desc4');
            $titles5 = $request->input('title5');
            $descs5 = $request->input('desc5');

            // Iterate over each service and update it
            foreach ($serviceIds as $key => $serviceId) {
                $service = Services::find($serviceId);
                if ($service) {
                    $service->update([
                        'desc' => nl2br($descs[$key]),
                        'title1' => $titles1[$key],
                        'desc1' => nl2br($descs1[$key]),
                        'title2' => $titles2[$key],
                        'desc2' => nl2br($descs2[$key]),
                        'title3' => $titles3[$key],
                        'desc3' => nl2br($descs3[$key]),
                        'title4' => $titles4[$key],
                        'desc4' => nl2br($descs4[$key]),
                        'title5' => $titles5[$key],
                        'desc5' => nl2br($descs5[$key]),
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Services Data Updated Successfully');
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log the exception message for debugging
            Log::error('Error updating Services Data: ' . $e->getMessage());
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
