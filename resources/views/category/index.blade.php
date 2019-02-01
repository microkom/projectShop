@extends('layouts.master')

@section('content')
    Categoria {{$category}}

    @if (isset($subCategory))
    Subcategoria {{$subCategory}}
    @endif



@stop
