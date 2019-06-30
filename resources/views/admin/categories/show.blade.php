@extends('layouts.admin.matrix_app')

@section('title', 'View '.$title['singular_name'])

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
        <a href="#" class="current">View {!! $title['singular_name'] !!}</a> 
    </div>
    <h1>View {!! $title['singular_name'] !!}</h1>
  </div>
<!--End-breadcrumbs-->

<div class="container-fluid"><hr>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View {!! $title['singular_name'] !!}</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <tbody>
                @foreach ($columns as $column)
                <tr>
                  <td>
                    <strong>{!! $column['label'] !!}</strong>
                  </td>
                  <td>
                  @if (!isset($column['type']))
                    @include('partials.columns'.'.'.$column['type'], ['column' => $column])
                  @else
                    @include('partials.columns.text', ['column' => $column])
                  @endif
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