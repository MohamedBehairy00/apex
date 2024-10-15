<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Products_details;
use App\Models\Products_details_show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index', ['products' => $products]);
    }
    public function edit(Products $id)
    {
        return view('admin.products.productsEdit', ['product' => $id]);
    }


    public function productsDetailsIndex($sub_section_id)
    {
        $productDetails = Products_details::where('sub_section_id', $sub_section_id)->get();
        return view('admin.products.productsDetailsEdit', ['productDetails' => $productDetails]);
    }

    public function productsDetailsShow($sub_section_id)
    {
        $productDetailsShow = Products_details_show::where('sub_section_id', $sub_section_id)->get();
        return view('admin.products.productsDetailsShow', ['productDetailsShow' => $productDetailsShow]);
    }

    public function productsUpdate(Request $request, Products $id)
    {
        try {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:6048',
                'sub_image' => 'image|mimes:jpeg,png,jpg|max:6048',
                'sub_image2' => 'image|mimes:jpeg,png,jpg|max:6048',
                'title' => 'required|string|max:255',
                'desc' => 'nullable|string',
                'sub_desc' => 'nullable|string',
                'sub_desc2' => 'nullable|string',
                'sub_title2' => 'nullable|string',
                'sub_title' => 'nullable|string',
            ]);
            $image = $request->file('sub_image');
            $image2 = $request->file('sub_image2');
            $image3 = $request->file('image');
            $path = 'web/assets/img/';

            $filename1 = $image ? $path . time() . '1' . '.' . $image->getClientOriginalExtension() : $id->sub_image;
            $filename2 = $image2 ? $path . time() . '2' . '.' . $image2->getClientOriginalExtension() : $id->sub_image2;
            $filename3 = $image3 ? $path . time() . '3' . '.' . $image3->getClientOriginalExtension() : $id->image;

            if ($image) {
                move_uploaded_file($image->getPathname(), $filename1);
            }

            if ($image2) {
                move_uploaded_file($image2->getPathname(), $filename2);
            }
            if ($image3) {
                move_uploaded_file($image3->getPathname(), $filename3);
            }

            $id->update([
                'sub_image' => $filename1,
                'sub_image2' => $filename2,
                'image' => $filename3,
                'title' => $request->get('title'),
                'desc' => nl2br($request->get('desc')),
                'sub_desc' => nl2br($request->get('sub_desc')),
                'sub_desc2' => nl2br($request->get('sub_desc2')),
                'sub_title2' => $request->get('sub_title2'),
                'sub_title' => $request->get('sub_title'),
            ]);

            if ($id) {
                return redirect()->back()->with('success', 'Updated Successfully');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
    public function productsDetailsUpdate(Request $request, $sub_section_id)
    {
        try {
            // Validate input fields
            $validationRules = [
                'image.*' => 'image|mimes:jpeg,png,jpg|max:6048',
                'title.*' => 'nullable|string|max:255',
                'desc.*' => 'nullable|string',
            ];

            $request->validate($validationRules);

            $images = $request->file('image');
            $path = 'web/assets/img/';

            // Iterate over each product id and update corresponding product
            foreach ($request->title as $id => $title) {
                $product = Products_details::find($id);

                if (!$product) {
                    continue;
                }

                if (isset($images[$id])) {
                    $image = $images[$id];
                    $filename = $path . time() . $id . '.' . $image->getClientOriginalExtension();

                    // Move the uploaded file
                    move_uploaded_file($image->getPathname(), $filename);

                    $product->image = $filename;
                }

                $product->title = $title ?? $product->title;
                $product->desc = nl2br($request->desc[$id]) ?? $product->desc;

                $product->save();
            }

            return redirect()->back()->with('success', 'Updated Successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error updating Products Details: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
    public function productsDetailsShowUpdate(Request $request, $section_id)
    {
        try {
            $validationRules = [
                'image.*' => 'nullable|image|mimes:jpeg,png,jpg|max:6048',
                'title.*' => 'nullable|string',
                'desc.*' => 'nullable|string',
            ];

            $request->validate($validationRules);

            // Check if images are present in the request
            $images = $request->file('image');
            $path = 'web/assets/img/';

            // If images are not null, proceed with the loop
            if ($images) {
                foreach ($images as $id => $image) {
                    $product = Products_details_show::find($id);

                    if (!$product) {
                        continue; // Skip if the product doesn't exist
                    }

                    if ($image) {
                        $filename = $path . time() . $id . '.' . $image->getClientOriginalExtension();

                        // Move the uploaded file
                        move_uploaded_file($image->getPathname(), $filename);

                        $product->image = $filename;
                    }

                    $product->title = $request->title[$id] ?? $product->title;
                    $product->desc = nl2br($request->desc[$id]) ?? $product->desc;

                    $product->save();
                }
            }

            // Handle text fields even if no images are uploaded
            foreach ($request->title as $id => $title) {
                $product = Products_details_show::find($id);

                if (!$product) {
                    continue; // Skip if the product doesn't exist
                }

                $product->title = $title ?? $product->title;
                $product->desc = nl2br($request->desc[$id]) ?? $product->desc;

                $product->save();
            }

            return redirect()->back()->with('success', 'Updated Successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error updating Products Details Show: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Products $products)
    {
        try {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:6048',
                'title' => 'required',
                'description' => 'required',
                'category_id' => 'required',
            ]);

            $image = $request->file('image');
            $path = 'web/assets/img/';

            $filename1 = $image ? $path . time() . '1' . '.' . $image->getClientOriginalExtension() : null;

            if ($image) {
                move_uploaded_file($image->getPathname(), $filename1);
            }

            $products = new Products([
                'image' => $filename1,
                'title' => $request->get('title'),
                'description' => nl2br($request->get('description')),
                'category_id' => $request->get('category_id'),
                'status' => '1',
            ]);

            $products->save();
            if ($products) {
                return redirect()->back()->with('success', 'Products Added Successfully');
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->validator->errors()->all())->withInput();
        } catch (\Exception $e) {
            // Log the exception message for debugging
            Log::error('Error storing products: ' . $e->getMessage());
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

        if ($products->isEmpty()) {
            abort(404);
        }

        // Pass the products to the view
        return view('web.products', ['products' => $products]);
    }
    public function destroy(Products $id)
    {
        $id->delete();
        if ($id) {
            return redirect()->back()->with('success', 'Product Successfully Deleted');
        }
    }
}
