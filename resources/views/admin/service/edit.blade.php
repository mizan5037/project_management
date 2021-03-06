@extends('admin.app')
@section('title','Edit Service')
@section('main-content')

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Service
                            </h2>
                         
                        </div>
                         @include('includes.messages')
                        <div class="body">
                            <form action="{{ route('admin.service.update',$service->id) }}" method="post">
                            	{{csrf_field()}}
                                @method('put')
                                <label for="email_address">Service</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" value="{{$service->name}}" class="form-control" placeholder="Enter your project service">
                                    </div>
                                </div>
                                
                                <br>
                                <a href='{{ route('admin.service.index') }}' class="btn btn-warning">Back</a>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection