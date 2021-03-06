<div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        @if ($pic !== null )
                            @if(isset($pic_up))
                                <img src="{{ $pic_up->temporaryUrl() }}" class="rounded-circle" alt="">
                            @else
                                <img src="{{ asset($pic) }}" class="rounded-circle" alt="">
                            @endif
                        @else
                            @if(isset($pic_up))
                                <img src="{{ $pic_up->temporaryUrl() }}" class="rounded-circle" alt="">
                            @else
                                No pic
                            @endif
                        @endif
                    </div>

                </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">

                    <a href="#" class="btn btn-sm btn-info mr-4"></a>
                    <a href="#" class="btn btn-sm btn-default float-right"></a>
                </div>
            </div>
            <div class="card-body pt-3 pt-md-7">

                <div class="text-center">

                    <div class="h3 font-weight-700">
                        {{ $name .' '.$family }}
                    </div>

                    <input type="file" wire:model="pic" class="btn">

                    <input type="button" wire:click.privent="upload_pic()" class="btn d-block mt-3" value="upload">

                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header">
                <div class="card-profile-image">
                    @if ($Signature !== null )
                        @if(isset($Signature_up))
                            <img src="{{ $Signature_up->temporaryUrl() }}" class="rounded-circle" alt="">
                        @else
                            <img src="{{ asset($Signature) }}" class="rounded-circle" alt="">
                        @endif
                    @else
                        @if(isset($Signature_up))
                            <img src="{{ $Signature_up->temporaryUrl() }}" class="rounded-circle" alt="">
                        @else
                            No Signature
                        @endif
                    @endif
                </div>
            </div>
            <div class="card-body ">
                <div class="d-block mt-3 d-inline-block text-center">
                    <input type="file" wire:model="Signature" class="btn pt-md-7 pt-3">
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <h3 class="mb-0">{{ __('User information') }}</h3>
                </div>
            </div>
            <div class="card-body">
                <div>

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="name">{{ __('Name') }} : {{ $name }}</label>
                            <input type="text" wire:model.lazy="name" id="name"
                                   class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   required autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div cla    ss="form-group{{ $errors->has('family') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="family">{{ __('Last name') }}</label>
                            <input type="text" wire:model.lazy="family" id="family"
                                   class="form-control form-control-alternative{{ $errors->has('family') ? ' is-invalid' : '' }}" required autofocus>

                            @error('family')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('family') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group{{ $errors->has('cellPhone') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="cellPhone">{{ __('Cell Phone') }}</label>
                            <input type="text" wire:model.lazy="cellPhone" id="cellPhone"
                                   class="form-control form-control-alternative{{ $errors->has('cellPhone') ? ' is-invalid' : '' }}" required autofocus>

                            @error('cellPhone')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cellPhone') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="gender">{{ __('Gender') }}</label>
                            <select wire:model.lazy="gender" id="gender"
                                    class="form-control form-control-alternative{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group{{ $errors->has('levelUser') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="levelUser">{{ __('Level User') }}</label>
                            <select wire:model.lazy="levelUser" id="levelUser"
                                    class="form-control form-control-alternative{{ $errors->has('levelUser') ? ' is-invalid' : '' }}">
                                <option value="Admin">Admin</option>
                                <option value="Counter">Counter</option>
                                <option value="salesManager">Sales Manager</option>
                                <option value="Accountants">Accountants</option>
                            </select>

                            @error('levelUser')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('levelUser') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group{{ $errors->has('levelPermission') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="levelPermission">{{ __('Level Permission') }}</label>
                            <select wire:model.lazy="levelPermission" id="levelPermission"
                                    class="form-control form-control-alternative{{ $errors->has('levelPermission') ? ' is-invalid' : '' }}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>

                            @error('levelPermission')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('levelPermission') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="status">{{ __('Status') }}</label>
                            <select wire:model.lazy="status" id="status"
                                    class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                            </select>

                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                            <input type="email" wire:model.lazy="email" id="input-email"
                                   class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @enderror
                        </div>



                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4" wire:click.privent="save()">Save</button>
                        </div>
                    </div>
                </div>

                <hr class="my-4"/>
                <div >
                    <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                    @if (session()->has('password_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('password_status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('password_not'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('password_not') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="pl-lg-4">

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="password">{{ __('New Password') }}</label>
                            <input type="password" id="password" wire:model="password" class="form-control" >

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"
                                   for="password_confirmation">{{ __('Confirm New Password') }}</label>
                            <input type="password" wire:model="password_confirmation" id="password_confirmation"
                                   class="form-control">
                        </div>

                        <div class="text-center">
                            <button type="submit" wire:click.privent="changePass({{$user_id}})" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
