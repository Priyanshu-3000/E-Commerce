<x-app-layout>
<div>
  <div class="col-md-9 " style="margin: auto;">
    @if(isset($editcategory))

    <form class="mx-1 mx-md-4" action="{{ url('categoryedit/'.$editcategory->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="d-flex flex-row align-items-center ">
          <input type="text" name="name" value="{{$editcategory->name}}" placeholder="Enter Name" class="form-control" />
      </div> 

      <div class="d-flex flex-row align-items-center ">
        <input type="file" name="img"  class="form-control" />
    </div>

      <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
          <button type="submit" id="" class="btn btn-primary btn-lg mx-3">Update</button>
      </div>
  </form>

  @else
    <form class="mx-1 mx-md-4" action="{{ url('/category') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="d-flex flex-row align-items-center ">
          <input type="text" name="name" id="" placeholder="Enter Name" class="form-control" />
      </div> 
      <div class="d-flex flex-row align-items-center ">
        <input type="file" name="img"  class="form-control" />
    </div>
      <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
          <button type="submit" id="" class="btn btn-primary btn-lg mx-3">Save</button>
      </div>
  </form>

      <div class="row" >
        <div class="col-md-12 ">
          <table class="table table-bordered">
            <thead>
                <th>Sr No.</th>
                <th>Image</th>
                <th>Category</th>
                <th>Option</th>
                
            </thead>
            <tbody>
        @foreach ($category as $keys=> $cate)
              <tr>
                  <td>{{$keys+1}}</td>
                  <td><img src="{{url('storage/app/'.$cate->images)}}" style="width:150px; height: 100px;"></td>
                  <td>{{$cate->name}}</td>
                  <td>
                    <a href="{{url('categoryedit/'.$cate->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{url('categorydelete/'.$cate->id)}}" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
        @endforeach
            </tbody>
          </table>
      </div>
      </div>
      @endif
        </div>
      </div>  

    


</x-app-layout>