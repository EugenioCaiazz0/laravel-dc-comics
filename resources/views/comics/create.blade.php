@extends('layout.main')

@section('content')

<h2> New Comic </h2>

<form action="{{route('comics.store')}}" method="POST">
@csrf
<div class="col-8">
    <div class="mb-3">
        <label for="title" class="form-label"> Title </label>
        <input type="text" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label"> Price </label>
        <input type="text" class="form-control" id="price">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label"> Series </label>
        <input type="text" class="form-control" id="series">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label"> Type </label>
        <input type="text" class="form-control" id="type">
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label"> Artists </label>
        <input type="text" class="form-control" id="artists">
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label"> Writers </label>
        <input type="text" class="form-control" id="writers">
    </div>
</div>

<button class="btn btn-success" type="submit"> Add </button>
<button class="btn btn-warning" type="submit"> Reset </button>

</form>
@endsection
