@extends('admin.layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Apex - Dashboard')
@section('content')

    <div class="card-box pd-20 height-100-p mb-30 ">
        <div class="row align-items-center text-left">
            <div class="col-md-4 text-center">
                <img width="50%" src="{{ asset('web//assets/img/logo/logo-dark.png') }}" alt="">
            </div>
            <div class="col-md-8 ">
                <h4 style="display: inline" class="font-20 weight-500 mb-10 text-capitalize">
                    WELCOME BACK
                    <div style="display: inline" class="weight-600 font-30 text-primary">
                        {{ Auth::guard()->user()->first_name }} {{ Auth::guard()->user()->last_name }}!</div>
                </h4>
                <p class="font-18 text-dark">
                    <a href="{{ route('home.page') }}"> This is APEX GLOBUS </a>
                    CMS Manager
                </p>
            </div>
        </div>
    </div>
    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ date('d-m-y') }}</div>
                        <div class="font-14 text-secondary weight-500">
                            {{ strtoupper(date('l')) }}
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);">
                            <i class="icon-copy dw dw-calendar1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
