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
                                    <a href="#" class="media-body" data-toggle="modal" data-target="#Leave_id_Modal{{$item->id}}">
                                        <span class="name mb-0 text-sm">{{ $item->id }}</span>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Leave_id_Modal{{$item->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="Leave_id_Modal{{$item->id}}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            @livewire('request.forms.show-leave-form' , compact('item') , key($item->id))
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
                                           data-original-title="{{ fullName($item->user_id) }}">
                                            <img alt="Image placeholder" src="{{ asset(userPic($item->user_id)) }}">
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
                    {{ $forms -> links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
