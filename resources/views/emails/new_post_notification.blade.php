<!DOCTYPE html>
<html>
<head>
    <title>Cập nhật bài viết mới</title>
</head>
<body>
    <h1>Tiêu đề bài viết :{{ $post->title }}</h1>
    <p>Mô tả bài viết :{{ $post->excerpt }}</p>
    <p>Click <a href="{{ route('posts.show', $post->slug) }}">vào đây</a> để đọc bài viết đầy đủ.</p>
    <p>Để hủy nhận thông báo từ chúng tôi, vui lòng nhấn vào liên kết dưới đây:</p>
    <p><a href="{{ $unsubscribeUrl }}">Hủy đăng ký</a></p>
</body>
</html>