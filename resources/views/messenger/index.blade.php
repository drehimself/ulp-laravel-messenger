@extends('layouts.master')

@section('content')
    @include('messenger.partials.flash')

    <h2>General</h2>
    @each('messenger.partials.thread', $threadsGeneral, 'thread', 'messenger.partials.no-threads')
    <hr>

    <h2>Laravel</h2>
    @each('messenger.partials.thread', $threadsLaravel, 'thread', 'messenger.partials.no-threads')
    <hr>

    <h2>Vue</h2>
    @each('messenger.partials.thread', $threadsVue, 'thread', 'messenger.partials.no-threads')
    <hr>
@stop
