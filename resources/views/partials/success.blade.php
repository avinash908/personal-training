@if(session()->has('success'))
<script type="text/javascript">
	toastr.success('{!! session()->get('success') !!}')
</script>
@endif