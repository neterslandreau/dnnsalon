@extends('layouts.mbapp')

@section('content')

<div class="container">

	<?php $blogName = 'Two'; ?>

	@include('partials.breadcrumbs')

	@include('partials.blog.blog-post-row')

	@include('partials.pager')

	@include('partials.footer')

</div>

@endsection
