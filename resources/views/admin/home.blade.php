@extends('admin.layout')

@section('content')
<div id="wrapper">
    @include('admin.notification')

    @include('admin.nav')
    
    <div id="page-wrapper" class="gray-bg dashbard-1">
   		
			<!--content-->

	</div>
	<div class="clearfix"> </div>
</div>
<!---->
<!--scrolling js-->
	<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('admin/js/scripts.js') }}"></script>
	<!--//scrolling js-->
	<script src="{{ asset('admin/js/bootstrap.min.js') }}"> </script>
@endsection