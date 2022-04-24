<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="book_id_ModalLabel">Correction Request
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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close
        </button>
        <!--        <button type="button" class="btn btn-primary">Save changes</button>-->
    </div>
</div>
