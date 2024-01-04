<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      table, th, td{
        border: 1px black solid;
      }
      table{
  
        width: 100%;
        height: 80%;
      }
    </style>
</head>

<body>
	<form action="{{ url('/invoice') }}" method="post" >@csrf
	<table >
		
		<tr><th colspan="5">INVOICE</th></tr>

		<tr><td  align="center" colspan="5">(ORIGNAL FOR RECIPIENT)</td></tr>
		<tr>
			<td>Invoice No. 314</td>
			<td>PRINT INDIA 3/167,Malviya Nagar,jaipur mob:-23424234</td>
			<td colspan="1">PRINT INDIA</td>
			<td colspan="2"> Date: 01.07.2023</td>
		</tr>
	
		<tr>
			<td>Buyer</td>
			<td colspan="4"><center>Dogama Junction, Sodala,japur</center></td>
		</tr>
	</table>
	<table id="input">
		<tr>
			<th>S.No.</th>
			<th>Description of Goods</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Amount</th>
			<th>Action</th>
		</tr>
		<tr>
			<td><center>1</center></td>
			<td> <input type="text" name="Description[]" class="form-control" id="Description" placeholder="Description of Goods" required></td>
			<td>  <input type="number" class="form-control" name="Quantity[]" id="Quantity" placeholder="Quantity" required></td>
			<td> <input type="number" class="form-control" name="Rate[]" id="Rate" placeholder="Rate" required></td>
			<td>4700.00</td>
			<td><button class="add" type="button" name="add" id="add">Add More</button></td>
		</tr>
	</table>
	<table >
		<tr>
		
		</tr>

		<tr>
			{{-- <td><button class="add" type="button" name="add" id="add">Add More</button></td> --}}
			{{-- <td><button  type="button" name="remove" id="remove">remove</button></td> --}}
      <td><button type="submit" id=""   class="btn btn-primary btn-lg">submit</button></td>
		</tr>

		<tr>
			<td colspan="2">Amount Chargeable (in words)<br><b>Rupees Seventeen Thousand Two Hundered Sixty Five Only</b></br></td><th colspan="2" >Total Amount</th>
			<td>17265.00</td>
		</tr>

		<tr>
			<td colspan="5">1. Goods once sold wiil not be taken back.
			<br>2. E& O.E.</b></td>
		</tr>
		<td colspan="2"><b>BANK NAME: INDIAN BANK</b><br>A/C.NO: <b>87454392572439</b></br><br>IFSC:<b>BOBJ66463</b></br><br>BARNCH:<b>JAIPUR</b></br></td>
		<td colspan="3"><center>For PRINT INDIA</center></td>
		


	</table>

        <div class="form mt-5">
          
              
              <div class="row">
                {{-- @foreach($student as $stu) --}}
                <div class="form-group mt-4 ">
                  {{-- {{$loop->index+1}} --}}
                 
                </div>
                <div class="form-group mt-4 ">
                
                </div>
              </div>
              <div class="form-group mt-4">
               
              </div>
    
              {{-- @endforeach --}}
              <div class="text-center mt-4">
               
              </div>

            </form>
         
		</div><!-- End Contact Form -->
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script>
			var i=0;
			$(document).ready(function(){
			
				$(document).on('click', '.add', function(e){
					++i; 
					var html = '';
          
				html +='<tr id="inputFormRow">';
			 html +='<td><center>1</center></td>';
			 html +='<td> <input type="text" name="Description[]" class="form-control" id="Description" placeholder="Description of Goods" required></td>';
			 html +='<td>  <input type="number" class="form-control" name="Quantity[]" id="Quantity" placeholder="Quantity" required></td>';
			 html +='<td> <input type="number" class="form-control" name="Rate[]" id="Rate" placeholder="Rate" required></td>';
			 html +='<td>4600.00</td>';
			 html +='<td><button id="removeRow" type="button" class="btn btn-danger">Remove</button> </td>';
			 html +='</tr>';
			
            $('#input').append(html);
			
		})
		$(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
	})
		</script>
</body>

</html>