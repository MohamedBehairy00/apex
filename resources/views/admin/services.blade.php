@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'APEX - Dashboard')
@section('content')
    <div class="min-height-200px">
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
            <div>
                <h4 class="text-center h4 text-primary">UPDATE SERVICES </h4>
            </div>

            <form method="POST" enctype="multipart/form-data" action="{{ route('services.update') }}">
                @csrf
                @method('PUT')
                @foreach ($services as $service)
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <p>Procurement Services & Talent
                                Matching Platform</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label>desc</label>
                            <textarea name="desc[]" class="form-control" cols="30" rows="10">{{ $service->desc }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>title1 <span style="color: red">*</span> </label>
                                <input type="text" name="title1[]" value="{{ $service->title1 }}" class="form-control">
                                <!-- Hidden field for ID -->
                                <input type="hidden" name="service_ids[]" value="{{ $service->id }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>desc1 <span style="color: red">*</span> </label>
                                <textarea name="desc1[]" class="form-control" cols="30" rows="10">{{ $service->desc1 }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>title2 <span style="color: red">*</span> </label>
                                <input type="text" name="title2[]" value="{{ $service->title2 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>desc2 <span style="color: red">*</span> </label>
                                <textarea name="desc2[]" class="form-control" cols="30" rows="10">{{ $service->desc2 }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>title3 <span style="color: red">*</span> </label>
                                <input type="text" name="title3[]" value="{{ $service->title3 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>desc3 <span style="color: red">*</span> </label>
                                <textarea name="desc3[]" class="form-control" cols="30" rows="10">{{ $service->desc3 }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>title4 <span style="color: red">*</span> </label>
                                <input type="text" name="title4[]" value="{{ $service->title4 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>desc4 <span style="color: red">*</span> </label>
                                <textarea name="desc4[]" class="form-control" cols="30" rows="10">{{ $service->desc4 }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>title5 <span style="color: red">*</span> </label>
                                <input type="text" name="title5[]" value="{{ $service->title5 }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>desc5 <span style="color: red">*</span> </label>
                                <textarea name="desc5[]" class="form-control" cols="30" rows="10">{{ $service->desc5 }}</textarea>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="form-group row text-center mt-5">
                    <div class="col-sm-12 col-md-12">
                        <input class="btn btn-outline-primary btn-sm" type="submit" value="SUBMIT">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
