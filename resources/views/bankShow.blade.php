<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Scrolling Banner Text Animation effect</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/after_search.css">
</head>

<body>
	<div class="scrolling">
		<h2>ALL BLOOD BANK DETAILS</h2>
	</div>

	<div class="table-container">
		<table>
			<thead>
				<tr>
					<th>Sl. No.</th>
					<th>Bank Name</th>
					<th>Catagory</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
        @foreach($data as $item)
				<tr>
					<td>{{ $item->bank_id }}</td>
					<td>{{ $item->bank_name }} </td>
					<td>Private</td>
					<td><span class="label label-success">{{ 'closed' }}</span></td>
					<td><a href="/viewDetails{{ $item->bank_id }}" class="btn">View Details</a></td>
				</tr>
        @endforeach
			</tbody>
		</table>
	</div>

</body>

</html>