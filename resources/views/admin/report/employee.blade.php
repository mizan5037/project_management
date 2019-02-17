<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><center>Employee Report</center></h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Designation</th>
      
      
      </tr>
    </thead>
    <tbody>
       @foreach($employees as $employee)
      <tr>
       
        <td>{{$employee->name}}</td>
        
        <td>{{$employee->phone}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->address}}</td>
        <td>{{$employee->designation}}</td>
       
      
        
        

        
      </tr>
      
       @endforeach
     
    </tbody>
  </table>
</div>

</body>
</html>
