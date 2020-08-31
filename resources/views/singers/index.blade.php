@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ trans('text.singer') }}</h1></div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('text.name') }}</th>
                                <th>{{ trans('text.city') }}</th>
                                <th>{{ trans('text.dob') }}</th>
                                <th>{{ trans('text.action') }}</th>
                            </tr>
                        </thead>

                        @foreach ($singers as $singer)
                        <tbody>
                            <tr>
                                <td>{{ $singer->name }}</td>
                                <td>{{ $singer->city }}</td>
                                <td>{{ $singer->dob }}</td>
                                <td>
                                    <a href="{{ route('singers.edit', $singer->id) }}"><button type="button" class="btn btn-warning">{{ trans('text.edit') }}</button></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-{{ $singer->id }}">{{ trans('text.delete') }}</button>

                                    <div class="modal fade" id="exampleModal-{{ $singer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('text.delete_singer') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    {{ trans('text.you_definitely_want_to_delete?') }}
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('text.close') }}</button>
                                                    <form action="{{ route('singers.destroy', $singer->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">{{ trans('text.yes') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
            <br>
            <a href="{{ route('singers.create') }}"><button type="button" class="btn btn-primary">{{ trans('text.create_new_singer') }}</button></a>
        </div>
    </div>
</div>
@endsection
