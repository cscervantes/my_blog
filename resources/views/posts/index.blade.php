@extends('layouts.master')

@section('content')
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('post_show',$post->id) }}">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post->content }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="post">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}</p>
                </div>
                <hr>

                <form action="/user/{{ Auth::user()->id }}/post" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <label for="title">Write your comment</label>

                        <input type="text" name="comment" id="comment" class="form-control">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Comment</button>

                    </div>

                </form>

                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="{{ route('post_oldest') }}">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
