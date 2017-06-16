@if (session()->has('flash-notification.message'))
	<div class="container">
		<div class="alert alert-{{session()->get('flash-notification.level')}}">
			<button type="button" class="close" data-dismiss='alert' aria-hidden='true'>&times;</button>
			{!! session()->get('flash_notification.message') !!}
		</div>
	</div>
@endif