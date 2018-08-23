@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(count(@blogs) > 0)
            @foreach($blogs as $blog)

                <div class="pt-3 pb-3">
                   <h5 class="blog-title"> <a href="blogs/{{$blog->id}}">{{$blog -> post_title}}</a></h5>
                   <h6 class="muted"><small> <b> {{$blog -> post_author}}</b></small></h6>

                   <p class="paragraph pt-3"> {{$blog -> post_body}}</p>
                    
                    <div class="pb-3">
                        <p class="muted"> {{date('d M, h:ia ', strtotime($blog->created_at))}}</p>            
                    </div>
                
                </div>
            @endforeach
            @else
            <p>No Package found!</p>
            @endif

            <div class="links">
                {!! $blogs->links(); !!}
            </div>

        </div>
    </div>
</div>
@endsection
