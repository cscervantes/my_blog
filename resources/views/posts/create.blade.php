@extends('layouts.master')

@section('content')
    <div class="container">

        <form action="/user/{{ Auth::user()->id }}/post" method="POST">
            {{ csrf_field() }}
            <div class="form-group">

                <label for="title">Title</label>

                <input type="text" name="title" id="title" class="form-control">

            </div>

            <div class="form-group">

                <label for="content">Content</label>

                <textarea name="content" id="content" cols="30" rows="10" class="form-control" style="resize:none"></textarea>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Publish</button>

            </div>

        </form>

    </div>

    

    
    
    

        
@endsection