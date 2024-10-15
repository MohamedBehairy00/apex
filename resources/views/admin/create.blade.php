@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'DGP - Dashboard')
@section('content')
    <div class="min-height-200px">
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
            <div>
                <h4 class="text-center h4 text-primary ">ADD POST+</h4>
            </div>

            <form method="POST" enctype="multipart/form-data" class="text-center mt-3" action="{{ route('store') }}">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="alert alert-secondary " role="alert" style="font-family:Adam-Bold!important;">
                            <i class="bi bi-info-circle"></i>
                            {{ strtoupper('For podcasts use first image input & first viedo url link input') }}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="custom-file-label file-name">Choose Image <span
                                    class="text-danger">*</span></label>
                            <input type="file" name="image_one" class="custom-file-input file-input" required>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="custom-file-label file-name">Choose Image</label>
                            <input type="file" name="image_two" class="custom-file-input file-input">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="custom-file-label file-name">Choose Image</label>
                            <input type="file" name="image_three" class="custom-file-input file-input">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="custom-file-label file-name">Choose Image</label>
                            <input type="file" name="image_four" class="custom-file-input file-input">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-center" name="title"
                                placeholder="Post title .." required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Category <span class="text-danger">*</span></label>
                            <select name="category_id"
                                class="custom-select2 form-control text-center select2-hidden-accessible"
                                style="width: 100%; height: 38px" tabindex="-1" aria-hidden="true">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Blog story </label>
                            <textarea class="form-control text-center" name="description" id="" cols="30" rows="3"
                                placeholder="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout......"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Embeded Videos url</label>
                            <input type="text" class="form-control text-center" name="video_one_url"
                                placeholder="youtube.com/embed/....">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control text-center" name="video_two_url"
                                placeholder="youtube.com/embed/....">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control text-center" name="video_three_url"
                                placeholder="youtube.com/embed/....">
                        </div>
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-12 col-md-12">
                        <input class="btn btn-outline-primary btn-sm" type="submit" value="POST">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
