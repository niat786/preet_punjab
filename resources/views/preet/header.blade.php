<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('preet/css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('preet/css/head_foot.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    @if(Request::is('about'))
      <link rel="stylesheet" href="{{asset('preet/css/about.css')}}" />
    @endif
    @if(Request::is('poet'))
      <link rel="stylesheet" href="{{asset('preet/css/waris.css')}}" />
    @endif
    @if(Request::is('poetry'))
      <link rel="stylesheet" href="{{asset('preet/css/poetry.css')}}" />
    @endif
    @if(Request::is('punjabi-culture') || Request::is('heritage-sites'))
      <link rel="stylesheet" href="{{asset('preet/css/punjabi_culture_heritage.css')}}" />
    @endif
  
    <title>Home</title>
  </head>