

@extends('CWadmin\home')
@section('Title', 'Thư viên hình ảnh -  Chuyên WEB')
@section('Noidung')

<h1>Hien thi QR Codes boi Stdio</h1>
<p>
	<div id="id_qrcode"></div>
</p>

@endsection

<script>
	var qrcode = new QRCode("id_qrcode", {
		text: {{$code}},
		width:100,
		height:100,
		colorDark:"#000000",
		colorLight:"#ffffff",
		correctLevel:QRCode.CorrectLevel.H
	});
</script>