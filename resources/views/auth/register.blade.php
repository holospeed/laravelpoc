@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                {{-- HEADER --}}
                <h3 class="display-3">
                    {{ __('Registration') }}
                </h3>
                {{-- ERROR MESSAGES --}}
                @if ($errors->count())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- FORM --}}
                <form action="{{ route('register') }}" method="POST" >
                    @csrf
                    {{-- NAME --}}
                    <div class="mb-3">
                        <label 
                            for="name">{{ __('Name') }}
                        </label>
                        <input 
                            class="form-control {{ 
                                $errors->has('name') ? 'is-invalid' : '' }}" 
                            type="text" 
                            name="name"
                            value="{{ old('name') }}"
                            >
                        @if ($errors->has('name'))
                           <p class="invalid-feedback">{{ $errors->first("name")  }}</p> 
                        @endif
                    </div>
                    {{-- EMAIL --}}
                    <div class="mb-3">
                        <label for="email">{{ __('Email') }}</label>
                        <input 
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                            type="email" 
                            name="email"
                            value="{{ old('email') }}"
                            >
                        @if ($errors->has('email'))
                           <p class="invalid-feedback">{{ $errors->first("email")  }}</p> 
                        @endif
                    </div>
                    {{-- PW --}}
                    <div class="mb-3">
                        <label for="password">{{ __('Password') }}</label>
                        <input 
                            class="form-control 
                            {{ 
                                $errors->has('password') 
                                    ? 'is-invalid' 
                                    : '' 
                            }}" 
                            type="password" 
                            name="password"
                            value=""
                            > 
                        @if ($errors->has('password'))
                           <p class="invalid-feedback">{{ $errors->first("password")  }}</p> 
                        @endif
                    </div>
                    {{-- PW CONFIRM --}}
                    <div class="mb-3">
                        <label for="password_confirmation">{{ __('Password Again') }}</label>
                        <input 
                            class="form-control " 
                            type="password" 
                            name="password_confirmation"
                            value="">
                    </div>
                    <div class="mb-3">
                        <label for="dealer_id">{{ __('Dealer') }}</label>
                        <select class="form-control" name="dealer_id">
                            <option>{{ __('Dealer selection') }}</option>
                            @foreach ($dealers as $item)
                                <option 
                                    value="{{ $item->id }}" 
                                    {{  
                                        $item->id == old("dealer_id") 
                                            ? 'selected' 
                                            : '' 
                                    }}
                                    >
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('dealer_id'))
                           <p class="invalid-feedback">{{ $errors->first("dealer_id")  }}</p> 
                        @endif
                    </div>
                    {{-- CHECKBOX --}}
                    <div class="mb-3">
                        <input  class="form-check-input  {{ $errors->has('terms') ? 'is-invalid' : '' }}" 
                                type="checkbox" 
                                value="1" 
                                id="terms" 
                                name="terms">
                        <label class="form-check-label" for="terms">
                           {{ __('I agree to the terms and conditions')}}
                        </label>
                        @if ($errors->has('terms'))
                           <p class="invalid-feedback">{{ $errors->first("terms")  }}</p> 
                        @endif
                    </div>
                    <div class="d-grid mb-3">
                        <button 
                            class="btn btn-primary btn-lg" 
                            type="submit">{{ __('REGISTER') }}</button>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('login') }}" class="btn btn-link btn-lg">
                            {{ __('Already registed?') }}
                        </a>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection