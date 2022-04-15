@extends('user.layouts.template')
@section('title' , 'سمت ها')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">سمت ها</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="{{asset(route('rp.index'))}}">
                                    <i class="ti-home mr-1"></i> دسترسی ها
                                </a>
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-settings mr-1"></i> ایجاد
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="{{ asset(route('user_role.index')) }}">سمت جدید</a>
                                    <a class="dropdown-item" href="{{ asset(route('user_permission.index')) }}">بخش جدید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
    @livewire('admin.users.rp.new-role' , [ 'roles' => $roles , 'parts' => $parts ])
@endsection
