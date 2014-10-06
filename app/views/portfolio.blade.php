@extends('layouts.master')

@section('title')
	My Portfolio
@stop

<style type="text/css">

.container {
    background-color: black;
    color: rgb(0,223,250);
}



</style>


@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Kris Campos</h2>
        </div>
    </div>
    
    <div class="col-lg-4">
        <a href="">PORTFOLIO</a>            
    </div>
    	
    <div class="col-lg-4">
        <a href="/resume">RESUM&#201</a>
    </div>

    <div class="col-lg-4">
        <a href="">BLOG</a>
    </div>
              

    
 
    <div class="row">
    <div class="col-md-4"><img src="/img/todo_list.jpg">
    	<p>blah blah blah </p>
    </div>

    <div class="col-md-4"><img src="/img/church.jpg">
        <p>blah blah blah blah</p>
    </div>

    <div class="col-md-4"><img src="/img/church2.jpg">
        <p>blah blah blah blah</p>
    </div>

    </div>
  
</div>
        














@stop