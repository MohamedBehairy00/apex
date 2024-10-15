@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'APEX - Dashboard')
@section('content')
    <div class="min-height-200px">
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
            <div>
                <h4 class="text-center h4 text-primary">UPDATE PRODUCT </h4>
            </div>

            <form class="text-center" method="POST" enctype="multipart/form-data"
                action="{{ route('productsUpdate', ['id' => $product->id]) }}">
                @csrf
                @method('PUT')
                <div class="row mt-5">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="form-group">
                            <label>Title</label>
                            <input value="{{ $product->title }}" type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <img src="{{ asset($product->image) }}" alt="">
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <div>
                            <div class="form-group ">
                                <label class="custom-file-label file-name">Choose Image</label>
                                <input type="file" name="image" class="custom-file-input file-input ">
                            </div>
                        </div>
                    </div>

                </div>

                @if ($product->sub_title)
                    <div class="row">
                        <div class="col-md-6 col-sm-12 ">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <img src="{{ asset($product->sub_image) }}" alt="">
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div>
                                        <div class="form-group ">
                                            <label class="custom-file-label file-name">Choose Image
                                            </label>
                                            <input type="file" name="sub_image" class="custom-file-input file-input ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="form-group">
                                        <label>Sub section Title</label>
                                        <input value="{{ $product->sub_title }}" type="text" class="form-control"
                                            name="sub_title">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 ">
                                    <label>Sub section Description</label>
                                    <textarea name="sub_desc" id="" class="form-control" cols="30" rows="10">{{ $product->sub_desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <img src="{{ asset($product->sub_image2) }}" alt="">
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <div>
                                        <div class="form-group ">
                                            <label class="custom-file-label file-name">Choose Image
                                            </label>
                                            <input type="file" name="sub_image2" class="custom-file-input file-input ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="form-group">
                                        <label>Sub section Title </label>
                                        <input value="{{ $product->sub_title2 }}" type="text" class="form-control"
                                            name="sub_title2">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 ">
                                    <label>Sub section Description</label>
                                    <textarea name="sub_desc2" id="" class="form-control" cols="30" rows="10">{{ $product->sub_desc2 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <label>Description </label>
                        <textarea name="desc" id="" class="form-control" cols="15" rows="15">{{ $product->desc }}</textarea>
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-12 col-md-12 mt-4">
                        <input class="btn btn-outline-primary btn-sm" type="submit" value="Save Changes">
                    </div>
                </div>
            </form>
            @if ($product->id === 1)
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <a href="{{ route('productsDetailsEdit', ['sub_section_id' => 1]) }}">Edit
                            {{ $product->sub_title }} -></a> <br>
                        <a href="{{ route('productsDetailsEdit', ['sub_section_id' => 2]) }}">Edit
                            {{ $product->sub_title2 }} -></a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
