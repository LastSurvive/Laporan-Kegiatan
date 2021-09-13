<table>
	<thead>
		<tr>
			<th colspan="2" rowspan="2"></th>
			<th colspan="5" style="text-align: center;"><strong>EXPORT DATA</strong></th>
		</tr>
		<tr>
			<th></th>
		</tr>
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>TELP</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Departemen</th>
			<th>Kegiatan</th>
		</tr>
	</thead>
	<tbody>
		@foreach($list_karyawan as $karyawan)
		<tr>
			<td>{{$karyawan->nik}}</td>
			<td>{{$karyawan->nama}}</td>
			<td>{{$karyawan->telp}}</td>
			<td>{{$karyawan->tglm}}</td>
			<td>{{$karyawan->tgls}}</td>
			<td>{{$karyawan->organisasi_nama}}</td>
			<td>{{$karyawan->kegiatan}}</td>
			<td>{{$karyawan->status}}</td>
		</tr>
		@endforeach
	</tbody>
</table>