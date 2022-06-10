<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Referral List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Kind</th>
                        <th scope="col" class="sort" data-sort="budget">From</th>
                        <th scope="col" class="sort" data-sort="status">to</th>
                        <th scope="col">Referrals</th>
                        <th scope="col">Status</th>
                        <th scope="col">View</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($referrals as $item)
                        <tr>
                            <th scope="row">

                               <span class="mb-0 text-sm">
                                   @if($item->from == Auth::id())
                                       <span class="text-black-50">Submitted</span>
                                       @if($item->type == 'pay')
                                           <span class="badge badge-pill badge-info">Pay</span>
                                       @elseif($item->type == 'Correction')
                                           <span class="badge badge-pill badge-primary">Correction</span>
                                       @endif
                                   @else
                                       <span class="text-dark">Received</span>
                                       @if($item->type == 'pay')
                                           <span class="badge badge-pill badge-info">Pay</span>
                                       @elseif($item->type == 'Correction')
                                           <span class="badge badge-pill badge-primary">Correction</span>
                                       @elseif($item->type == 'Leave')
                                           <span class="badge badge-pill badge-default">Leave</span>
                                       @elseif($item->type == 'OverTime')
                                           <span class="badge badge-pill badge-secondary">Over Time</span>
                                       @endif
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
                                @livewire('referral.users-in-referral' , ['type'=> $item->type ,
                                'type_id'=>$item->type_id ] , key($item->id) )
                            </td>

                            <td>
                              <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">{{ statusReferral($item->status) }}</span>
                              </span>
                            </td>

                            <td class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modalView{{$item->id}}">
                                    View
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalView{{$item->id}}" data-backdrop="static"
                                     data-keyboard="false" tabindex="-1" aria-labelledby="modalView{{$item->id}}Label"
                                     aria-hidden="true">
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
            <!-- Card footer -->
            <div class="card-footer py-4">
                {{ $referrals->links() }}
            </div>
        </div>
    </div>
</div>
