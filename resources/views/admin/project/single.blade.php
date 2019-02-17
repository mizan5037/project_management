@extends('admin.app')

@section('main-content')
 <div class="block-header">
                
            </div>
            <!-- Basic Card -->
            <div class="row clearfix">
            	<div class="col-md-8">
            		 <div class="card">
                        <div class="header">
                            <h2>
                                About All information about Project
                            </h2>
                          
                        </div>
                        <div class="body">
                        	
                            <p>{{strip_tags($project->description) }}</p><br>
                            <b>Client Name</b>:  {{$client->name}}<br>
                            <b>Client Number</b>:  {{$client->number}}<br>
                            <b>Client Email</b>:  {{$client->email}}<br>
                            <b>Client Address</b>:  {{$client->address}}<br>
                            <b>Client Company</b>:  {{$client->company}}<br>
                            <b>Total Price</b>:  {{$project->price}}<br>
                            <b>Advance Money</b>:  {{$project->advance}}<br>
                            <b>Due Money</b>:  {{$project->due}}<br>
                            <b>Start Date </b>:  {{$project->start_date}}<br>
                            <b>End Date </b>:  {{$project->end_date}}
                        </div>
                    </div>
            		
            	</div>
                   
                
                


                
                <div class="col-md-4">
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
	                           		<li></li>
	                           		<li></li>
                           		 @endforeach
                           	</ol>
                          
                        </div>
                    </div>
                
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