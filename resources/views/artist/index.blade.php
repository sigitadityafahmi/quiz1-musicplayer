@extends('layouts.app')
@section('content')

<style>
     body {
                background-color: #0c4a55;
                color: #000200;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

     table th {
            	background-color: #02262d;
                color: #fff;
                border: 6px solid #000;
				padding: 10px;
            }

     table td {

     			background-color: #02262d;
                color: #fff;
                border: 6px solid #000;
                padding: 10px;
     }
</style>
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<center><h2 style="color: #fff;">ARTIST LIST</h2></center>
	
	<table>
		<tr>
			<th>ID</th>
			<th>ARTIST NAME</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->artist_name }}</td>
			<td><a id="btn"  href="{{ url('artist/'.$row->artist_id.'/edit') }}">EDIT</a></td>
			<td><form action="{{ url('/artist/'.$row->artist_id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">DELETE</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('artist/create') }}">Add Data</a>
</div>
@endsection