<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-5">
            <div class="form-group">
                <label for="Employee" class="form-control-label">Employee</label>
                <input class="form-control" type="text" value="{{ fullName(\Illuminate\Support\Facades\Auth::id()) }}"
                       id="Employee" readonly>
            </div>
            <div class="form-group">
                <label for="over_start" class="form-control-label">Start Date</label>
                <input class="form-control" type="date" id="over_start" wire:model.lazy="over_start">
                @error('over_start') <span class="text-danger">This field is required</span> @enderror
            </div>
            <div class="form-group">
                <label for="over_start" class="form-control-label">Start Time</label>
                <input class="form-control" type="time" id="over_start_time" wire:model.lazy="over_start_time">
            </div>
            <div class="form-group">
                <label for="over_end" class="form-control-label">End Date</label>
                <input class="form-control" type="date" id="over_end" wire:model.lazy="over_end">
                @error('over_end') <span class="text-danger">This field is required</span> @enderror
            </div>
            <div class="form-group">
                <label for="over_end" class="form-control-label">End Time</label>
                <input class="form-control" type="time" id="over_end_time" wire:model.lazy="over_end_time">
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
