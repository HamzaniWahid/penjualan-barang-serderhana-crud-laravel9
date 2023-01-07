<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <style>
		table tr td,
		table tr th{
			font-size: 12pt;
            padding: 10px;
		}
	</style>
</head>
<body>
    <div class="card">
        <header style="text-align: center; line-height: 0px">
            <h2>Toko Service Elektronik</h2>
            <h4>Haji Multazam</h4>
            <p>Jalan Raden Puguh, Dusun Embung Duduk, Desa Labulia, Kec. Jonggat, LOTENG</p>
            <p>Kode Pos : 83561</p>
            <hr>

        </header>
        <div class="card-body">
        <h4>Data Barang</h4>

        <!-- Table with stripped rows -->
        <table class="table table-striped" border="1" cellspacing="0" cellpadding="5" style="width: 100%;">
            <thead style="background-color: lavender; color:black;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($barangs as $barang)
                <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$barang->nama}}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->

        </div>
    </div>
</body>
</html>
