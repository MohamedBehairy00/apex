@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'APEX - Dashboard')
@section('content')
    <div class="min-height-200px">
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
            <div>
                <h4 class="text-center h4 text-primary">UPDATE PRODUCT </h4>
            </div>

            <form method="POST" enctype="multipart/form-data"
                action="{{ route('product.update', ['id' => $product->id]) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-3 col-sm-12 ">
                        <img src="{{ asset($product->image) }}" width="100%" height="100%" alt="">
                    </div>
                    <div class="col-md-9 col-sm-12 mt-5">
                        <div class="form-group ">
                            <label class="custom-file-label file-name">Choose Image <span style="color: red">*</span>
                            </label>
                            <input type="file" name="image" class="custom-file-input file-input ">
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Title <span style="color: red">*</span> </label>
                            <input value="{{ $product->title }}" type="text" class="form-control"
                                name="title"@required(true)>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Category <span style="color: red">*</span> </label>
                            <select name="category_id" class="custom-select2 form-control select2-hidden-accessible"
                                style="width: 100%; height: 38px" tabindex="-1" aria-hidden="true">
                                <option value="{{ $product->category_id }}">{{ $product->category->title }}
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <label>Description <span style="color: red">*</span> </label>
                        <textarea name="description" id=""  class="form-control" cols="30" rows="10">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-12 col-md-12 mt-4">
                        <input class="btn btn-outline-primary btn-sm" type="submit" value="Save Changes">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
