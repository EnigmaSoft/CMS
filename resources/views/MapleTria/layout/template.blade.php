<!DOCTYPE html>
<html lang="en-US">
	
	@include(config('enigma.theme.name').'.layout.head')

	<body>

		{{-- @include(config('enigma.theme.name').'.layout.toolbar') --}}

		<div class="enigma">
			<div class="wrapper">
				<div class="inner-wrapper">

					@include(config('enigma.theme.name').'.layout.header')

					@include(config('enigma.theme.name').'.layout.nav')
					
					@include(config('enigma.theme.name').'.layout.top')
					
					@include('partials.alert')
					
					@include(config('enigma.theme.name').'.layout.main')

				</div>
			</div>
		</div>

		@include(config('enigma.theme.name').'.layout.footer')

		@include(config('enigma.theme.name').'.layout.scripts')

	</body>
</html>
