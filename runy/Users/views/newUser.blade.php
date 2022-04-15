@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @livewire('theme.header.header-cover' , ['title'=>'Add New User'])


    <div class="container-fluid mt--7">

        @livewire('users.new.new-user' )

        @include('layouts.footers.auth')
    </div>
@endsection
