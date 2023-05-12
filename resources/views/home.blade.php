@extends('layouts.app')

@section('title', 'Home page')

@section('content')
<p>questi sono gli unici 2 treni in partezza oggi!</p>
@foreach ($trains as $train)
<div class="col-3">
    <div class="card m-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> {{ $train->Orario_di_partenza }}</li>
        </ul>
    </div>
</div>
@endforeach

@endsection
