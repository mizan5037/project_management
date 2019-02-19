@extends('admin.app')
@section('title','About Project')

@section('main-content')
 <div class="block-header">
                
            </div>
            <!-- Basic Card -->
            <div class="row clearfix">
            	<div class="col-md-12">
            		 <div class="card">
                        <div class="header">
                            <h2>
                                About All information about Project
                            </h2>
                          
                        </div>
                        <div class="body">
                        	
                            <p>{{strip_tags($project->description) }}</p><br>
                       
                            <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Client</th>
                                        <th>Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Company</th>
                                        <th>T. Price</th>
                                        <th>Advance</th>
                                        <th>Due</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{$client->name}}</td>
                                        <td>{{$client->phone}}</td>
                                        <td>{{$client->email}}</td>
                                        <td>{{$client->address}}</td>
                                        <td>{{$client->company_name}}</td>
                                        <td>{{$project->price}}</td>
                                        <td>{{$project->advance}}</td>
                                        <td>{{$project->due}}</td>
                                        <td>{{$project->start_date}}</td>
                                        <td>{{$project->end_date}}</td>
                                      </tr>
                                    
                                    </tbody>
                                  </table>
                        </div>

                    </div>
            		
            	</div>
                
               
            </div>

            <div class="row">
                 <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All the employees of this project.
                            </h2>
                           
                        </div>
                        <div class="body">
                          
                            <ol>
                                 @foreach($employees as $employee)
                                    <li>{{$employee->name}}  ({{$employee->designation}})</li>
                                    
                                 @endforeach
                            </ol>
                          
                        </div>
                    </div>
                
                   
                </div>
                <div class="col-md-6">
                     <div class="card">
                        <div class="header">
                            <h2>
                                All the services in the project 
                            </h2>
                           
                        </div>
                        <div class="body">
                            <ol>
                                 @foreach($services as $service)
                                    <li>{{$service->name}}</li>
                                    
                                 @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
@endsection