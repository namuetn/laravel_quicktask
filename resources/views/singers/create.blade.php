@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ trans('text.Singer') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('singers.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ trans('text.Name') }}</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="{{ trans('text.Enter name') }}" required="">
                        </div>

                        <div class="form-group">
                            <label for="city">{{ trans('text.City') }}</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="{{ trans('text.Enter city') }}" required="">
                        </div>

                        <div class="form-group">
                            <label for="dob">{{ trans('text.Date Of Birth') }}</label>
                            <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter dob">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ trans('text.Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
