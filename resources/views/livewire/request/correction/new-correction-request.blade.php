<div>
    <div class="card">

        <div class="card-header">
            <h3 class="mb-0">New Correction Request</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Book ID <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="book_id">
                            @error('book_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label"
                               wire:model.lazy="currency">Currency</label>
                        <div class="col-md-9">
                            <select class="form-control" wire:model.lazy="currency">
                                <option value="IR Rial">IR Rial</option>
                                <option value="UAE Dirham">UAE Dirham</option>
                                <option value="TUR Lira">TUR Lira</option>
                                <option value="Euro">Euro</option>
                                <option value="USA Dollar">USA Dollar</option>
                            </select>
                            @error('currency') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>


                </div>


                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Passenger full name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="passenger_name"
                                   wire:model.lazy="passenger_name">
                        </div>
                        @error('passenger_name') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>

                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Date</label>
                        <div class="col-md-9">
                            <input class="form-control" type="date" name="date" wire:model.lazy="date">
                        </div>
                    </div>


                </div>
                <hr class="border-bottom w-100 d-block">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Supplier </label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="supplier">
                            @error('supplier') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Applicant </label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="applicant">
                            @error('applicant') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Supplier Rate</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="supplier_rate">
                            @error('supplier_rate') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Applicant Rate</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="applicant_rate">
                            @error('applicant_rate') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <hr class="border-bottom w-100 d-block">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Is hotel cancellation ?</label>
                        <div class="col-md-9">
                            <select class="form-control" type="text" wire:model.lazy="cancel_hotel">
                                <option value="0" selected>No</option>
                                <option value="1">Yes</option>
                            </select>
                            @error('cancel_hotel') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    @if($show)
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Cancellation fine for As </label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="penalty_cancellation_share" required>
                            @error('penalty_cancellation_share') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-6">
                    @if($show)
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">The total price of the fine</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="cancel_fine_hotel" required>
                            @error('cancel_fine_hotel') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    @endif

                </div>
                <hr class="border-bottom w-100 d-block">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-2 col-form-label form-control-label">Description</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="description" wire:model.lazy="description">
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-danger">Referral To :</label>
                        <div class="col-sm-9 ">
                            <select class="form-control " wire:model.lazy="to_id">
                                @foreach($users as $user)
                                    @if(is_accounting($user->id))
                                        <option value="{{ $user->id }}" >{{ fullName($user->id) }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="btn btn-success" wire:click.privent="save()">Approve</div>
        </div>
    </div>



</div>
