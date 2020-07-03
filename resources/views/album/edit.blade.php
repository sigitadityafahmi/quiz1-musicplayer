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
<h2 style="color: #fff;">EDIT ALBUM DATA</h2>
<form method="post" action="{{ url('/album/'.$row->artist_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>ALBUM NAME</th>
			<td><input type="text" name="album_name" value="{{ $row->album_name }}"></td>
		</tr>
		<tr>
			<th>ARTIST NAME</th>
			<td>
				<select name="artist_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->artist_id }}" >{{ $rows->artist_name }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection