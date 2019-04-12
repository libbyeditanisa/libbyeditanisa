<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>Data Produk</h1>
<table border="1">
	<thead>
		<tr>No</tr>
		<tr>Nama Produk</tr>
	</thead>
	<tbody>
		@foreach ($produk as $i => $v)
		<tr>
			<td>{{ $i+1 }}</td>
			<td>{{ $v }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>