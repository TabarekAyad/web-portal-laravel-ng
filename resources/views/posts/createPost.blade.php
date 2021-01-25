@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Write a post</h1></div>

                <div class="card-body">

                    <form action="{{route('storePost')}}" method="POST">
                        @csrf
                        <input type="text" name="title" class="form-control form-control-lg"><br>
                        <textarea class="form-control" name="body" rows="10"></textarea><br>
                        <input type="submit" class="btn btn-primary btn-lg" value="Post">
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
