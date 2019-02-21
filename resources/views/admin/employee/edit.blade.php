@extends('admin.app')
@section('title','Edit Emloyee')
@section('main-content')
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Employee 
                            </h2>
                         
                        </div>
                         @include('includes.messages')
                        <div class="body">
                            <form action="{{ route('admin.employee.update',$employee->id) }}" method="post">
                            	{{csrf_field()}}
                               @method('put')
                               <div class="row">
                               	<div class="col-md-6">
                               		 <label for="name">Employee</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" value="{{$employee->name}}"  placeholder="Enter your employee name">
                                    </div>
                                </div>
                                <label for="phone">Phone</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" value=""  placeholder="Enter your employee phone number">
                                    </div>
                                 </div>
                                 <label for="email">Email</label>
                                 <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" value="{{$employee->email}}"  placeholder="Enter your employee email address">
                                    </div>
                                </div>
                               	</div>
                               	<div class="col-md-6">
                               		 <label for="address">Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="address" class="form-control" value="{{$employee->address}}"  placeholder="Enter your employee address">
                                    </div>
                                </div>
                                <label for="designation">Designation</label>
                                <div class="form-group">
                                	<div class="form-line">
                                        <input type="text" name="designation" class="form-control" value="{{$employee->designation}}"  placeholder="Enter employee designation">
                                   	 </div>
                                </div>
                               	</div>
                               </div>
                               

                                <br>
                                <a href='{{ route('admin.employee.index') }}' class="btn btn-warning">Back</a>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect">
                                     
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection