@extends('admin.app')
@push('css')
	 <link href="{{ asset('admin/plugins/bootstrap-select/css/bootstrap-select.css') }} " rel="stylesheet" />
	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endpush

@section('main-content')

        <!-- Vertical Layout | With Floating Label -->
        @include('includes.messages')
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ADD NEW PROJECT
                            </h2>
                        </div>
                        <div class="body">
                                <div class="form-group form-float">
                                	<label class="form-label">Price</label>
                                    <div class="form-line">
                                        <input type="text" id="price" class="form-control" value="{{$project->price}}"  placeholder="Enter Product Price" name="price">
                                        
                                    </div>
                                </div>

                               <div class="form-group form-float">
                               	    <label class="form-label">Advance</label>
                                    <div class="form-line">
                                        <input type="text" id="advance" class="form-control" value="{{$project->advance}}"  placeholder="Enter Advance Money" name="advance">
                                       
                                    </div>
                                </div>

                                <div class="form-group form-float">
                            	    <label class="form-label">Due</label>
                                    <div class="form-line">
                                        <input type="text" id="due" class="form-control" value="{{$project->due}}"  placeholder="Enter Product Due" name="due">
                                       
                                    </div>
                                </div>



                                 <div class="form-group form-float">
                                    <h2 class="card-inside-title">Project Time</h2>
                                    <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                        <div class="form-line">
                                            <input class="date form-control" value="{{$project->start_date}}"  placeholder="Project start date" name="start" type="text">
                                        </div>
                                        <span class="input-group-addon">to</span>
                                        <div class="form-line">
                                            <input class="date form-control" value="{{$project->end_date}}"  placeholder="Project submission date" name="end" type="text">
                                        </div>
                                    </div>
                                </div>

                      	</div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="employee">Select employee</label>
                                    <select name="employee" id="employee"   class="form-control show-tick" data-live-search="true" >
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="service">Select services</label>
                                    <select name="service" id="service" class="form-control show-tick" data-live-search="true">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="client">Select clients</label>
                                    <select name="client" id="client" class="form-control show-tick" data-live-search="true">
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">


                                                {{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="category">Select Project Category</label>
                                    <select name="name" id="category" class="form-control show-tick" data-live-search="true">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Product Description
                            </h2>
                        </div>
                        <div class="body">
                            <textarea id="tinymce" name="body"></textarea>
                        </div>
                    </div>
                </div>
            </div>
             
            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.project.index') }}">BACK</a>
             <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
        </form>
   
@endsection

@push('js')
<script src="{{ asset('admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
 <script src="{{ asset('admin/plugins/tinymce/tinymce.js') }}"></script>
 <script src="{{ asset('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }} "></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('admin/plugins/tinymce') }}';
        });
    </script>

    <script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  


@endpush