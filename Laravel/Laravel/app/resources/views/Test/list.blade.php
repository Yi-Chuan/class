@extends('layout.index')
@section('title', '列表页')
@section('content')
      这是一个列表页
      <br>
      {{time()}}
      <br>
      {{$name or 'admin'}}
      <br>
      {{$html}}
      {!!$html!!}
      <h3>流程控制</h3>
      {{$total}}
      @if($total == 100)
			znb
      @elseif($total > 70 && $total < 100)
			nb
      @endif
      <h3>循环控制</h3>
      @for ($i = 0; $i < 10; $i++)
		    The current value is {{ $i }}
	  @endfor
	 <h3>遍历</h3>
	 @foreach ($users as $k=>$v)
	    <p>{{ $v }}</p>
	 @endforeach




@endsection

