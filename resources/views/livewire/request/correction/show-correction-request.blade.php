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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close
        </button>
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
    </div>
</div>
