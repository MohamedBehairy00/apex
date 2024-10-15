<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class CategoriesController extends Controller
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
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Categories $category)
    {
        try {
            $request->validate([
                'title' => 'required',
                'test' => '1',
            ]);

            $category = new Categories([
                'title' => $request->get('title'),
            ]);
            $category->save();
            if ($category) {
                return redirect()->back()->with('success', 'Category Added Successfully');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->validator->errors()->all())->withInput();
        } catch (\Exception $e) {
            // Log the exception message for debugging
            Log::error('Error storing event: ' . $e->getMessage());
            // Return error message
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Products::where('category_id', $id)->get();

        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $id)
    {
        return view('admin.categories.update', ['category' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $id)
    {
        try {
            $request->validate([
                'title' => 'required',
            ]);

            $id->update([
                'title' => $request->get('title'),
            ]);

            if ($id) {
                return redirect()->back()->with('success', 'Category Updated Successfully');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log the exception message for debugging
            Log::error('Error updating Product: ' . $e->getMessage());
            // Return error message
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
