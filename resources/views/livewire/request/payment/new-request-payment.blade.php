<div>
    <div class="card">

        <div class="card-header">
            <h3 class="mb-0">New Payment Request</h3>
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
                               class="col-md-3 col-form-label form-control-label">Price <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" wire:model.lazy="price">
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Pay to <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="getter" wire:model.lazy="getter">
                            @error('getter') <span class="text-danger">Pay to field is required .</span> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Cause <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="cause" wire:model.lazy="cause">
                            @error('cause') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Till date <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input class="form-control" type="date" name="deadline" wire:model.lazy="deadline">
                            @error('deadline') Till date field is required. @enderror
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
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Bank name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name_bank" wire:model.lazy="name_bank">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Bank number account</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="number_account_bank"
                                   wire:model.lazy="number_account_bank">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Bank account holder</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="account_owner_bank"
                                   wire:model.lazy="account_owner_bank">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-3 col-form-label form-control-label">Person id</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="person_id" wire:model.lazy="person_id">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="example-text-input"
                               class="col-md-2 col-form-label form-control-label">Description</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="description" wire:model.lazy="description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5">

        <div class="card-header">
            <h3 class="mb-0">Preview New Payment Request</h3>
        </div>

        <div class="card-body">
            <p>
                Please pay <b>{{ $price }} {{ $currency }} </b> for <b>{{ $getter }}</b> to buy <b>{{ $cause }}</b> , book ID
                <b>{{ $book_id }}</b> , until <b>{{ $deadline }}</b>.<br>
                Passenger Name: <b>{{ $passenger_name }}</b> <br>
                Bank name: <b>{{ $name_bank }}</b> <br>
                Bank account number: <b>{{ $number_account_bank }}</b> <br>
                Account holder name: <b>{{ $account_owner_bank }}</b> <br>
                Description: <b>{{ $description }}</b> <br>
            </p>
        </div>

        <div class="card-footer">
            <div class="btn btn-success" wire:click.privent="save()">Approve</div>
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
                    @error('currency') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>

</div>
