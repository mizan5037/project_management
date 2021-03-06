@extends('admin.app')
@section('title','Edit Category')
@section('main-content')

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Project Category
                            </h2>
                         
                        </div>
                         @include('includes.messages')
                        <div class="body">
                            <form action="{{ route('admin.category.update',$category->id) }}" method="post">
                            	{{csrf_field()}}
                                @method('put')
                                <label for="email_address">Category</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Enter your project category">
                                    </div>
                                </div>
                                
                                <br>
                                <div class="form-group">
                                    <div class="form-line">
                                        <a href='{{ route('admin.category.index') }}' class="btn btn-warning">Back</a>
                                    <input type="submit" class="btn btn-primary m-t-15 waves-effect">
                                    </div>
                                </div>
                                

                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection