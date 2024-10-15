@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'APEX - Dashboard')
@section('content')
    <div class="min-height-200px">
        <!-- basic table  Start -->
        <div class="pd-20 card-box mb-30">
            <div>
                <h4 class="text-center h4 text-primary">UPDATE TEAM DATA </h4>
            </div>

            <form method="POST" enctype="multipart/form-data" action="{{ route('team.update') }}">
                @csrf
                @method('PUT')
                @foreach ($teamMembers as $member)
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Name <span style="color: red">*</span> </label>
                                <input type="text" name="name[]" value="{{ $member->name }}" class="form-control"
                                    required>
                                <!-- Hidden field for ID -->
                                <input type="hidden" name="member_ids[]" value="{{ $member->id }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Title <span style="color: red">*</span> </label>
                                <input type="text" name="title[]" value="{{ $member->title }}" class="form-control"
                                    required>
                                <!-- Hidden field for title -->
                                <input type="hidden" name="title_ids[]" value="{{ $member->id }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label>Description</label>
                            <textarea name="description[]" class="form-control" cols="30" rows="10">{{ $member->description }}</textarea>
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
