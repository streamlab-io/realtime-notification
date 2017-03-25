@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Create post
        </h1>
        <form action="{{ url('post') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">title</label>
                <input type="text" name="title" id="name"  class="form-control"/>
            </div>
            <div class="form-group">
                <label for="name">Body</label>
                <textarea  name="body" id="name"  class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Add Post" class="btn btn-default" />
            </div>
        </form>
    </div>
@endsection