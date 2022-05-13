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
                        <th scope="col" class="sort" data-sort="name">Kind</th>
                        <th scope="col" class="sort" data-sort="budget">From</th>
                        <th scope="col" class="sort" data-sort="status">to</th>
                        <th scope="col">Referrals</th>
                        <th scope="col">Status</th>
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
                                <div class="avatar-group">
                                    @foreach(personInReferral($item->type , $item->type_id) as $referr)
                                    <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                       data-original-title="{{ fullName($referr->to) }}">
                                        <img alt="Image placeholder" src="{{ asset(userPic($referr->to)) }}">
                                    </a>
                                    @endforeach
                                </div>
                            </td>

                            <td>
                              <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">{{ statusReferral($item->status) }}</span>
                              </span>
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
                {{ $referrals->links() }}
            </div>
        </div>
    </div>
</div>
