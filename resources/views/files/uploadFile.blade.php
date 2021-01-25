@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Upload a file</h1></div>

                <div class="card-body">

                    <form action="{{route('storeFile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="uploaded_file" value="choose">
                        <input type="text" name="filename" value="Enter name">
                        <br><br><br>
                        <input type="submit" name="Submit">
                    </form>
                    <br>
                    
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
