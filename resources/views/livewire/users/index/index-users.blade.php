<div class="row">
    <div class="col">
        <div class="card">
            @if (session('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        @endif
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
                        <th scope="col" class="sort" data-sort="completion">picture</th>
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
                            <td>
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="{{ $item->name .' '.$item->family }}">
                                        <img alt="Image placeholder" src="{{ asset($item -> pic) }}">
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
                                        <a class="dropdown-item" href="{{ asset(route('user_edit').'?user_id='.$item->id) }}" >Edit</a>
                                        <button class="dropdown-item"  wir:click.privent="delete({{$item->id}})">Delete</button>
                                        <button class="dropdown-item"  wir:click.privent="disable({{$item->id}})">Disable</button>
                                    </div>
                                </div>
                                <button class="btn btn-danger"  wir:click.privent="delete({{$item->id}})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
                <nav aria-label="...">
                    {{ $users->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
