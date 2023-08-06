@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-6" id="image-container">
                <img class="img-fluid" src="/img/events/{{$event->image}}" alt="{{$event->title}}">
            </div>
            <div class="col-md-6" id="info-container">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"> </ion-icon> {{$event->city}}</p>
                <p class="events-participants"><ion-icon name="people-outline"> </ion-icon> X Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"> </ion-icon> Dono do Evento</p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            </div>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento:</h3>
            <p class="event-description">{{$event->description}}</p>
        </div>
    </div>
@endsection
