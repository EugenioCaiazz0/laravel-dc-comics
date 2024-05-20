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
            <td>
                <a href=" {{ route('comics.show')}}" class="btn btn-success "> <i class="fa-regular fa-eye"> </a>
                <a href=" {{ route('comics.edit')}}" class="btn btn-warning "> <i class="fa-solid fa-pencil"> </a>
                <a href=" {{ route('comics.destroy')}}" class="btn btn-danger "> <i class="fa-solid fa-trash"> </a>
            </td>
        </tr>
    @endforeach

@endsection
