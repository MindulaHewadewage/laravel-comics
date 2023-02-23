@extends('layouts.main')

@section('title','comics')


@section('content')
<div id="comics">
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach($comics as $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <p>{{$comic['title']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection