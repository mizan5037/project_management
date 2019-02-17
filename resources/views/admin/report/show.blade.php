<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
<script>
  $( document ).ready(function() {
    $(".date").datepicker({ 
        format: 'yyyy-mm-dd'
    });
  
});
</script>
  </head>
  <body>
    <div class="container">
      
      <div class="row">
         <h2><center>Project Report Between Date</center></h2>
        <div class="col-md-10">
         
          <form action="{{ route('admin.report.show') }}" method="post">
            @csrf
            <div class="col-md-2">
              <div class="form-group">
                <div class="form-line">
                  <input class="date form-control" autocomplete="off" placeholder="start date" name="start" type="text">
                </div>
                
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <div class="form-line">
                  <input class="date form-control" autocomplete="off" placeholder="End date" name="end" type="text">
                </div class="form-line">
                   
                </div>
               
                
              </div>
              
              <div class="form-group">
                <div class="form-line">
                   <input type="submit" value="submit">
                </div>
                
             
            </div>
            </form>
            </div>

         
        </div>
      </div>
      
      
      
      
      
      
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