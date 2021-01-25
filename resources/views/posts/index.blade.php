@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Posts</h1></div>

                <div class="card-body">
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                            <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> <br>
                            <small>Posted at {{$post->created_at}}</small> <br> <br> <hr>
                            
                        @endforeach
                        {{$posts->links()}}

                    @else
                        
                    @endif
                    <a href="/posts/create" class="btn btn-primary btn-bg">Create new</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
