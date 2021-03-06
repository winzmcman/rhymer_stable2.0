@extends('layouts.structure')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($rhymes as $rhyme)
                <h1><a href="{{ route('rhyme', ['id' => $rhyme->id]) }}">{{ $rhyme->title }}</a></h1>
                <div class="w-100"></div>
            @endforeach
        </div>    
    </div>
@endsection
