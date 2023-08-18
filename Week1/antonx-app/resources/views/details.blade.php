<!-- details.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $post['title'] }}</title>
    <link href="{{ asset('/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div class="post-container">
        <h1 class="post-title">{{ $post['title'] }}</h1>
        <div class="post-content">
            <h4>Content</h4>
            <p>{{ $post['content'] }}</p>
        </div>
        <div class="post-excerpt">
            <h4>Excerpt</h4>
            <p>{{ $post['excerpt'] }}</p>
        </div>
        <a class="back-link" href="{{ route('blogs') }}">Back to Blog</a>
    </div>
</body>
</html>
