@extends('layouts.app')
@section('content')
    <div class="container" style="max-width:600px">
        <form method="post">
            @csrf
            <input class="form-control mb-2" type="text" name="title" placeholder="new title">
            <textarea class="form-control mb-2" name="body" placeholder="new body"></textarea>
            <select name="category_id" class="form-select mb-2">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary w-100">Add</button>
        </form>
    </div>
@endsection