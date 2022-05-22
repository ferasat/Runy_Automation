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

                               <span class="mb-0 text-sm">@if($item->from == Auth::id()) Submitted @else Received @endif</span>

                            </th>
                            <th scope="budget">
                                {{ fullName($item->from) }}
                            </th>
                            <td class="budget">
                                {{ fullName($item->to) }}
                            </td>

                            <td>
                                @livewire('referral.users-in-referral' , ['type'=> 'pay' , 'type_id'=>$item->type_id ] , key($item->id) )
                            </td>

                            <td>
                              <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">{{ statusReferral($item->status) }}</span>
                              </span>
                            </td>

                            <td class="text-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalView{{$item->id}}">
                                    View
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalView{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalView{{$item->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalView{{$item->id}}Label">{{ fullName($item->from) }} {{$item->id}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!! $item !!}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
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
