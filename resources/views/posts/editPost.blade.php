@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Edit the post</h1></div>

                <div class="card-body">

                        <form action="/posts/{{$post->id}}/update" method="POST">
                            @csrf
                            <input value="{{$post->title}}" type="text" name ="title" class ="form-control form-control-lg"/><br>
                            <textarea class="form-control " rows="15" name="body"  class="form-control">{{$post->body}}</textarea><br>
                            <input value="Update" type="submit" class="btn btn-primary btn-lg">                                
                        </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
