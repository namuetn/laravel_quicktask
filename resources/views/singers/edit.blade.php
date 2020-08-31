@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ trans('text.edit_singer') }}</h1></div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="{{ route('singers.update', $singer->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ trans('text.name') }}</label>
                            <input type="text" class="form-control" value="{{ $singer->name }}" name="name" id="name" placeholder="{{ trans('text.enter_name') }}" >
                        </div>

                        <div class="form-group">
                            <label for="city">{{ trans('text.city') }}</label>
                            <input type="text" class="form-control" value="{{ $singer->city }}" name="city" id="city" placeholder="{{ trans('text.enter_city') }}" >
                        </div>

                        <div class="form-group">
                            <label for="dob">{{ trans('text.dob') }}</label>
                            <input type="date" class="form-control" value="{{ $singer->dob }}" name="dob" id="dob" placeholder="{{ trans('text.enter_dob') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ trans('text.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
