<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="book_id_ModalLabel">Leave Form Request  {{ $item->id }}</h5>
        <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <ul>
            <li>Full Name : <b>{{fullName($item->user_id)}}</b></li>
            <li>Leave start : <b>{{$item->leave_start}}</b></li>
            <li>Leave End : <b>{{$item->leave_start}}</b></li>
            <li>Status :<b>{{ statusLeave($item->status) }}</b></li>
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
