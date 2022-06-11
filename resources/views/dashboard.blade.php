@extends('layouts.app' , ['title' => __('Dashboard')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">All Referrals</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ asset(route('referral.index')) }}" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">kind</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Users</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($referrals as $item)
                                <tr>
                                    <th scope="row">

                                        <span class="mb-0 text-sm">
                                            @if($item->from == Auth::id())
                                                <i class="fas fa-arrow-up text-success mr-3"></i> Submitted
                                            @else
                                                <i class="fas fa-arrow-down text-danger mr-3"></i> Received
                                            @endif
                                        </span>

                                    </th>
                                    <th scope="budget">
                                        {{ fullName($item->from) }}
                                    </th>
                                    <td class="budget">
                                        {{ fullName($item->to) }}
                                    </td>

                                    <td>
                                        <div class="avatar-group">
                                            @foreach(personInReferral($item->type , $item->type_id) as $referr)
                                                <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                                   data-original-title="{{ fullName($referr->to) }}">
                                                    <img alt="Image placeholder" src="{{ asset(userPic($referr->to)) }}">
                                                </a>
                                            @endforeach
                                        </div>
                                    </td>

                                    <td >
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalView{{$item->id}}">
                                            View
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalView{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalView{{$item->id}}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                @if($item->type == 'pay')
                                                    @livewire('request.payment.show-payment-request' ,
                                                    ['item'=>getInfoRqsAsReferral($item->type_id, 'pay') ] , key($item->id))
                                                @elseif($item->type == 'Correction')
                                                    @livewire('request.correction.show-correction-request' ,
                                                    ['item'=>getInfoRqsAsReferral($item->type_id, 'Correction') ] ,
                                                    key($item->id))
                                                @elseif($item->type == 'Leave')
                                                    @livewire('request.forms.show-leave-form' ,
                                                    ['item'=>getInfoRqsAsReferral($item->type_id, $item->type) ] ,
                                                    key($item->id))
                                                @elseif($item->type == 'OverTime')
                                                    @livewire('request.forms.show-over-time-form' ,
                                                    ['item'=>getInfoRqsAsReferral($item->type_id, $item->type) ] ,
                                                    key($item->id))
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Notifications</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">From</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Payment
                                    </th>
                                    <td>
                                        Your request is accept .
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
