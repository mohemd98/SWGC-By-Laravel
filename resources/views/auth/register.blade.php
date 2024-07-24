@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('FullName') }}</label>

                                <div class="col-md-6">
                                    <input id="full_name" type="text"
                                           class="form-control @error('full_name') is-invalid @enderror" name="full_name"
                                           value="{{ old('full_name') }}" required autocomplete="name" autofocus>

                                    @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="user_id"
                                       class="col-md-4 col-form-label text-md-end">{{ __('user_id') }}</label>

                                <div class="col-md-6">
                                    <input id="user_id" type="text"
                                           class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                           value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>

                                    @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('age') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror"
                                           name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            {{--                        --}}

                            <div class="row mb-3">
                                <label for="gender"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male"
                                               value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gender_male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                               value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gender_female">
                                            Female
                                        </label>
                                    </div>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="avatar"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                                <div class="col-md-6">
                                    <input id="avatar" type="file"
                                           class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                           accept="image/*">

                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" id="type_user"
                                               value="user" {{ old('type') == 'user' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="type_user">
                                            User
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" id="type_member"
                                               value="member" {{ old('type') == 'member' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="type_member">
                                            Member
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" id="type_admin"
                                               value="admin" {{ old('type') == 'admin' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="type_admin">
                                            Admin
                                        </label>
                                    </div>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <select id="city" class="form-select" name="city" required>
                                        <option selected value="0">{{ __('Select City') }}</option>
                                        <option value="أربيل">أربيل</option>
                                        <option value="الأنبار">الأنبار</option>
                                        <option value="بابل">بابل</option>
                                        <option value="بغداد">بغداد</option>
                                        <option value="البصرة">البصرة</option>
                                        <option value="دهوك">دهوك</option>
                                        <option value="الديوانية">الديوانية</option>
                                        <option value="ديالى">ديالى</option>
                                        <option value="ذي قار">ذي قار</option>
                                        <option value="السليمانية">السليمانية</option>
                                        <option value="صلاح الدين">صلاح الدين</option>
                                        <option value="كركوك">كركوك</option>
                                        <option value="كربلاء">كربلاء</option>
                                        <option value="المثنى">المثنى</option>
                                        <option value="ميسان">ميسان</option>
                                        <option value="النجف">النجف</option>
                                        <option value="نينوى">نينوى</option>
                                    </select>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                                    @enderror
                                </div>
                            </div>


                            {{--                        --}}
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
