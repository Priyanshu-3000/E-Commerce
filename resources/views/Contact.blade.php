<x-app-layout>
<div class="container h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black " style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7 order-2 order-lg-1">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Contact us</p>
                        <form class="mx-1 mx-md-4" action="{{ url('/') }}/Report" method="POST">@csrf
                                <div class="d-flex flex-row align-items-center ">
                                    <input type="text" name="reported_device" id="" placeholder="Enter Name"
                                        class="form-control" />
                                   
                                </div> <span class="text-danger">
                                    @error('reported_device')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="d-flex flex-row align-items-center mt-4">
                                    <input type="url" name="reported_url" id="" placeholder="Feedback"
                                        class="form-control" />
                                        
                                </div>
                                <span class="text-danger">
                                    @error('reported_url')
                                        {{$message}}
                                    @enderror
                                </span>
                                <div class="d-flex flex-row align-items-center mt-4">
                                    <input type="text" name="reported_problem" id=""  placeholder="Describe in detail" class="form-control" />
                                        
                                </div><span class="text-danger">
                                    @error('reported_problem')
                                        {{$message}}
                                    @enderror
                                </span>
                                <div class="d-flex   mt-4">
                                    <p>Add Screenshot</p>&nbsp;
                                    <input type="file" name="reported_screenshot" id=""
                                      />
                                       
                                </div> <span class="text-danger">
                                    @error('reported_screenshot')
                                        {{ $message }}
                                    @enderror
                                </span> 
                                <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
                                    <button type="submit" id=""
                                        class="btn btn-primary btn-lg">Submit</button>
                                </div> 
                            </form>
                        </div>
                        <div class="col-md-4 d-flex align-items-center order-1 order-lg-2">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                class="img-fluid" alt="Sample image">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       
</x-app-layout>
