@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Files</h1></div>

                <div class="card-body">
                        
                    @if (count($files) > 0)
                        @foreach ($files as $file)
                            <div class="row">
                                <div class="col-md-5 col-sm-5">

                                </div>

                                <div class="col-md-7 col-sm-7">
                                        <h3> <a href="/files/{{$file->id}}">{{$file->filename}}</a></h3> <br>
                                        <small>Uploaded at {{$file->created_at}}</small> <br> <br> <hr>
                                </div>
                            </div>
                            {{$files->links()}}
                        @endforeach
                        
            
                    @else
                        No files yet <br>
                                    
                    @endif
                                

                    
                    
                    <a href="/files/create" class="btn btn-primary btn-bg" style="margin-top: 10px">Create new</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
