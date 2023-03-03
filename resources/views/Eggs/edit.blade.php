@extends('layouts.main')
@section('title')

@section('content')

    <div class="form-create mt-5 bg-light p-5 rounded-3">
        <form method="POST" action="{{ route('eggs.update', $egg->id) }}">
            @method('PUT')
            {{-- probelma pagina 419, usare questo metodo --}}
            @csrf
            <div class="row">
                {{-- COLORE --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="color" class="form-label">Colore:</label>
                        <input type="text" class="form-control" id="color" placeholder="Scegli un colore"
                            name="color" required value="{{ old('color', $egg->color) }}">
                    </div>
                </div>
                {{-- CONTAINIS --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="contains" class="form-label d-block">Sorpresa:</label>
                        <select name="size" id="size" value="{{ old('size', $egg->contains) }}">
                            <option value="0" selected>No</option>
                            <option value="1">Si</option>
                        </select>

                    </div>
                </div>
                {{-- chocolate --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chocolate" class="form-label">Cioccolato:</label>
                        <input type="text" class="form-control" id="chocolate"
                            placeholder="Scegli il tuo gusto del cioccolato" name="chocolate" required
                            value="{{ old('chocolate', $egg->chocolate) }}">
                    </div>
                </div>

                {{-- NAME --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Scegli il tuo nome"
                            name="name" required value="{{ old('name', $egg->name) }}">
                    </div>
                </div>
                {{-- DESCRIPTION --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Scegli la tua descrizione"
                            name="description" required>{{ old('description', $egg->description) }}</textarea>
                    </div>
                </div>

                {{-- THUMB --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine:</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Scegli la tua immagine"
                            name="thumb" required value="{{ old('thumb', $egg->thumb) }}">
                    </div>
                </div>

                {{-- size --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="thumb" class="form-label d-block">Taglia:</label>
                        <select name="size" id="size" value="{{ old('size', $egg->size) }}">
                            <option selected>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>
                </div>


            </div>
            <div class="d-flex justify-content-center p-5">
                <button type="submit" class="btn px-5 border-white btn-primary">INVIA</button>
            </div>
        </form>
        <a href="{{ route('eggs.index') }}" class="btn btn-small btn-danger">BACK</a>
    </div>


@endsection
