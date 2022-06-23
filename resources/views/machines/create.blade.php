@extends('layouts.main');
@section('content')

<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3">
                    {{ __('Create Machine') }}
                </h3>
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
                <form action="{{ route('machine.create') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="name">{{ __('Name') }}</label>
                        <input 
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                            type="text" 
                            name="name"
                            value="{{ old('name') }}"
                            >
                        @if ($errors->has('name'))
                           <p class="invalid-feedback">{{ $errors->first("name")  }}</p> 
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="model">{{ __('Model') }}</label>
                        <input 
                            class="form-control 
                            {{ 
                                $errors->has('model') 
                                    ? 'is-invalid' 
                                    : '' 
                            }}" 
                            type="text" 
                            name="model"
                            value="{{ old('model') }}"
                            > 
                        @if ($errors->has('model'))
                           <p class="invalid-feedback">{{ $errors->first("model")  }}</p> 
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="business_id">{{ __('Business') }}</label>
                        <select class="form-control" name="business_id">
                            <option>{{ __('Business selection') }}</option>
                            @foreach ($businesses as $item)
                                <option 
                                    value="{{ $item->id }}" 
                                    {{  
                                        $item->id == old("business_id") 
                                            ? 'selected' 
                                            : '' 
                                    }}
                                    >
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('business_id'))
                           <p class="invalid-feedback">{{ $errors->first("business_id")  }}</p> 
                        @endif
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">{{ __('SEND') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    
@endsection