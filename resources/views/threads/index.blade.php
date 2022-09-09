@extends('layout')

@section('content')

<h1>
    スレ
</h1>
<div class="container">
	<div class="row">
	    <input type="button" class="btn btn-default" value="default"> 
	    <input type="button" class="btn btn-success" value="success"> 
	    <input type="button" class="btn btn-primary" value="primary"> 
	    <input type="button" class="btn btn-info" value="info"> 
	    <input type="button" class="btn btn-warning" value="warning"> 
	    <input type="button" class="btn btn-danger" value="danger"> 
	    <input type="button" class="btn btn-link" value="link"> 
	    <!-- <input type="button" class="btn btn-link" value="ツイートする" href="{{url('/tweets/create')}}">  -->

	</div>
</div>
@endsection