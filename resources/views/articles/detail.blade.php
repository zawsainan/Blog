@extends("layouts.app")
@section('content')
    <div class="container" style="max-width:600px">
        <div class="card">
            <div class="card-body">
                <h3 class="h4">{{$article->title}}</h3>
                <div class="text-muted">
                    <b class="text-success">{{$article->user->name}}</b> |
                    {{$article->category->name}} | {{$article->created_at->diffForHumans()}}<br>
                    <b>Comments: </b>{{count($article->comments)}}
                </div>
                <div class="mb-2">{{$article->body}}</div>
                @auth
                @can('delete-article', $article)
                    
                <a href="{{url("articles/edit/$article->id")}}" class="btn btn-primary">Edit</a>
                <a href="{{url("articles/delete/$article->id")}}" class="btn btn-outline-danger">Delete</a>
                @endcan
                @endauth
            </div>
        </div>
    </div>
@endsection