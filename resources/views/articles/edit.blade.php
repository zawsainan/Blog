@extends('layouts.app')
@section('content')
    <div class="container" style="max-width:600px">
        <form method="post">
            @csrf
            <input type="text" class="form-control mb-2" value="{{$article->title}}" name="title" placeholder="Title">
            <textarea name="body" class="form-control mb-2">{{$article->body}}</textarea>
            <select name="category_id" class="form-select mb-2">
                @foreach ($categories as $category)
                <option @selected($article->category->id == $category->id) value="{{$category->id}}">{{$category->name}}</option> 
                @endforeach
            </select>
            <button class="btn btn-primary w-100">Update</button>
        </form>
    </div>
@endsection