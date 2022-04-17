<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Users List</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="budget">Permission</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col" class="sort" data-sort="completion">email</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($users as $item)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="media-body">
                                        <span class="name mb-0 text-sm">{{ $item->name .' '.$item->family }}</span>
                                    </a>
                                </div>
                            </th>
                            <td class="budget">
                                {{ $item->levelUser . ' '.$item->levelPermission }}
                            </td>
                            <td>
                      <span class="badge badge-dot mr-4">
                        @if($item->status == 'active') <i class="bg-success"></i> @else <i class="bg-red"></i> @endif
                        <span class="status">{{ $item->status }}</span>
                      </span>
                            </td>

                            <td>
                                <div class="d-flex align-items-center">
                                    {{ $item -> email }}
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{ asset(route('user_edit').'?user_id='.$item->id) }}" >Edit</a>
                                        <a class="dropdown-item" href="#" wir:model="delete()">Delete</a>
                                        <a class="dropdown-item" href="#" wir:model="disable()">Disable</a>
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
