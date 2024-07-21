@extends('layout.app')

@yield('page-title', 'Trains index x seeder')

@section('main-content')
    <div>
        Welcome in the homepage
    </div>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <article class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            {{-- avrei pure potuto scrivere così $train->azienda --}}
                            {{$train['azienda']}}
                        </div>
                        <div class="card-title">
                            From {{$train['stazione_di_partenza']}} to {{$train['stazione_di_arrivo']}}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$train['orario_di_partenza']}} - {{$train['orario_di_arrivo']}}</p>
                            <p class="card-text">Info: {{$train['codice_treno']}} - {{$train['numero_di_carrozze']}}</p>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <p>
                                Il treno è {{($train['in_orario']) ? 'è puntuale' : 'è in ritardo'}}
                            </p>
                            <p>
                                Il treno è {{($train['cancellato']) ? 'è cancellato' : 'non è cancellato'}}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
