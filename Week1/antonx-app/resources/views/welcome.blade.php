<!DOCTYPE html>
<html>
    <head>
        <title>Blog Posts Site</title>
        <link href="{{ asset('/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Posts</h1>
        <div>
        <ul>
            @foreach ($posts as $post)
            <li><h3><a href="{{ route('details', $post['id']) }}">{{ $post['title'] }}</a></h3></li>
            <h4>Content</h4>
            <p>{{ $post['content'] }}</p>
            @endforeach
        </ul>
    
    </body>
</html>