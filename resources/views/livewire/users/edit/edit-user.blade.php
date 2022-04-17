<div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        @if ($pic_up )
                            <img src="{{ $pic->temporaryUrl() }}" class="rounded-circle" alt="">
                        @else
                            <img src="{{ asset('img/avatar-1.png') }}" class="rounded-circle" alt="">
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


                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header">
                <div class="card-profile-image">
                    @if ($Signature_up)
                        <img src="{{ $Signature->temporaryUrl() }}" class="rounded-circle" alt="">
                    @else
                        <img src="{{ asset('img/avatar-1.png') }}" class="rounded-circle" alt="">
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
                    <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    @csrf
                    @method('put')

                    <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

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
                            <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('family') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-name">{{ __('Last name') }}</label>
                            <input type="text" name="family" id="input-name" class="form-control form-control-alternative{{ $errors->has('family') ? ' is-invalid' : '' }}" placeholder="{{ __('Last name') }}" value="{{ old('family', $user->family) }}" required autofocus>

                            @if ($errors->has('family'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('family') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required>

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
                </form>
                <hr class="my-4" />
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    @csrf
                    @method('put')

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
                            <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>

                            @if ($errors->has('old_password'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                            <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
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
