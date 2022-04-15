<div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">

                        <img src="{{ asset('img/avatar-1.png') }}" class="rounded-circle" alt="">

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
                        {{ $name="" .' '.$family }}
                    </div>

                    <hr class="my-4" />
                    <div class="">

                    </div>

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
                <div  >

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
                            <label class="form-control-label" for="name">{{ __('name') }}</label>
                            <input type="text" wire:model.lazy="name" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('name') }}" value="{{ old('name', auth()->user()->name ) }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('family') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="family">{{ __('Last wire:model.lazy="" ') }}</label>
                            <input type="text" wire:model.lazy="family" id="family" class="form-control form-control-alternative{{ $errors->has('family') ? ' is-invalid' : '' }}" placeholder="{{ __('Last wire:model.lazy="" ') }}" value="{{ old('family', auth()->user()->family) }}" required autofocus>

                            @if ($errors->has('family'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('family') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('cellPhone') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="cellPhone">{{ __('Cell Phone') }}</label>
                            <input type="text" wire:model.lazy="cellPhone" id="cellPhone" class="form-control form-control-alternative{{ $errors->has('cellPhone') ? ' is-invalid' : '' }}" placeholder="{{ __('Cell Phone') }}" value="{{ old('cellPhone', auth()->user()->cellPhone) }}" required autofocus>

                            @if ($errors->has('cellPhone'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cellPhone') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="gender">{{ __('Gender') }}</label>
                            <select wire:model.lazy="gender" id="gender" class="form-control form-control-alternative{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>

                            @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('levelUser') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="levelUser">{{ __('Level User') }}</label>
                            <select wire:model.lazy="levelUser" id="levelUser" class="form-control form-control-alternative{{ $errors->has('levelUser') ? ' is-invalid' : '' }}">
                                <option value="Admin">Admin</option>
                                <option value="Counter">Counter</option>
                                <option value="salesManager">Sales Manager</option>
                                <option value="Accountants">Accountants</option>
                            </select>

                            @if ($errors->has('levelUser'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('levelUser') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('levelPermission') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="levelPermission">{{ __('Level Permission') }}</label>
                            <select wire:model.lazy="levelPermission" id="levelPermission" class="form-control form-control-alternative{{ $errors->has('levelPermission') ? ' is-invalid' : '' }}">
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

                            @if ($errors->has('levelPermission'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('levelPermission') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="status">{{ __('Status') }}</label>
                            <select wire:model.lazy="status" id="status" class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                            </select>

                            @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                            <input type="email" wire:model.lazy="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">

                    <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                    @if (session('password_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('password_status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                            <input type="password" wire:model.lazy="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>

                            @if ($errors->has('old_password'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                            <input type="password" wire:model.lazy="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                            <input type="password" wire:model.lazy="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
