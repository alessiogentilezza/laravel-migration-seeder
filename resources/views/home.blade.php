@extends('layouts.app')

@section('title', 'Home page')

@section('content')

    <h3 class="m-3">Questi sono gli unici @foreach ($trainsToday as $train)
            <span class="text-danger">{{ $train->train_count }}</span>
        @endforeach treni in partenza oggi
        dei <span class="text-danger">{{ $trainsNumber }}</span> in programma!</h3>

    <div class="d-flex">
        @foreach ($trains as $train)
            <div class="col-3">
                <div class="card m-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <strong>Azienda: </strong> {{ $train->Azienda }}</li>
                        <li class="list-group-item"> <strong>Stazione di partenza: </strong>
                            {{ $train->Stazione_di_partenza }}
                        </li>
                        <li class="list-group-item"> <strong>Stazione di arrivo: </strong>{{ $train->Stazione_di_arrivo }}
                        </li>
                        <li class="list-group-item"> <strong>Orario di partenza: </strong>{{ $train->Orario_di_partenza }}
                        </li>
                        <li class="list-group-item"> <strong>Orario di arrivo: </strong> {{ $train->Orario_di_arrivo }}</li>
                        <li class="list-group-item"> <strong>Codice Treno: </strong>{{ $train->Codice_treno }}</li>
                        <li class="list-group-item"> <strong>Numero Carrozze: </strong> {{ $train->Numero_carrozze }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>

@endsection
