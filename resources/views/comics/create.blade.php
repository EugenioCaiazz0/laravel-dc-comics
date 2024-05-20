@extends('layout.main')

@section('content')

<h2> New Comic </h2>

<div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            <div class="col-8">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"> Title </label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label"> Price </label>
                    <input name="price" type="text" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label"> Series </label>
                    <input name="series" type="text" class="form-control" id="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label"> Sale Date </label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label"> Type </label>
                    <input name="type" type="text" class="form-control" id="type">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label"> Artists </label>
                    <input name="artists" type="text" class="form-control" id="artists">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label"> Writers </label>
                    <input name="writers" type="text" class="form-control" id="writers">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"> Description </label>
                    <input name="description" type="textarea" class="form-control" id="description">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label"> Thumb </label>
                    <input name="thumb" type="textarea" class="form-control" id="thumb">
                </div>
            </div>

            <button class="btn btn-success" type="submit"> Add </button>
            <button class="btn btn-warning" type="reset"> Reset </button>

        </form>
    </div>
</div>

@endsection
