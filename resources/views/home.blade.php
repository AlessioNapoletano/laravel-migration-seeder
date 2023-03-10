@extends('layout.app')

@section('title', 'BoolTrain')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $train->agency }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                codice treno: {{ $train->codTrain}}
                            </h6>
                            <p class="card-text">
                                <span class="fw-bold">
                                    Stazione di partenza: 
                                </span>

                                <span>
                                    {{ $train->departureStation }}
                                </span>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">
                                    Stazione di arrivo: 
                                </span>

                                <span>
                                    {{ $train->arrivalStation }}
                                </span>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">
                                    orario di Partenza: 
                                </span>

                                <span>
                                    {{ $train->departureTime }}
                                </span>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">
                                    orario di Arrivo: 
                                </span>

                                <span>
                                    {{ $train->arrivalTime }}
                                </span>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">
                                    Numero di carrozze: 
                                </span>

                                <span>
                                    {{ $train->numberCarriages }}
                                </span>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">
                                    Treno in orario: 
                                </span>

                                <span>
                                    {{ $train->inTime ? 'Si' : 'No' }}
                                </span>
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">
                                    Treno cancellato: 
                                </span>

                                <span>
                                    {{ $train->deleted ? 'Si' : 'No' }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection