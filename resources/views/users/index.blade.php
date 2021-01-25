@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Users</h1></div>

                <div class="card-body">

                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <h3> <a href="/users/{{$user->id}}">{{$user->name}} {{$user->last_name}}</a></h3> <br>
                            <small>Posted at {{$user->created_at}}</small> <br> <br> <hr>
                            
                        @endforeach
                        {{$users->links()}}

                    @else
                        no users yet
                    @endif
                    
                    
                    
                    <a href="/users/create" class="btn btn-primary btn-bg" style="margin-top: 10px">Create new</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
