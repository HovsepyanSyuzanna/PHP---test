<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<div class="container mt-5">

        <a href="/locations/create" class="btn btn-primary mb-5">New</a>

		<table class="table table-hover table-bordered table-dark">
			<tr>
				<th>Ip</th>
				<th>Coord_x</th>
				<th>Coord_y</th>
			</tr>

			@foreach($locations as $location)
				<tr>
					<td>{{ $location->ip }}</td>
					<td>{{ $location->coord_x }}</td>
					<td>{{ $location->coord_y }}</td>

                    <td>
                        <a href="/locations/show/{{$location->id}}" class="btn btn-info">Show</a>
                        <a href="/locations/edit/{{$location->id}}" class="btn btn-warning">Edit</a>

                        <form action="/locations/delete/{{$location->id}}" method="POST" class="d-inline-block">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
			@endforeach
		</table>

	</div>




</body>
</html>
