@php
    $title = 'مدیریت دسترسی و سمت ها';
    $description = 'مدیریت دسترسی و سمت ها';
@endphp
@extends('layout.main')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">مدیریت دسترسی و سمت ها</h4>
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
                                    <a class="dropdown-item" href="{{ asset(route('user_permission.index')) }}">بخش
                                        جدید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">سمت ها</div>
                <div class="card-body">
                    <ul>
                        @foreach($roles as $role)
                            <li>
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-toggle="modal" data-target=".modal-{{$role->id}}">{{ $role -> name }}
                                    </button>
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade modal-{{$role->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">دسترسی های {{ $role -> name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @livewire( 'setting.rp.permission-role' , ['role_id' => $role->id , 'parts'=>$parts ] , key($role->id) )
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-6">
            <div class="card">
                <div class="card-header">بخش ها</div>
                <div class="card-body">
                    <ul>
                        @foreach($parts as $part)
                            <li>{{ $part -> name }} | slug: <strong>{{ $part -> slug }}</strong> | Id: {{ $part -> id }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
