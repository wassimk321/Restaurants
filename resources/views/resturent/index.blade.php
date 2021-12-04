@extends('adminlte::page')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer></script>
@section('content')
 @if ($message = Session::get('success'))
        <div id="not" class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
		<script>
		setTimeout(function() {
    $('#not').fadeOut('fast');
}, 3000); //
		</script>
    @endif
	<div Style="background-color:white;border-top:solid 3px blue;padding:2%;">
<a class="btn  btn-success" href="resturnt/create" Style="margin-top:0%;margin-left:86%;margin-bottom:2%;">create resturent</a>

<table id="mytable" class="display">
<thead>
<tr>
<th>resturent</th>
<th>description</th>
<th>category</th>
<th>action</th>


</tr>
</thead>
<tbody>
<tr>
</tr>


</tbody>
</table>
</div>
@endsection

<script>

$(document).ready( function () {
    $('#mytable').DataTable({
		processing: true,
		serverSide:true,
		
		ajax:{
			url: "{{'pagination-resturent'}}",
		},
	 columns: [
            {data:'name'},
		   {data:'description'},
			   {data:'category'},
			{data:'action'},
			
			 ],
		
	})	
	});
</script>
