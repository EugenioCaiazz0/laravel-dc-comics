@extends('layout.main')

@section('content')

<h1>Golden Age</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col"> Title </th>
            <th scope="col"> Price </th>
            <th scope="col"> Series </th>
            <th scope="col"> Sale date </th>
            <th scope="col"> Type </th>
        </tr>
    </thead>

    @foreach ($comics as $comic)
        <tr>
            <td> {{$comic->title}} </td>
            <td> {{$comic->price}} </td>
            <td> {{$comic->series}} </td>
            <td> {{$comic->sale_date}} </td>
            <td> {{$comic->type}} </td>

        </tr>
    @endforeach

@endsection
