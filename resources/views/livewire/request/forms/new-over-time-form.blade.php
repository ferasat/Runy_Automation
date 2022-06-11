<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-5">
            <div class="form-group">
                <label for="Employee" class="form-control-label">Employee</label>
                <input class="form-control" type="text" value="{{ fullName(\Illuminate\Support\Facades\Auth::id()) }}"
                       id="Employee" readonly>
            </div>
            <div class="form-group">
                <label for="over_date" class="form-control-label">Date</label>
                <input class="form-control" type="date" id="over_date" wire:model.lazy="over_date">
                @error('over_date') <span class="text-danger">This field is required</span> @enderror
            </div>
            <div class="form-group">
                <label for="over_start_time" class="form-control-label">Start Time</label>
                <input class="form-control" type="time" id="over_start_time" wire:model.lazy="over_start_time">
                @error('over_start_time') <span class="text-danger">This field is required</span> @enderror
            </div>

            <div class="form-group">
                <label for="over_end_time" class="form-control-label">End Time</label>
                <input class="form-control" type="time" id="over_end_time" wire:model.lazy="over_end_time">
                @error('over_end_time') <span class="text-danger">This field is required</span> @enderror
            </div>

            <div class="form-group">
                <label for="duration" class="form-control-label">Duration</label>
                <input class="form-control" type="text" id="duration" wire:model.lazy="duration">
                <span class="text-muted">For example 3 O'clock</span>
                @error('duration') <span class="text-danger">This field is required</span> @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-control-label">Description</label>
                <input class="form-control" type="text" id="description" wire:model.lazy="description">
            </div>
            <div class="form-group row">
                <label for="example-text-input"
                       class="col-md-3 col-form-label form-control-label"
                       wire:model.lazy="currency">Referral To</label>
                <div class="col-md-9">
                    <select class="form-control" wire:model.lazy="to_id">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ fullName($user->id) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="button" wire:click.privent="saveForm()">Save</button>
            </div>
        </div>
    </div>
</div>
