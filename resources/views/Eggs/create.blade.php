@extends('layouts.main')
@section('title')

@section('content')

    <div class="form-create">
        <form method="POST" action="{{ route('eggs.store') }}">
            {{-- probelma pagina 419, usare questo metodo --}}
            @csrf
            <div class="row">
                {{-- COLORE --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="color" class="form-label">Colore:</label>
                        <input type="text" class="form-control" id="color" placeholder="Scegli un colore"
                            name="color" required>
                    </div>
                </div>
                {{-- CONTAINIS --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="contains" class="form-label">Sorpresa:</label>
                        <input type="text" class="form-control" id="contains" placeholder="Scegli la tua sorpresa"
                            name="contains">
                    </div>
                </div>
                {{-- chocolate --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chocolate" class="form-label">Cioccolato:</label>
                        <input type="text" class="form-control" id="chocolate"
                            placeholder="Scegli il tuo gusto del cioccolato" name="chocolate" required>
                    </div>
                </div>

                {{-- size --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="size" class="form-label">Taglia:</label>
                        <input type="text" class="form-control" id="size" placeholder="Scegli la tua dimensione"
                            name="size" required>
                    </div>
                </div>


            </div>
            <div class="d-flex justify-content-center p-5">
                <button type="submit" class="btn px-5 border-white btn-primary">INVIA</button>
            </div>
        </form>
    </div>


@endsection
