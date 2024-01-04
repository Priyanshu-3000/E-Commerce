<x-app-layout>

<div>
  




{{-- 
@else
    <form class="mx-1 mx-md-4" action="{{ url('/Product')}}/" enctype="multipart/form-data" method="POST">@csrf
      <div class="d-flex flex-row align-items-center ">
          <input type="text" name="name" id="" placeholder="Enter Name"
              class="form-control" />
         
      </div>
      <div class="d-flex flex-row align-items-center mt-4">
          <input type="file" name="image" id="" placeholder="Enter image"
              class="form-control" />
              
      </div>
      <div class="d-flex flex-row align-items-center mt-4">
          <input type="number" name="price" id=""
              placeholder="Enter Price" class="form-control" />
              
      </div>
      <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
          <button type="submit" id=""
              class="btn btn-primary btn-lg mx-3">Save</button>    
      </div>
  </form>
</div> --}}


      <div class="row" >
        @foreach ($Product as $Pro)
        <div class="col-md-3 ">
          <div class="card shadow-2-strong pro">
              <img src="{{$Pro->image }}" class="card-img-top img">
              <div class="card-body d-flex flex-column">
                  <div class="d-flex flex-row">
                    <h5 class="card-title">&#8377;{{$Pro->price}}</h5>
              
                  </div><p class="card-text">{{$Pro->name}}</p>
                  <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="{{ route('add_to_Cart', ['id' => $Pro->id]) }}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                      </div>
              </div>
          </div>
      </div>
        @endforeach
      </div>
        


{{-- 
        <div class="row" >
          <div class="col-md-12 ">
            <table class="table table-bordered">
              <thead>
                <th>Sr No.</th>
                  <th>Image</th>
                  <th>Category</th>
                <th>Price</th>
                  <th>Option</th>
              </thead>
              <tbody>
          @foreach ($Product as $keys=> $Pro)
                <tr>
                  <td>{{$keys+1}}</td>
                    <td><img src="{{url('storage/app/'.$Pro->image)}}" style="width:150px; height: 100px;"></td>
                    <td>{{$Pro->name}}</td>
                    <td>{{$Pro->price}}</td>
                    <td>
                      <a href="{{url('Productedit/'.$Pro->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{url('Productdelete/'.$Pro->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
          @endforeach
              </tbody>
            </table>
        </div>
        </div>
        @endif
        --}}



      {{-- <!-- Pagination -->
      <div>
      <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">«</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">»</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Pagination -->
    </div> --}}


</x-app-layout>