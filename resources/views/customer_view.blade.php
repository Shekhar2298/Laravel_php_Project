<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<div style="overflow-x:auto;">
<a href="{{route('customer.create')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add</button></a>
  <table class="table">
    <tr>
      <th> Name</th>
      <th>Contact</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Address</th>
      <th>DOB</th>
      <th>Status</th>

    
    </tr>
    @foreach($customers as $customer)
    <tr>
      <td>{{$customer->name}}</td>
      <td>{{$customer->contact}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->gender}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->dob}}</td>
      <td>@if($customer->status=="1")
        <a href="">
          <span class="badge bg-success">Active</span>
        </a>
        @else
        <a href="">
          <span class="badge bg-danger">Inactive</span>
        </a>
        @endif
      </td>
      <td><a href="{{route('customer.delete',['id'=>$customer->customer_id])}}"><button class="btn btn-danger">Delete</button></a></td>
      <td>
        <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}"><button class="btn btn-primary">Edit</button></a></td>


     
    </tr>
   @endforeach
   
  </table>
</div>

</body>
</html>
