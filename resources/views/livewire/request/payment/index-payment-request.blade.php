<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Payment Request List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Book ID</th>
                        <th scope="col" class="sort" data-sort="budget">Price</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Users</th>
                        <th scope="col" class="sort" data-sort="completion">Completion</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($payment_requests as $item)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="media-body" data-toggle="modal" data-target="#book_id_Modal">
                                        <span class="name mb-0 text-sm">{{ $item->book_id }}</span>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="book_id_Modal" tabindex="-1" role="dialog"
                                         aria-labelledby="book_id_ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            @livewire('request.payment.show-payment-request' , compact('item'))

                                        </div>
                                    </div>


                                </div>
                            </th>
                            <td class="budget">
                                {{ $item->price }} {{ $item->currency }}
                            </td>
                            <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">{{ statusRPay($item->status) }}</span>
                      </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                                    @foreach(personInReferral('pay' , $item->type_id) as $referr)
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                           data-original-title="{{ fullName($referr->to) }}">
                                            <img alt="Image placeholder" src="{{ asset(userPic($referr->to)) }}">
                                        </a>
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion mr-2">20%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
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
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
