@extends('layouts.layout')
@section('titolo','Studenti')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="card-group d-flex flex-wrap">
                    <div class="card">
                        <img class="card-img-top" src="{{ $item['img'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['nome'] }}</h5></a>
                            <h5>{{$item['genere'] == 'm' ? 'assunto' : 'assunta'}} da {{ $item['azienda'] }}</h5>
                            <p class="card-text">{{ $item['info'] }}</p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection