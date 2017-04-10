@extends('layouts.mbapp')

@section('content')

<div class="container">

<?php $blogName = 'One'; ?>

@include('partials.breadcrumbs')

	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

			@include('partials.blog.blog-post-single')

			@include('partials.pager')

		</div>

		<div class="col-md-4">
			
			@include('partials.blog.sidebar')

		</div>

	</div>

	@include('partials.footer')

</div>

@endsection
