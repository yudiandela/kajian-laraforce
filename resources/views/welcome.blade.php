@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div class="jumbotron rounded-0">
                <h1 class="text-uppercase">Deskripsi Singkat</h1>
                <p class="lead">Belajar membuat sesuatu yang berguna walaupun belum berguna saat ini</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg rounded-0" href="{{ route('task.index') }}" role="button">{{ __('Halaman Task') }}</a>
                <a class="btn btn-primary btn-lg rounded-0" href="{{ route('todo.index') }}" role="button">{{ __('Halaman Todo List') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
