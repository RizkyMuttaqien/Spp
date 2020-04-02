<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembayaran</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
        }
        table, td, th {
        border: 1px solid #ddd;
        text-align: left;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 15px;
        }
	</style>
	<center>
    @php $year = now()->format('Y') @endphp
		<h4>Laporan Pembayaran Spp tahun {{$year}}</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			        <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama Petugas</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan Dibayar</th>
                        <th>Tahun Bayar</th>
                        <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php $i = 1 @endphp
                    @foreach ($transaksi as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->nis}}</td>
                        @foreach ($petugas as $p)
                        @if($p->id == $data->id)
                        <td>{{$p->name}}</td>
                        @endif
                        @endforeach
                        <td>{{$data->tgl_bayar}}</td>
                        <td>{{$data->bulan_dibayar}}</td>
                        <td>{{$data->tahun_bayar}}</td>
                        <td>{{$data->jumlah_bayar}}</td>
                    </tr>
                    @endforeach
		</tbody>
	</table>

</body>
</html>
