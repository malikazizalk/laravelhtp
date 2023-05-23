@php
$no = 1;
$s1 = ['nama'=>'fawaz', 'nilai'=>85];
$s2 = ['nama'=>'bedu', 'nilai'=>90];
$s3 = ['nama'=>'siti', 'nilai'=>90];
$s4 = ['nama'=>'ari', 'nilai'=>70];
$s5 = ['nama'=>'andi', 'nilai'=>60];

$judul = ['No', 'Nama', 'Keterangan'];
$siswa = [$s1, $s2, $s3, $s4, $s5];

@endphp

<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
            @foreach($judul as $jdl)
            <th>{{$jdl}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        @php
        $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal';
        @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>{{$s['nama']}}</td>
            <td>{{$s['nilai']}}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>