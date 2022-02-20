@extends('site.layout.layout-login')

@section('titulo-pagina','LD2V | Login')

@section('conteudo')
    @component('site.app._components.form-login')
    @endcomponent
@endsection