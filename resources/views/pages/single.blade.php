@extends('layouts.default')
@section('content')
    i am the Single
    @foreach($data as $row)
        <div>
            {{$row['content']}}
        </div>
    @endforeach


@stop
