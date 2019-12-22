@extends('navbar1')
@extends('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedbacks And Orders</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- links of data table -->
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <!-- end links of data table -->
</head>
<body>
@section('navbar')
  @endsection
  <br>
  <br>
  <br>
   
<!--table start-->

<!-- section 2 -->
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">Contact Us Feedbacks</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example" class="display nowrap" style="width:100%;">
            <thead class="mt-4">
            <!-- some upper change -->

            <!-- end upper change -->

            <tr class="text-center bg-light headtable" >

                <th class="bg-info">id</th>
                <th class="bg-info">Name</th>
                <th class="bg-info">Email</th>
				<th class="bg-info">Subject</th>
				<th class="bg-info">Message</th>
                <th class="bg-info">Date And Time</th>

            </tr>
            </thead>

            <tbody>
         
				<a href="/read">Read</a>

         @foreach($dataall as $data)
            <tr class="text-center bg-light">

                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->subject}}</td>
                <td>{{$data->message}}</td>
                <td>{{$data->created_at}}</td>


            </tr>
			@endforeach
            </tbody>

        </table>

    </div>
    <!-- table pagination end -->

</div>
<!-- section2 -->
<!--table end-->

<!--Tabe # 2 for orders-->

<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">Orders</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example" class="display nowrap" style="width:100%;">
            <thead class="mt-4">
            <!-- some upper change -->

            <!-- end upper change -->

            <tr class="text-center bg-light headtable" >

                <th class="bg-info">id</th>
                <th class="bg-info">Name</th>
                <th class="bg-info">Email</th>
				<th class="bg-info">Home address</th>
				<th class="bg-info">Date</th>
                <th class="bg-info">Gender</th>
                <th class="bg-info">Age</th>
                <th class="bg-info">Height</th>
                <th class="bg-info">Phone</th>
                <th class="bg-info">Categories</th>

            </tr>
            </thead>

            <tbody>
         
				

         
            <tr class="text-center bg-light">

                <td>{{$data->id}}</td>
               


            </tr>
			
            </tbody>

        </table>

    </div>
    <!-- table pagination end -->

</div>
<!-- section2 -->
<!--table end-->

</body>

<!--script-
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<!-script end-->
<!--
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script> -->
</html>