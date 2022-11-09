<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  <base href="{{ asset('') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="static/css/lib/fontawesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="static/css/admin.css">
  <!-- My custom -->
  <link rel="stylesheet" href="static/css/admin-custom.css">
  @stack('styles')
</head>