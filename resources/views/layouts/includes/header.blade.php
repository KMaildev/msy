<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style " dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MSY') }}</title>
    <link href="{{ asset('design/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('design/assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('design/assets/node_modules/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('design/dist/css/pages/dashboard1.css') }}" rel="stylesheet">

    <link href="{{ asset('design/assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('design/assets/node_modules/bootstrap-select/bootstrap-select.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('design/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}"
        rel="stylesheet" />
    <link
        href="{{ asset('design/assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('design/assets/node_modules/multiselect/css/multi-select.css') }}" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body class="horizontal-nav skin-megna fixed-layout">
    <div id="main-wrapper">
