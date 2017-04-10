@extends('layouts.mbapp')

@section('content')

	<!-- Page Content -->
	<div class="container">

		@include('partials.carousel')

		@include('partials.marketing')

		@include('partials.portfolio')

		@include('partials.feature')

		<hr>

		@include('partials.action')

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Your Website 2014</p>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.container -->


@endsection
