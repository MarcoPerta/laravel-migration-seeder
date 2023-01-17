@extends('layouts.app')

@section('main-content')
    <h1>Treni :</h1>

    @foreach ($allTrains as $elem )
        <h5>{{$elem->destinazione}}</h5>
        <h5>{{$elem->partenza}}</h5>
        <h5>{{$elem->arrivo}}</h5>
        <h5>{{$elem->binario}}</h5>
        <h5>{{$elem->compagnia}}</h5>
    @endforeach

@endsection
