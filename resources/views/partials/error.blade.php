@if(session()->has('danger'))
<script type="text/javascript">
	toastr.error('{!! session()->get('danger') !!}')
</script>
@endif