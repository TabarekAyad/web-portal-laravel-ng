<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></div>

                <div class="card-body">
                
                    <p style="margin-bottom:25px">{{$post->body}}</p>
                            
                    <small>Posted at {{$post->created_at}}</small> <br> <br> <hr>
                    <a href="/posts" class="btn btn-primary">Go back</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    <button onclick="myFunction({{$post->id}})" class="btn btn-primary btn-bg">Delete</button>

                            
    
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>
        function myFunction(id) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm) {
                if (isConfirm) {
                    var myRoute = "/postsDelete/"+id;
                    window.location = myRoute;
                } else {
                    swal("Cancelled", "The post is still there", "error");
                }
            });
          
        }
        </script>

@endsection
