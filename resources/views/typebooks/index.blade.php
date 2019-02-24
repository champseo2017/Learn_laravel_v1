<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<p>จำนวนหนังสือทั้งหมด <span>{{ $typebooks->total() }}</span></p>


@foreach($typebooks as $key => $typebook)

<span>ลำดับ: </span> {{ $rank++ }} {{ $typebook->name}} <a href="{{ route('deletebook',$typebook->id) }}">ลบหนังสือ</a><br>


@endforeach



<?php
echo $get_fullnamebooks->fullname;
?>



{!! $typebooks->render() !!}

<div>Showing {{$typebooks->currentpage()}} of  {{$typebooks->total()}} entries</div>





</body>
</html>