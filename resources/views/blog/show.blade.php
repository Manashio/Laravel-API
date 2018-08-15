@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

                <div class="pt-3 pb-3">
                   <h5 class="blog-title">{{$blog -> post_title}}</h5>
                   <h6 class="muted"><small> <b> {{$blog -> post_author}}</b></small></h6>

                   <p class="paragraph pt-3"> {{$blog -> post_body}}</p>
                    
                    <div class="pb-3">
                        <p class="muted"> {{date('h:i a, d M, y', strtotime($blog->created_at))}}</p>            
                    </div>

                    <div class="text-center">
                        <a href="/blogs" class="btn btn-primary">Close</a>
                        @if(count($total_blog) == $counter)
                            <a href="{{$blog->id+$counter}}" class="btn btn-primary">Next Post</a>
                        @endif


                    </div>
                </div>
          
          

        </div>
    </div>
</div>
@endsection
