@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            All Posts
        </h1>
        <a href="/post/create" class="btn btn-danger"> Add Post</a>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>
                    Title
                </th>

                <th>
                    Created at
                </th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->created_at }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection