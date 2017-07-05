@extends('frame.showblogs')

@section('content')

<?php $content = App\Models\blogs::orderBy('created_at','desc')->take(20)->get();?>

<div class = "panel-body">
    @for($i=0;$i<21;$i++)
        @if(isset($content[$i]))
            <a href = "blogs/{{$content[$i]->id}}"><p>{{$content[$i]->title}}</p></a> 

        @endif
    @endfor
</div>











@endsection