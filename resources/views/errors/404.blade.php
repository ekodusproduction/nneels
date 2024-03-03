@extends('website.welcome')
@section('title', 'Page Not Found')

@section('custom-styles')
    <style>
        footer{
            display: none;
        }

        body{
            background: url("{{asset('images/pattern_bg.png')}}") center no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h1, h2, h3{
            color: #141F46;
            font-family: "Jost", sans-serif;
            font-weight: 500;
        }

        .back-btn{
            background: #141F46 !important;
        }
    </style>
@endsection

@section('content')
<div class="mb-4 pb-4"></div>
<section class="page-not-found">
    <div class="content container">
      <h2 class="mb-3">OOPS!</h2>
      <h3 class="mb-3">Page not found</h3>
      <p class="mb-3">Sorry, we couldn't find the page you where looking for. We suggest that you return to home page.</p>
      <button class="btn btn-primary back-btn" onclick="window.location.href = '/';">GO BACK</button>
    </div>
</section>
<div class="mb-4 pb-4"></div>
@endsection

@section('custom-scripts')
@endsection