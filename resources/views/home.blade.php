@extends('layouts/main_layout')
@section('content')

<form action="{{ route('submit') }}" method="post">
    @csrf
    <div class="d-flex justify-content-center mt-5">
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
    </div>
    
    
    @error('nome')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
</form>

@endsection