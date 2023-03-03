@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <h1 class="text-center p-5">Benvenuto nella PAGINA DELLE UOVA</h1>
    <div class="container">

        <section class="my-5">
            <div class="table-wrapper ">
                <table class="table">
                    <thead>
                        <!-- titoli -->
                        <tr>
                            <th scope="col">Color</th>
                            <th scope="col">Surprise?</th>
                            <th scope="col">Chocolate</th>
                            <th scope="col">Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- tabella con valori -->
                        <!-- qui vai di ciclo -->
                        @forelse ($eggs as $egg)
                            <tr>
                                <td>{{ $egg->color }}</td>
                                <td>{{ $egg->contains }}</td>
                                <td>{{ $egg->chocolate }}</td>
                                <td>{{ $egg->size }}</td>
                            </tr>
                        @empty
                            <h1 class="text-center">Non ci sono a disposizione altre uova</h1>
                        @endforelse



                    </tbody>
                </table>

                <a href="{{ route('eggs.create') }}">AGGIUNGI</a>
            </div>
        </section>
    </div>
@endsection
