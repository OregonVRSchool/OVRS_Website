<!-- must be used in a form -->
<!-- only one per page -->
<div id="file-upload" >
	{!! Form::file ('file') !!}
	<div class="row {{ (isset($page->file)) ? : 'hidden' }}" id="display-upload">
		
		<div class="col-4">
			<img src="data:image/jpeg;base64,{{ (isset($page->file->content)) ?$page->file->content : null }}">
			<div>{!! (isset($page->file->name)) ?$page->file->name : null !!}</div>
			<button type="button" onclick="deleteFile()">Delete</button>
		</div>
		
	</div>
</div>

<script type="text/javascript">
	function deleteFile () {
		document.getElementById("display-upload").style.display = "none";
		$.ajax({
			type: "POST",
			url: '{!! session("applicant")["id"] !!}/delete/file',
			data: {id: {!! (isset($page->file->id)) ?$page->file->id : null !!} },
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			success: function (data) {
				 console.log(data);
			}			
		});

	}
</script>