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
  <h2><center>Project Report</center></h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Client</th>
        <th>Price</th>
        <th>Due</th>
        <th>Advance</th>
        <th>Start Date</th>
        <th>End Date</th>
      
      </tr>
    </thead>
    <tbody>
       @foreach($projects as $project)
      <tr>
       
        <td>{{$project->name}}</td>
        
        <td>{{$project->client_name}}</td>
        <td>{{$project->price}}</td>
        <td>{{$project->due}}</td>
        <td>{{$project->advance}}</td>
        <td>{{$project->start_date}}</td>
        <td>{{$project->end_date}}</td>
      
        
        

        
      </tr>
      
       @endforeach
     
    </tbody>
  </table>
</div>

</body>
</html>
