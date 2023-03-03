@extends('layouts.main')
@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
@endsection





@section('title', 'Dettaglio')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $egg->thumb }}" class="card-img-top" alt="...">
                    <div class="card-title text-center mt-4">
                        <h6><span class="d-block"> NOME:</span> {{ $egg->name }}</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Colore: {{ $egg->color }}</h5>
                        <p class="card-text">Sorpresa: {{ $egg->contains }}</p>
                        <p class="card-text">Taglia: {{ $egg->size }}</p>
                        <p class="card-text">Tipologia: {{ $egg->chocolate }}</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="wrapper bg-light rounded-3 p-5">

                    <h4 class="text-center">Info:</h4>
                    <p>{{ $egg->description }}</p>

                    <div class="info-btn d-flex justify-content-end mt-5">
                        <a href="{{ route('eggs.index') }}" class="btn btn-primary"><i
                                class="fa-regular fa-hand-point-left"></i></a>
                        <a href="{{ route('eggs.edit', $egg->id) }}" class="btn btn-success mx-2"><i
                                class="fa-solid fa-pen-to-square"></i></a>

                        <form action="{{ route('eggs.destroy', $egg->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>



                </div>
            </div>

        </div>
    </div>
@endsection
