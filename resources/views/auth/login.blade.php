@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                {{-- HEADER --}}
                <h3 class="display-3">
                    {{ __('Login') }}
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
                <form action="{{ route('login') }}" method="POST" >
                    @csrf
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
                    {{-- CHECKBOX --}}
                    <div class="mb-3">
                        <input  class="form-check-input" 
                                type="checkbox" 
                                value="1" 
                                id="remember" 
                                name="remember">
                        <label class="form-check-label" for="remember">
                           {{ __('Kepp me logged in')}}
                        </label>
                    </div>
                    <div class="d-grid mb-3">
                        <button 
                            class="btn btn-primary btn-lg" 
                            type="submit">{{ __('LOG IN') }}</button>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('register') }}" class="btn btn-link btn-lg">
                            {{ __('Do not have acccount?') }}
                        </a>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection