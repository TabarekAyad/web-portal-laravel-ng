@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Add new user</h1></div>

                <div class="card-body">

                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">First name</label>
                            <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" required placeholder="Example input">
                        </div>

                        <div class="form-group">
                                <label for="formGroupExampleInput">Last name</label>
                                <input type="text" name="last_name" class="form-control" id="formGroupExampleInput" required placeholder="Example input">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select class="form-control" name="role" id="exampleFormControlSelect1" required>
                                <option value="0">Admin</option>
                                <option value="1">Employee</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
