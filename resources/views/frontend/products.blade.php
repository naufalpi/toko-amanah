@extends('layouts.app')

@section('content')
    <x-products-card :products="$products"></x-products-card>
@endsection