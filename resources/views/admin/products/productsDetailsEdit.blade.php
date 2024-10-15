@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'APEX - Dashboard')
@section('content')
    <div class="min-height-200px">
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
            <div>
                <h4 class="text-center h4 text-primary">UPDATE PRODUCT DETAILS</h4>
            </div>

            <form class="text-center" method="POST" enctype="multipart/form-data"
                action="{{ route('productsDetailsUpdate', ['sub_section_id' => $productDetails->first()->sub_section_id]) }}">
                @csrf
                @method('PUT')

                @foreach ($productDetails as $product)
                    <div class="row mt-5">
                        <div class="col-md-12 col-sm-12">
                            <img src="{{ asset($product->image) }}" alt="">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="custom-file-label file-name">Choose Image</label>
                                <input type="file" name="image[{{ $product->id }}]"
                                    class="custom-file-input file-input">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="form-group">
                                <label>Title</label>
                                <input value="{{ $product->title }}" type="text" class="form-control"
                                    name="title[{{ $product->id }}]">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Description</label>
                            <textarea name="desc[{{ $product->id }}]" class="form-control" cols="30" rows="10">{{ $product->desc }}</textarea>
                        </div>
                    </div>
                @endforeach

                <div class="form-group row text-center">
                    <div class="col-sm-12 col-md-12 mt-4">
                        <input class="btn btn-outline-primary btn-sm" type="submit" value="Save Changes">
                    </div>
                </div>
            </form>
            @if ($productDetails->first()->sub_section_id === 1)
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <a href="{{ route('productsDetailsShowEdit', ['section_id' => 1]) }}">EDIT Single-origin Organic
                            Arabica Coffee Beans -></a> <br>
                        <a href="{{ route('productsDetailsShowEdit', ['section_id' => 2]) }}">EDIT Single-origin Natural
                            Arabica Coffee Beans -></a>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
