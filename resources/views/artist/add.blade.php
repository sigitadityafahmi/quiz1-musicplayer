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
<h2 style="color: #fff;">ADD ARTIST DATA</h2>
<form method="post" action="{{ url('/artist') }}">
	@csrf
	<table>
		<tr>
			<th>ARTIST NAME</th>
			<td><input type="text" name="artist_name"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SAVE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection