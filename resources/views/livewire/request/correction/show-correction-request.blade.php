<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="book_id_Modal{{ $item->id }}Label">Correction Request
            For Book {{ $item->id }}</h5>
        <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <ul>
            <li>Passenger : <b>{{$item->passenger_name}}</b></li>
            <li>Supplier : <b>{{$item->supplier}}</b></li>
            <li>Supplier rate : <b>{{$item->supplier_rate}}</b></li>
            <li>Applicant : <b>{{$item->applicant}}</b></li>
            <li>Applicant rate : <b>{{$item->applicant_rate}}</b></li>
            <li>Cancel hotel : <b>{{cancelHotel($item->cancel_hotel)}}</b>
            </li>
            @if($item->cancel_hotel)
                <li>Cancellation fine for AsTravel
                    :<b>{{$item->penalty_cancellation_share}}</b></li>
                <li>The total price of the fine
                    :<b>{{$item->cancel_fine_hotel}}</b></li>
            @endif
            <li>Description :<b>{{$item->description}}</b></li>
            <li>Status :<b>{{$item->status}}</b></li>
        </ul>
        <div class="row">
            <div class="col-6">Counter : {{fullName($item->user_id)}}</div>
            <div class="col-6">
                <div class="d-block">signature :</div>
                <div class="avatar">
                    <img class="signature"
                         src="{{ asset( userInfo($item->user_id)->Signature ) }}"
                         alt="Counter">
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom"></div>
    <div class="modal-body">
        @if($canSeeRef_1)
            @if($item -> approve_1 == null or $item -> person_1 == '')
                <div class="modal-body">

                    <h4 class="modal-title">First reference :</h4>

                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label ">
                            <span><b>{{ $namePerson_1 }}</b> It is approved ?</span>
                        </label>
                        <div class="col-sm-5 ">
                            <select class="form-control " wire:model.lazy="approve">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label text-danger">Referral To :</label>
                        <div class="col-sm-5 ">
                            <select class="form-control " wire:model.lazy="to_id">
                                @foreach($users as $user)
                                    @if(is_accounting($user->id))
                                        <option value="{{ $user->id }}">{{ fullName($user->id) }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <button class="btn btn-success" wire:click.privent="save({{$item->id}} , 1)">Save</button>
                        </div>
                    </div>
                </div>
            @else
                <div class="modal-body">

                    <h4 class="modal-title">Third reference :</h4>

                    <div class="form-group row">
                        <div class="col-sm-6 col-md-6 col-lg-6  ">
                            <span><b>{{ $namePerson_1 }}</b>, It is approved ? @if($item->approve_1 == 1) Yes @else
                                    No @endif</span>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4  ">
                            <div class="avatar">
                                <img class="avatar"
                                     src="{{ asset( $item->signature_1) }}"
                                     alt="Counter">
                            </div>
                        </div>

                        <div class="col-sm-12 col-form-label text-danger">
                            Referral To : <b>{{ fullName($item->person_2) }}</b>
                        </div>

                    </div>
                </div>
            @endif
        @endif


        @if($canSeeRef_2)

            @if($item -> approve_2 == null or $item -> person_2 == '')
                <div class="modal-body">

                    <h4 class="modal-title">Second reference :</h4>

                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label ">
                            <span><b>{{ $namePerson_2 }}</b> It is approved ?</span>
                        </label>
                        <div class="col-sm-5 ">
                            <select class="form-control " wire:model.lazy="approve">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label text-danger">Referral To :</label>
                        <div class="col-sm-5 ">
                            <select class="form-control " wire:model.lazy="to_id">
                                @foreach($users as $user)
                                    @if(is_accounting($user->id))
                                        <option value="{{ $user->id }}">{{ fullName($user->id) }}</option>
                                    @endif
                                @endforeach
                                <option class="text-danger" value="finish">Finish Referral</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <button class="btn btn-success" wire:click.privent="save({{$item->id}} , 2)">Save</button>
                        </div>
                    </div>
                </div>
            @else
                <div class="modal-body">

                    <h4 class="modal-title">Third reference :</h4>

                    <div class="form-group row">
                        <div class="col-sm-6 col-md-6 col-lg-6  ">
                            <span><b>{{ $namePerson_2 }}</b>, It is approved ? @if($item->approve_2 == 1) Yes @else
                                    No @endif</span>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4  ">
                            <div class="avatar">
                                <img class="avatar"
                                     src="{{ asset( $item->signature_2) }}"
                                     alt="Counter">
                            </div>
                        </div>

                        <div class="col-sm-12 col-form-label text-danger">
                            Referral To : <b>{{ fullName($item->person_2) }}</b>
                        </div>

                    </div>
                </div>
            @endif
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close
        </button>
        <!--        <button type="button" class="btn btn-primary">Save changes</button>-->
    </div>
</div>
