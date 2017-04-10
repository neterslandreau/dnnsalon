<div class="container">

	<div class="row">
		
	@include('partials.blog.breadcrumbs')

	</div>

	<div class="row">
		
		<div class="col-lg-8">
			
			@include('partials.blog.blog-post')

			@include('partials.comments.form')

			@include('partials.comments.comment')
			
		</div>
	</div>

</div>