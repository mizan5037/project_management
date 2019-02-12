@extends('admin.app')

@section('main-content')
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Client 
                            </h2>
                         
                        </div>
                         @include('includes.messages')
                        <div class="body">
                            <form action="{{ route('admin.client.store') }}" method="post">
                            	{{csrf_field()}}
                               
                               <div class="row">
                               	<div class="col-md-6">
                               		 <label for="name">Client</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your client name">
                                    </div>
                                </div>
                                <label for="phone">Phone</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" placeholder="Enter your client phone number">
                                    </div>
                                 </div>
                                 <label for="email">Email</label>
                                 <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" placeholder="Enter your client email address">
                                    </div>
                                </div>
                               	</div>
                               	<div class="col-md-6">
                               		 <label for="address">Client Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="address" class="form-control" placeholder="Enter your client address">
                                    </div>
                                </div>
                                <label for="company">Company</label>
                                <div class="form-group">
                                	<div class="form-line">
                                        <input type="text" name="company" class="form-control" placeholder="Enter client company name">
                                   	 </div>
                                </div>
                               	</div>
                               </div>
                               

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect">
                                     
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection