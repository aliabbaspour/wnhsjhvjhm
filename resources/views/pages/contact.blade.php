@extends('layouts.default')
@section('content')
    i am the contact page
    @foreach($data as $row)
        <div>
            {{$row['title']}}
        </div>
    @endforeach

    <div>
        <form action="/insert" method="post">
            {{csrf_field()}}
            <input type="text" name="title" value="">
            <input name="content" value="">
            <input name="image_url" value="">
            <input type="submit">

        </form>

    </div>
@stop
