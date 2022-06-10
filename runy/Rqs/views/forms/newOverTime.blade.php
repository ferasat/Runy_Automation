@extends('layouts.app', ['title' => __('Make a over time form')])

@section('content')
    @include('layouts.headers.simple')

    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Make a over time form</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ asset(route('home')) }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ asset(route('over-time-forms.index')) }}">Over Time Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New Over Time Form</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">

        @livewire('request.forms.new-over-time-form')

        <!-- Footer -->
        @include('layouts.footers.auth')
    </div>
@endsection
