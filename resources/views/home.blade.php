@extends('layouts.app')

@section('title', 'Home page')

@section('content')
<p>questi sono gli unici 2 treni in partezza oggi!</p>
@foreach ($trains as $train)
<div class="col-3">
    <div class="card m-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> Azienda: {{ $train->Azienda }}</li>
            <li class="list-group-item"> Stazione di partenza: {{ $train->Stazione_di_partenza }}</li>
            <li class="list-group-item"> Stazione di arrivo: {{ $train->Stazione_di_arrivo }}</li>
            <li class="list-group-item"> Orario di partenza: {{ $train->Orario_di_partenza }}</li>
            <li class="list-group-item"> Orario di arrivo: {{ $train->Orario_di_arrivo }}</li>
            <li class="list-group-item"> Codice Treno: {{ $train->Codice_treno }}</li>
            <li class="list-group-item"> Numero Carrozze: {{ $train->Numero_carrozze }}</li>
        </ul>
    </div>
</div>
@endforeach

@endsection
