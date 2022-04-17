<div class="row">
    <div class="col">
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
                        <th scope="col" class="sort" data-sort="budget">Budget</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Referrals</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($correction_requests as $item)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="media-body">
                                        <span class="name mb-0 text-sm">{{ $item->book_id }}</span>
                                    </a>
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
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                    </a>
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="Romina Hadid">
                                        <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                    </a>
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="Alexander Smith">
                                        <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                    </a>
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="Jessica Doe">
                                        <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                    </a>
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
