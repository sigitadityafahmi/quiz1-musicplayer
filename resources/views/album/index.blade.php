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
	<center><h2 style="color: #fff;">ALBUM LIST</h2></center>
	<table>
		<tr>
			<th>ID</th>
			<th>ALBUM NAME</th>
			<th>ARTIST NAME</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_name }}</td>
			<td><a id="btn" href="{{ url('album/'.$row->album_id.'/edit') }}">EDIT</a></td>
			<td><form action="{{ url('/album/'.$row->album_id) }}" method="post">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">DELETE</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
	<a id="tbh" href="{{ url('album/create') }}">Add Data</a>
</div>
@endsection