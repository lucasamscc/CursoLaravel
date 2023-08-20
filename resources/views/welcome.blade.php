@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="./img/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-title">{{$event->title}}</p>
                    <p class="card-date">{{date('d/m/y', strtotime($event->date))}}</p>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Veja mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0)
            <p class="badge badge-secondary">Não há eventos disponíveis</p>
        @endif
    </div>
</div>
@endsection
