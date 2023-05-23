@php
$nama = "budi";
$nilai = 60.00;
@endphp
{{--- ini adlah komen struktur kendali if --}}
<!-- struktur kendali if dengan html -->
<!-- kode php yg ada di blade menggunakan @ -->
@if ($nilai >= 60)

@php $ket = "lulus"; @endphp
@else
@php $ket = "gagal"; @endphp
@endif
<p>siswa {{$nama}} dengan nilai {{$nilai}}</p>
<h1>dinyatakan {{$ket}}</h1>