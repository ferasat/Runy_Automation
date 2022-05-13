<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="create_leaveLabel">
            Leave Form 10
        </h5>
        <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body text-left">
        <div class="form-group">
            <label for="Employee" class="form-control-label">Employee</label>
            <input class="form-control" type="text" value="{{ fullName(\Illuminate\Support\Facades\Auth::id()) }}" id="Employee" readonly>
        </div>
        <div class="form-group">
            <label for="leave_start" class="form-control-label">Start</label>
            <input class="form-control" type="date"  id="leave_start" wir:model.lazy="leave_start">
        </div>
        <div class="form-group">
            <label for="leave_end" class="form-control-label">End</label>
            <input class="form-control" type="date"  id="leave_end" wir:model.lazy="leave_end">
        </div>
        <div class="form-group">
            <label for="leave_type" class="form-control-label">End</label>
            <select class="form-control" id="leave_type" wir:model.lazy="leave_type">
                <option value="Vacation">Vacation</option>
                <option value="Sick">Sick</option>
                <option value="Quitting">Quitting</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description" class="form-control-label">Description</label>
            <input class="form-control" type="text"  id="description" wir:model.lazy="description">
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close
        </button>
        <button type="button" class="btn btn-primary" wir:click.privent="save()">Save changes</button>
    </div>
</div>
