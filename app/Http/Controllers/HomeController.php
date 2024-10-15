<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Products;
use App\Models\Services;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products_details;
use App\Http\Controllers\Controller;
use App\Models\Products_details_show;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web.index');
    }
    public function aboutIndex()
    {
        return view('web.about');
    }
    public function aboutServices()
    {
        return view('web.services');
    }
    public function details_show(Request $request, $id)
    {
        return view('web.products_details_show');
    }
    public function teamIndex()
    {
        $person_one = Team::find(1);
        $person_two = Team::find(2);
        $person_three = Team::find(3);
        $person_four = Team::find(4);
        return view('web.team', [
            'person_one' => $person_one,
            'person_two' => $person_two,
            'person_three' => $person_three,
            'person_four' => $person_four
        ]);
    }
    public function productsView()
    {
        return view('web.products_view');
    }
    public function products($id)
    {
        $products = Products::where('id', $id)->get(); // Assuming 'category_id' or another suitable column


        return view('web.products', ['products' => $products]);
    }
    public function productsIndex($id)
    {
        $product_details = Products::where('id', $id);
        return view('web.products_details', ['product_details' => $product_details]);
    }
    public function productDetails($id)
    {
        $product_details = Products_details::where('sections_id', $id)->get();
        return view('web.products_details', ['product_details' => $product_details]);
    }
    public function Product_details_show($id)
    {
        $sidamo_section = Products_details_show::where('sub_section_id', $id)
            ->where('section_photo_id', 1)
            ->where('id', 1)
            ->first();

        $Kaffa_section = Products_details_show::where('sub_section_id', $id)
            ->where('section_photo_id', 1)
            ->where('id', 2)
            ->first();

        $Djimmah_section = Products_details_show::where('sub_section_id', $id)
            ->where('section_photo_id', 1)
            ->where('id', 17)
            ->first();

        $sidamo_small_section = Products_details_show::where('sub_section_id', $id)->where('section_photo_id', '=', 2)->where('product_id', '=', 1)->get();
        $Kaffa_small_section = Products_details_show::where('sub_section_id', $id)->where('section_photo_id', '=', 2)->where('product_id', '=', 2)->get();
        $Djimmah_small_section = Products_details_show::where('sub_section_id', $id)->where('section_photo_id', '=', 2)->where('product_id', '=', 3)->get();

        return view('web.products_details_show', [
            'sidamo_section' => $sidamo_section,
            'Kaffa_section' => $Kaffa_section,
            'Djimmah_section' => $Djimmah_section,
            'sidamo_small_section' => $sidamo_small_section,
            'Kaffa_small_section' => $Kaffa_small_section,
            'Djimmah_small_section' => $Djimmah_small_section,
        ]);
    }
    public function servicesDetails($id)
    {
        $servicesDetails = Services::find($id);
        return view('web.services_details', ['servicesDetails' => $servicesDetails]);
    }
    public function contactIndex()
    {
        return view('web.contact');
    }
}
