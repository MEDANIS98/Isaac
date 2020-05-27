@extends('layouts.app')

@section('banner')
<!--INNER BANNER-->
<div id="inner-banner">
    <div class="container">
        <h1>Error</h1>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Error</li>
        </ol>
    </div>
</div>
<!--INNER BANNER-->
@stop

@section('content')
<!--404 START-->
<section class="error-section">
    <div class="container">
        <div class="holder"> <strong class="error-text">404</strong> <span class="oops">oOops!</span>
            <b>Page Not
                Found!</b> <strong class="title">The Requested Page Cannt be Found</strong>
            <form action="#">
                <input required type="text" placeholder="Enter keywords for search again">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</section>
<!--404 END-->
@stop
