<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" >Correction Request
            For Book {{ $item->id }}</h5>
        <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <p class="text-body">
            Please pay <b>{{ $item->price }} {{ $item->currency }} </b> for <b>{{ $item->getter }}</b><br> to buy <b>{{ $item->cause }}</b> , book ID
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
    @if($is_account)
    <div class="modal-body">
        <div class="modal-header">
            <h4 class="modal-title">Accounting :</h4>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label ">It is approved ?</label>
            <div class="col-sm-10 ">
                <select class="form-control "  wire:model.lazy="approve">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-danger">Referral To :</label>
            <div class="col-sm-10 ">
                <select class="form-control " wire:model.lazy="to_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ fullName($user->id) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    @endif
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close
        </button>
        <!--        <button type="button" class="btn btn-primary">Save changes</button>-->
    </div>
</div>
