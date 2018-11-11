@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h4 class="text-center">Input New Todo</h4>
        <form action="{{ route('todo.store') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control{{ $errors->has('todo') ? ' is-invalid' : '' }}" name="todo" value="{{ old('todo') }}">

                        @if ($errors->has('todo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('todo') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Submit Todo </button>
                    </div>
                </div>
            </div>
        </form>

        @include('layouts._list_todo')
    </div>
</div>
@endsection