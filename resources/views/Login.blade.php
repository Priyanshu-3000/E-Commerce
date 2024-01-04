@extends('App')
@section('content')
    <div class="container h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>

                                <form class="mx-1 mx-md-4" action="{{ url('/Login') }}" method="POST">@csrf
                                    <div class="d-flex flex-row align-items-center mt-4">
                                        <input type="email" name="email" id="" placeholder="Enter Email"
                                            class="form-control" />
                                            
                                    </div>
                                    <span class="text-danger">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <div class="d-flex flex-row align-items-center mt-4">
                                        <input type="password" name="password" id=""
                                            placeholder="Enter Password" class="form-control" />
                                            
                                    </div><span class="text-danger">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                  
                                    <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
                                        <button type="submit" id=""
                                            class="btn btn-primary btn-lg">Log In</button>
                                            <a class="btn btn-primary btn-lg mx-3" href="{{url('/ContectUs')}}">SignUp</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                    class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
