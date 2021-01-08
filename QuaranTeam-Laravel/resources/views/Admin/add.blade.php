@extends('layouts.admin')

@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-4">WELCOME</h2>
      <p class="lead">Who do you want to add today?</p>
    </div>

  <div class="py-5 bg-custom">

    <div class="form-group">
      <div class="container p-3 d-flex flex-row justify-content-center align-items-center">

        <div class="row">
          <div class="container p-3 justify-content-center ">
            <img src="{{ asset('img/egg chair.jpg') }}" width="450" height="550" class="rounded float img-fluid shadow" alt="Responsive Image">
          </div>

        </div>

        <form method="GET" action="/admin/addUser">
          <div class="container p-3 justify-content-center align-items-center">
            <div class="d-flex shadow p-3 bg-white rounded">

              <div class="col col-md">

                <div class="form-group">
                  <label for="Name">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  @if($errors->has('username'))
                      <div class="text-danger">
                          {{ $errors->first('username')}}
                      </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="name" class="form-control" id="name" name="name" placeholder="Your name">
                  @if($errors->has('name'))
                      <div class="text-danger">
                          {{ $errors->first('name')}}
                      </div>
                  @endif
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                  @if($errors->has('password'))
                      <div class="text-danger">
                          {{ $errors->first('password')}}
                      </div>
                  @endif
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="isAdmin" name="isAdmin" value="1" >
                  <label for="isAdmin" class="form-check-label">Admin Account</label>
                  @if($errors->has('isAdmin'))
                      <div class="text-danger">
                          {{ $errors->first('isAdmin')}}
                      </div>
                  @endif
                </div>

                <div class="container d-flex flex-row justify-content-center mt-2">
                  <div class="mr-3">
                    <button class="btn btn-success btn-md-6" name="add" type="submit" value="submit">Submit</button>
                  </div>
                  <div class="ml-3">
                    <a class="btn btn-danger btn-md-6" value="reset" href="/admin">Cancel</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
