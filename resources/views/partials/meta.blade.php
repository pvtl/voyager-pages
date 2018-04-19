<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>@yield('meta_title', setting('site.title'))</title>
    <meta name="description"
          content="@yield('meta_description', setting('site.description')) - {{ setting('site.title') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/app.css">
</head>
<body>
