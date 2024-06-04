@extends('layouts.masterlw')

@section('content')
    @livewire('input-data', ['priode_id' => $priode_id])
@endsection
