@extends('layouts.main')
@section('title', 'Dettaglio')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 18rem;">
            <img src="/images/egg-logo.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $egg->color }}</h5>
                <p class="card-text">{{ $egg->contains }}</p>
                <p class="card-text">{{ $egg->size }}</p>
                <p class="card-text">{{ $egg->chocolate }}</p>
                <a href="{{ route('eggs.index') }}" class="btn btn-primary">TORNA INDIETRO</a>
                <a href="{{ route('eggs.edit', $egg->id) }}" class="btn btn-primary">EDIT</a>
                <a href="{{ route('eggs.index') }}" class="btn btn-primary">ELIMINA</a>

            </div>
        </div>
    </div>
@endsection
