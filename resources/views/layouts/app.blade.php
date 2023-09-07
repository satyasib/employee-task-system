<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Govo admin is super flexible, powerful, clean &amp; modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Govo admin template, dashboard template, tailwind admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('back/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('back/images/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Custom Select css-->
    <link rel="stylesheet" href="{{ asset('back/css/vendors/custom-select.css') }}">

    <!-- fontAwesome CSS-->
    <link rel="stylesheet" href="{{ asset('back/css/vendors/fontawesome/all.css') }}">

	<link rel="stylesheet" href="{{ asset('back/css/vendors/filepond/filepond.css') }}">
     <link rel="stylesheet" href="{{ asset('back/css/vendors/filepond/filepond-plugin-image-preview.css') }}">
	
    <!-- App css-->
    <link rel="stylesheet" href="{{ asset('back/css/style.css') }}">
  </head>
  <body class="unique-skin" dir="ltr">
    <main class="page-wrapper">
      <div class="page-body-wrapper xl:w-full 4xl:w-[calc(100%_-_14.375rem)] w-[calc(100%_-_15.8125rem)] ml-auto transition-all duration-300">
 
                    @include('layouts.header')

                    @include('layouts.sidebar');

                    {{ $slot }}
                    
					@include('layouts.footer');