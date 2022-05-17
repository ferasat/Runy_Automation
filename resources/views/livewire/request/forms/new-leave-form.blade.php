<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-5">
            <div class="form-group">
                <label for="Employee" class="form-control-label">Employee</label>
                <input class="form-control" type="text" value="{{ fullName(\Illuminate\Support\Facades\Auth::id()) }}"
                       id="Employee" readonly>
            </div>
            <div class="form-group">
                <label for="leave_start" class="form-control-label">Start Date</label>
                <input class="form-control" type="date" id="leave_start" wire:model.lazy="leave_start">
                @error('leave_start') <span class="text-danger">This field is required</span> @enderror
            </div>
            <div class="form-group">
                <label for="leave_start" class="form-control-label">Start Time</label>
                <input class="form-control" type="time" id="leave_start_time" wire:model.lazy="leave_start_time">
            </div>
            <div class="form-group">
                <label for="leave_end" class="form-control-label">End Date</label>
                <input class="form-control" type="date" id="leave_end" wire:model.lazy="leave_end">
                @error('leave_end') <span class="text-danger">This field is required</span> @enderror
            </div>
            <div class="form-group">
                <label for="leave_end" class="form-control-label">End Time</label>
                <input class="form-control" type="time" id="leave_end_time" wire:model.lazy="leave_end_time">
            </div>
            <div class="form-group">
                <label for="leave_type" class="form-control-label">End</label>
                <select class="form-control" id="leave_type" wire:model.lazy="leave_type">
                    <option value="Vacation">Vacation</option>
                    <option value="Sick">Sick</option>
                    <option value="Quitting">Quitting</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="form-control-label">Description</label>
                <input class="form-control" type="text" id="description" wire:model.lazy="description">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="button" wire:click.privent="saveForm()">Save</button>
            </div>
        </div>
    </div>
</div>
