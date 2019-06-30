@extends('layouts.admin.matrix_app')

@section('title', 'Add '.$title['singular_name'])

@section('style')
<link rel="stylesheet" href="{{asset('assets/admin/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/css/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('assets/admin/css/matrix-media.css')}}" />
@endsection

@section('content')

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{ url('admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
      <a href="#">{!! $title['singular_name'] !!}</a> 
      <a href="#" class="current">Add New {!! $title['singular_name'] !!}</a> </div>
    <h1>Add New {!! $title['singular_name'] !!}</h1>
  </div>
<!--End-breadcrumbs-->

<div class="container-fluid"><hr>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add New {!! $title['singular_name'] !!}</h5>
          </div>
          <div class="widget-content nopadding">

            <form class="form-horizontal" 
                  method="post" 
                  action="{{ url('admin/category/add') }}" 
                  name="add_category" 
                  id="add_category" 
                  novalidate="novalidate"
            >

              {{ csrf_field() }}

              @include('partials.inc.form_content', [ 'fields' => $fields ])
              
              @include('partials.inc.form_save_buttons')

            </form>

          </div>
        </div>
      </div>
    </div>

    @include('partials.inc.grouped_errors')
    
</div>
<!--end-main-container-part-->

@endsection

@section('script')
<script src="{{asset('assets/admin/js/jquery.uniform.js')}}"></script> 
<script src="{{asset('assets/admin/js/select2.min.js')}}"></script> 
<script src="{{asset('assets/admin/js/jquery.validate.js')}}"></script> 
<script src="{{asset('assets/admin/js/matrix.js')}}"></script> 
<script src="{{asset('assets/admin/js/matrix.form_validation.js')}}"></script>
@endsection