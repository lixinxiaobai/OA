@extends('partial.script')

@section('script')
    @parent
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/config.constant.js') }}"></script>
    <script src="{{ asset('js/config.router.js') }}"></script>
@stop
