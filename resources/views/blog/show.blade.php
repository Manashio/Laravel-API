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
                        <p class="muted">Posted on <br> {{date('h:i a, d M, Y', strtotime($blog->created_at))}}</p>            
                    </div>

                    <div class="pt-5">
                        <a href="/blogs" class="btn primary">Close</a>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
