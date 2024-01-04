@extends('admin.admin')
@section('content')


    {{-- @if (isset($editProduct))
  <form class="mx-1 mx-md-4" action="{{ url('Productedit/'.$editProduct->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex flex-row align-items-center ">
        <input type="text" name="name" value="{{$editProduct->name}}" placeholder="Enter Name" class="form-control" />
    </div> 
    <div class="d-flex flex-row align-items-center ">
      <input type="number" name="price" value="{{$editProduct->price}}" placeholder="Enter Name" class="form-control" />
  </div>
    <div class="d-flex flex-row align-items-center ">
      <input type="file" name="img"  class="form-control" />
  </div>
  
    <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
        <button type="submit" id="" class="btn btn-primary btn-lg mx-3">Update</button>
    </div>
  </form>
   --}}

{{-- 
    <form class="mx-1 mx-md-4" action="{{ url('/Product') }}" method="post" enctype="multipart/form-data">@csrf
        <div class="d-flex flex-row align-items-center ">
            <input type="text" name="name" id="" placeholder="Enter Name" class="form-control" />

        </div>
        <div class="d-flex flex-row align-items-center mt-4">
            <input type="file" name="image" id="" placeholder="Enter image" class="form-control" />

        </div>
        <div class="d-flex flex-row align-items-center mt-4">
            <input type="number" name="price" id="" placeholder="Enter Price" class="form-control" />

        </div>
        <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
            <button type="submit" id="" class="btn btn-primary btn-lg mx-3">Save</button>
        </div>
    </form>--}}


    {{-- <div class="card-body">
        <table class="table table-bordered" id="ajax-crud-datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div> --}}


    <button type="button" class="btn btn-primary" id="batan" data-toggle="modal" data-target="#employee-modal">
        Enter New Product
      </button>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <th>Sr No.</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Option</th>
                </thead>
                <tbody> 

                    
                    @foreach ($Product as $keys => $Pro)
                        <tr>
                            <td>{{ $keys + 1 }}</td>
                            <td><img src="{{ url('storage/app/' . $Pro->image) }}" style="width:150px; height: 100px;">
                            </td>
                            <td>{{ $Pro->name }}</td>
                            <td>{{ $Pro->price }}</td>
                            <td>
                                <button type="button" class="btn btn-info" id="edit_product" data-toggle="modal" data-target="#employee-modal1">
                                 
                                  {{-- </button> <button class="btn btn-info" id="edit_product"
                                    data-id="{{ $Pro->id }}"> --}}
                                    Edit</button>
                                <button class="btn btn-danger" onclick="deleteItem({{ $Pro->id }})" id="delet_product">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Button trigger modal -->
   

    <!-- Modal -->
    <div class="modal fade" id="employee-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/store" id="EmployeeForm" name="EmployeeForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                     
                        <input type="hidden" name="id" id="id">
                        
                        
                        Enter Name
                        <div class="d-flex flex-row align-items-center ">
                            <input type="text" name="name" id="name" value="" placeholder="Enter Name"
                                class="form-control" />
                        </div>
                        Enter Price
                        <div class="d-flex flex-row align-items-center ">
                            <input type="number" name="price" id="price" value="" placeholder="Enter Price"
                                class="form-control" />
                        </div>
                        Image
                        <div class="d-flex flex-row align-items-center ">
                            <input type="file" name="image" id="image" class="form-control" />
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" id="btn-save" data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    {{-- Edit Product --}}
    
    <div class="modal fade" id="employee-modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="javascript:void(0)" id="EmployeeForm" name="EmployeeForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                 
                    <input type="hidden" name="id" id="id">
                    
                    
                    Enter Name
                    <div class="d-flex flex-row align-items-center ">
                        <input type="text" name="name" id="name" value="" placeholder="Enter Name"
                            class="form-control" />
                    </div>
                    Enter Price
                    <div class="d-flex flex-row align-items-center ">
                        <input type="number" name="price" id="price" value="" placeholder="Enter Price"
                            class="form-control" />
                    </div>
                    Image
                    <div class="d-flex flex-row align-items-center ">
                        <input type="file" name="image" id="image" class="form-control" />
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="update" data-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>

$(document).ready( function () {
  
    $("#btn-save").click(function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
    //e.preventDefault();
    var name = $('#name').val();
    var price = $('#price').val();
    var image = $('#image').val();
   
    $.ajax({
        type:'POST',
        url: "{{ url('store')}}",
        data: {name:name,price:price,image:image},
        success: (data) => {
            $("#employee-modal").modal('hide');
            var Table = $('#ajax-crud-datatable').dataTable();
            Table.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
            console.log(data);
        }
    });
});

$("#update").click(function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
    //e.preventDefault();
    var name = $('#name').val();
    var price = $('#price').val();
    var image = $('#image').val();
   
    $.ajax({
        type:'POST',
        url: "{{ url('update/{id}')}}",
        data: {name:name,price:price,image:image},
        success: (data) => {
            $("#employee-modal1").modal('hide');
            var Table = $('#ajax-crud-datatable').dataTable();
            Table.fnDraw(false);
            $("#update").html('Submit');
            $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
            console.log(data);
        }
    });
});



});


    </script>
@endsection
