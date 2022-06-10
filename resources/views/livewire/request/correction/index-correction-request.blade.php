<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Correction Request List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Book ID</th>
                        <th scope="col" class="sort" data-sort="budget">Passenger</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Referrals</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($correction_requests as $item)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="media-body" data-toggle="modal" data-target="#book_id_Modal_{{$item->id}}">
                                        <span class="name mb-0 text-sm">{{ $item->book_id }}</span>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="book_id_Modal_{{$item->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="book_id_Modal_{{$item->id}}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            @livewire('request.correction.show-correction-request' , compact('item') , key($item->id))
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                {{ $item->passenger_name }}
                            </td>
                            <td>
                              <span class="badge badge-dot mr-4">
                                @if($item->active)
                                      <i class="bg-success"></i>
                                  @else
                                      <i class="bg-danger"></i>
                                  @endif
                                <span class="status">{{ $item->status }}</span>
                              </span>
                            </td>
                            <td>
                                @livewire('referral.users-in-referral' , ['type'=> 'Correction' , 'type_id'=>$item->id
                                ] , key($item->id) )
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
                {{ $correction_requests->links() }}
            </div>
        </div>
    </div>
</div>
