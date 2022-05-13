@extends('layouts.app', ['title' => __(' ')])

@section('content')
    @include('layouts.headers.simple')

    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Leave Forms</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Leave Form</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">

                        <a href="#" class="btn  btn-neutral" data-toggle="modal" data-target="#create_leave">
                            New
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="create_leave" tabindex="-1" role="dialog"
                             aria-labelledby="create_leaveLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                @livewire('request.forms.create-leave-form' )

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        @livewire('request.forms.index-leave-form')
        <!-- Dark table -->

        <!-- Footer -->
        @include('layouts.footers.auth')
    </div>
@endsection
