@php
    $title = 'بخش ها';
    $description = 'مدیریت دسترسی و سمت ها';
@endphp
@extends('layout.main')
@section('content')
    <section class="w-full"><!--محتوا-->
        <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 w-full">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <nav class="bg-gray-800 pt-10 w-full">
                <div class="rounded-tr-full bg-gradient-to-l from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <div class="relative flex items-center justify-between h-16">


                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            {{ $title }}
                        </div>
                    </div>
                </div>


            </nav>

            <!-- end page title end breadcrumb -->
            @livewire('setting.rp.new-part' , [ 'roles' => $roles , 'parts' => $parts ])

        </div>
    </section>
@endsection
