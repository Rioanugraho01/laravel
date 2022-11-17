<!DOCTYPE html>
<html>
    @extends('layout.layout')

    @section('title',$title)

    @section('sidebar')
        @parent
        <li>PHP</li>
    @endsection
    
    @section('content')
        <p>{{ $tampilan }}</p>
        @stop
</html>