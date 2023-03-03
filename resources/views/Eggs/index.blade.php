@extends('layouts.main')
@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
@endsection


@section('title', 'Home')

@section('content')
    <h1 class="text-center p-5 title-text">Benvenuto nella PAGINA DELLE UOVA</h1>
    <div class="container">

        <section class="my-5">
            <div class="table-wrapper bg-light p-5 rounded-3">
                <table class="table">
                    <thead>
                        <!-- titoli -->
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Color</th>
                            <th scope="col">Chocolate</th>
                            <th scope="col">Size</th>
                            <th scope="col">Info</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- tabella con valori -->
                        <!-- qui vai di ciclo -->
                        @forelse ($eggs as $egg)
                            <tr>
                                <td>{{ $egg->name }}</td>
                                <td>{{ $egg->color }}</td>
                                <td>{{ $egg->chocolate }}</td>
                                <td>{{ $egg->size }}</td>
                                <td><a href="{{ route('eggs.show', $egg->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a></td>
                            </tr>

                        @empty
                            <h1 class="text-center">Non ci sono a disposizione altre uova</h1>
                        @endforelse



                    </tbody>
                </table>

                {{-- btn add --}}
                <div class="d-flex justify-content-end">
                    <a href="{{ route('eggs.create') }}" class="  btn btn-small btn-success mt-5">ADD</a>
                </div>

            </div>
        </section>
    </div>
@endsection
