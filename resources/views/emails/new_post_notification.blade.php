<!DOCTYPE html>
<html>
<head>
    <title>New Post Update</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->excerpt }}</p>
    <p>Click <a href="{{ route('posts.show', $post->slug) }}">here</a> to read the full post.</p>
</body>
</html>