@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem">
                <h4 class="card-title"> {{$comic->title}} </h4>
                <img class="card-img-top" src={{$comic->thumb}}>
                <div class="card-body">
                    <h4 class="card-text"> {{$comic->series}} </h4>
                    <p class="card-text"> {{$comic->description}} </p>
                    <p class="card-text"> {{$comic->type}} {{$comic->sale_date}}</p>
                    <p class="card-text"> {{$comic->price}} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
