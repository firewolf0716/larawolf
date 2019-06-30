<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-responsive.min.css')}}" />

	@yield('style')	

	<link href="{{asset('assets/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
