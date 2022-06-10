<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Correction Request
            For Book {{ $item->id }}</h5>
        <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <p class="text-body">
            Please pay <b>{{ $item->price }} {{ $item->currency }} </b> for <b>{{ $item->getter }}</b><br> to buy
            <b>{{ $item->cause }}</b> , book ID
            <b>{{ $item->book_id }}</b> , until <b>{{ $item->deadline }}</b>.<br>
            Passenger Name: <b>{{ $item->passenger_name }}</b> <br>
            Bank name: <b>{{ $item->name_bank }}</b> <br>
            Bank account number: <b>{{ $item->number_account_bank }}</b> <br>
            Account holder name: <b>{{ $item->account_owner_bank }}</b> <br>
            Description: <b>{{ $item->description }}</b> <br>
        </p>
        <div class="row">
            <div class="col-6">
                Counter : {{fullName($item->user_id)}}<br>
                <img class="avatar"
                     src="{{ asset( userInfo($item->user_id)->pic ) }}"
                     alt="Counter">
            </div>
            <div class="col-6">
                <div class="d-block">signature :</div>
                <div class="avatar">
                    <img class="avatar"
                         src="{{ asset( userInfo($item->user_id)->Signature ) }}"
                         alt="Counter">
                </div>
            </div>
        </div>
    </div>

    <div class="border-bottom"></div>

    @if($canSeeRef_2)
        @if($item -> approve_2 == null or $item -> person_2 == '')
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Second reference :</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-md-6 col-lg-3 col-form-label "><b>{{ fullName($item->person_2) }}</b> It is
                        approved ?</label>
                    <div class="col-sm-9 col-md-6 col-lg-9">
                        <select class="form-control " wire:model.lazy="approve">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-danger">Referral To :</label>
                    <div class="col-sm-9 ">
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

                <h4 class="modal-title">Second reference :</h4>

                <div class="form-group row">
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <b>{{ fullName($item->person_2) }}</b>, It is approved ? @if($item->approve_2 == 1) Yes @else
                            No @endif
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <div class="avatar">
                            <img class="avatar"
                                 src="{{ asset( $item->signature_2) }}"
                                 alt="Counter">
                        </div>
                    </div>

                    <label class="col-sm-12 col-form-label text-danger">Referral To :
                        <b>{{ fullName($item->person_3) }}</b></label>

                </div>
            </div>
        @endif

    @endif
    @if($canSeeRef_3)
        @if($item -> approve_3 == null or $item -> person_3 == '')
            <div class="modal-body">

                <h4 class="modal-title">Third reference :</h4>

                <div class="form-group row">
                    <label class="col-sm-5 col-form-label "><b>{{ fullName($item->person_3) }}</b> It is approved ?</label>
                    <div class="col-sm-7 ">
                        <select class="form-control " wire:model.lazy="approve">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-5 col-form-label text-danger">Referral To :</label>
                    <div class="col-sm-7 ">
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
                        <button class="btn btn-success" wire:click.privent="save({{$item->id}} , 3)">Save</button>
                    </div>
                </div>
            </div>
        @else
            <div class="modal-body">

                <h4 class="modal-title">Third reference :</h4>

                <div class="form-group row">
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <b>{{ fullName($item->person_3) }}</b>, It is approved ? @if($item->approve_3 == 1) Yes @else
                            No @endif
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <div class="avatar">
                            <img class="avatar"
                                 src="{{ asset( $item->signature_3) }}"
                                 alt="Counter">
                        </div>
                    </div>

                    <label class="col-sm-12 col-form-label text-danger">Referral To :

                        <b>{{ fullName($item->person_4) }}</b></label>

                </div>
            </div>
        @endif
    @endif
    @if($canSeeRef_4)
        @if($item -> approve_4 == null or $item -> person_4 == '')
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Fourth Reference :</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label "><b>{{ fullName($item->person_4) }}</b> It is approved ?</label>
                    <div class="col-sm-9 ">
                        <select class="form-control " wire:model.lazy="approve">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-danger">Referral To :</label>
                    <div class="col-sm-9 ">
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
                        <button class="btn btn-success" wire:click.privent="save({{$item->id}} , 4)">Save</button>
                    </div>
                </div>
            </div>
        @else
            <div class="modal-body">

                <h4 class="modal-title">Fourth reference :</h4>

                <div class="form-group row">
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <b>{{ fullName($item->person_4) }}</b>, It is approved ? @if($item->approve_4 == 1) Yes @else
                            No @endif
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <div class="avatar">
                            <img class="avatar"
                                 src="{{ asset( $item->signature_4) }}"
                                 alt="Counter">
                        </div>
                    </div>

                    <label class="col-sm-12 col-form-label text-danger">Referral To :
                        <b>{{ fullName($item->person_5) }}</b></label>

                </div>
            </div>
        @endif
    @endif
    @if($canSeeRef_5)
        @if($item -> approve_5 == null or $item -> person_5 == '')
            <div class="modal-body">
                <div class="modal-header">
                    <h4 class="modal-title">Fifth Reference :</h4>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label ">{{ fullName($item->person_1) }} It is approved
                        ?</label>
                    <div class="col-sm-9 ">
                        <select class="form-control " wire:model.lazy="approve">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-danger">Referral To :</label>
                    <div class="col-sm-9 ">
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
                        <button class="btn btn-success" wire:click.privent="save({{$item->id}} , 5)">Save</button>
                    </div>
                </div>
            </div>
        @else
            <div class="modal-body">

                <h4 class="modal-title">Fourth reference :</h4>

                <div class="form-group row">
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <b>{{ fullName($item->person_5) }}</b>, It is approved ? @if($item->approve_5 == 1) Yes @else
                            No @endif
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6  ">
                        <div class="avatar">
                            <img class="avatar"
                                 src="{{ asset( $item->signature_5) }}"
                                 alt="Counter">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close
        </button>
        <!--        <button type="button" class="btn btn-primary">Save changes</button>-->
    </div>
</div>
