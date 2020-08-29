@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ trans('text.Singer') }}</h1></div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('text.Name') }}</th>
                                <th>{{ trans('text.City') }}</th>
                                <th>{{ trans('text.Date Of Birth') }}</th>
                                <th>{{ trans('text.Action') }}</th>
                            </tr>
                        </thead>

                        @foreach ($singers as $singer)
                        <tbody>
                            <tr>
                                <td>{{ $singer->name }}</td>
                                <td>{{ $singer->city }}</td>
                                <td>{{ $singer->dob }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning">{{ trans('text.Edit') }}</button>
                                    <button type="button" class="btn btn-danger">{{ trans('text.Delete') }}</button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
            <br>
            <a href="{{ route('singers.create') }}"><button type="button" class="btn btn-primary">{{ trans('text.Create New Singer') }}</button></a>
        </div>
    </div>
</div>
@endsection
