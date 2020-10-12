@extends('layouts.layout')
@section('titolo','home page')
@section('main')
<div class="jumbotron d-flex justify-content-around">

    <div class="card-home">
        <h1 class="display-4">Cambia la tua vita.</h1>
        <h2 class="display-4">Entra in Boolean.</h2>
        <p class="lead title-medium">Segui il corso, diventi un web developer e trovi lavoro.</p>
        <hr class="my-4">
        <p class="testo-paragrafo"><span><img src="https://www.boolean.careers/images/icons/arrow.png" alt="freccia"></span> 6 mesi di corso full time, online e in diretta</p>
        <p class="testo-paragrafo"><span><img src="https://www.boolean.careers/images/icons/arrow.png" alt="freccia"></span> Nessuna competenza di programmazione richiesta</p>
        <p class="testo-paragrafo"><span><img src="https://www.boolean.careers/images/icons/arrow.png" alt="freccia"></span> Se non trovi lavoro ti rimborsiamo</p>
        <p class="lead pt-30">
          <a class="btn btn-outline-success btn-lg" href="#" role="button">Candidati ora</a>
        </p>
    </div>

    <div>
        <img class="d-flex justify-content-end" src="https://www.boolean.careers/images/visual/homeHeader.gif" alt="">
    </div>


  </div>
@endsection
