@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(count(@blogs) > 0)
            @foreach($blogs as $blog)

                <div class="pt-3 pb-3">
                   <h5 class="blog-title">{{$blog -> post_title}}</h5>

                   <p class="paragraph pt-3"> {{$blog -> post_body}}</p>
                    
                    <div class="pb-3">
                        <p class="muted"><b> Author </b> {{$blog -> post_author}} </p>            
                    </div>
                
                </div>


                
                
            @endforeach
            @else
            <p>No Package found!</p>
            @endif

        </div>
    </div>
</div>
@endsection
