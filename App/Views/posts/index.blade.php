@extends('layouts.app')

@section('header')
    @parent
@endsection

@section('main')
    @if(!empty($posts))
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h2 class="text-primary">{{$post->title}}</h2>
                    <p>{{$post->content}}</p>
                </div>
            </div>
        @endforeach

        @else
        <h3 class="text-danger">No Post Found.</h3>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection

@section('footer')
    @parent
@endsection
