@extends('layouts.admin.matrix_app')

@section('title', 'View All '.$title['double_name'])

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
        <a href="#" class="current">View All {!! $title['double_name'] !!}</a> 
    </div>
    <h1>View All {!! $title['double_name'] !!}</h1>

    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif
     @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif

  </div>
<!--End-breadcrumbs-->

<div class="container-fluid"><hr>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>{!! $title['double_name'] !!} List</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table category-list-table">

              <thead>
                <tr>
                  @foreach ($columns as $column)
                    <th>
                      {!! $column['label'] !!}
                    </th>
                  @endforeach
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>  

                @foreach($all as $one)
                <tr class="gradeC">
                  <td>{{ $one->id }}</td>
                  <td>{{ $one->name }}</td>
                  <td>{{ $one->description }}</td>
                  <td>{{ $one->url }}</td>
                  <td class="center">                      
                      @include('partials.inc.table_actions', ['id' => $one->id])
                  </td>
                </tr>
                @endforeach

              </tbody>

            </table>
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
<script src="{{asset('assets/admin/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('assets/admin/js/matrix.js')}}"></script> 
<script src="{{asset('assets/admin/js/matrix.tables.js')}}"></script>
@endsection