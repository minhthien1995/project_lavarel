@extends('views.master')
@section('title','hoc lap trinh laravel')
@section('sidebar')
	moi lam 
	@parent
	cua Minh Thien
@stop
@section('noidung')
	day la trang layout
	<hr/>
	<?php $hoten = '<b>Tran Minh Thien</b>'?>
	{{ $hoten }} {{-- khong doc duoc the html --}}
	<br/>
	{!! $hoten !!} {{-- doc duoc the html --}}
	<hr/>
	{{-- Ham if trong file.blade.php --}}
	<?php $diem = 10 ;?>
	@if($diem <5)
		hoc sinh yeu
	@elseif($diem >=5 && $diem<=7)
		hoc sinh kha 
	@else
		hoc sinh gioi
	@endif
	<br/>
	{{ isset($diem) ? $diem : 'khong co diem nao' }}
	<br/>
	{{ $diem or 'khong ton tai bien diem ' }}
	<hr/>
	{{-- ham for --}}
	@for($i = 0; $i<=10;$i = $i + 1)
		So thu tu: {{ $i }} <br/>
	@endfor
	<hr/>
	<?php $i = 0 ;?>
	@while($i <= 10)
		so thu tu: {{ $i }} <br/>
		<?php $i++ ; ?>
	@endwhile	
	<?php $arr = ['pho','bun','mam'];?>
	@foreach($arr as $doan)
		{{ $doan }},
	@endforeach	
@stop