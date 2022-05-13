<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Leave Forms List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">ID</th>
                        <th scope="col" class="sort" data-sort="budget">Start</th>
                        <th scope="col" class="sort" data-sort="status">End</th>
                        <th scope="col">Referrals</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($forms as $item)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="media-body" data-toggle="modal" data-target="#book_id_Modal">
                                        <span class="name mb-0 text-sm">{{ $item->id }}</span>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="book_id_Modal" tabindex="-1" role="dialog"
                                         aria-labelledby="book_id_ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            @livewire('request.correction.show-correction-request' , compact('item'))

                                        </div>
                                    </div>
                                </div>
                            </th>

                            <td class="budget">
                                {{ $item->leave_start }}
                            </td>

                            <td class="budget">
                                {{ $item->leave_end }}
                            </td>

                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
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
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">See</a>
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
