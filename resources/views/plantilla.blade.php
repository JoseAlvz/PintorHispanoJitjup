@extends('layouts.master')
@section ('title', 'Hola mundo')
@section ('header')
@parent 
<marquee behavior="" direction="">Proyecto de clase</marquee>
@stop

@section ('navbar')
<H1><center>Pintores</center></H1>
<h3>
<li><a href="{{route('DiegoRiv')}}">Diego Riverita</a></li>
<li><a href="{{route('Fridakah')}}">Frida Kahlito</a></li>
<li><a href="{{route('CaraVag')}}">Caravaggito</a></li>
<li><a href="{{route('Goya')}}">Goyita</a></li>
<li><a href="{{route('Rembra')}}">Rembrancito</a></li> <br>

@stop

@section ('barralateral')
@parent
@stop


@section ('content')

@stop

@section('footer')
Hecho por Jose Luis Alvarez Rios 
@parent
@stop

