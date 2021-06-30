@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Registro de Asistencia de Trabajo Presencial')
{{-- page-styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-knowledge-base.css')}}">
@endsection

@section('content')
<!-- Knowledge base Jumbotron start -->
{{-- @livewire('presencials.attendance',['event'=> $event]) --}}
<livewire:presencials.attendance :event="$event">

<!-- Knowledge base ends -->
@endsection

{{-- page scripts --}}
@section('page-scripts')

@endsection
