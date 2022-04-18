@extends('layouts.app', ['title' => __('Edit Profile')])

@section('content')
    @livewire('theme.header.header-cover' , ['title'=>'Edit User'])

    <div class="container-fluid mt--7">
        @livewire('users.edit.edit-user' )

        @include('layouts.footers.auth')
    </div>
@endsection
