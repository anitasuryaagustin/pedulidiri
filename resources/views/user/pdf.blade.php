<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>

	<div class="container">
		<center>
			<h4>Laporan Data User Peduli Diri</h4>
		</center>
		<br/>
		<table class='table table-bordered' border="1">
			<thead>
				<tr>

                     <th>Nik</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $p)
				<tr>

                     <td>{{$p->nik}}</td>
					<td>{{$p->nama}}</td>
					<td>{{$p->email}}</td>
					<td>{{$p->alamat}}</td>
					<td>{{$p->no_telp}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

</body>
</html>
