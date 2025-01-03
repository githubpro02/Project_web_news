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
    <p>-----</p>
    <p>Liên hệ với chúng tôi:</p>
    <p>Địa chỉ: Yên Nghĩa - Hà Đông - Hà Nội</p>
    <p>Email: 20010783@st.phenikaa-uni.edu.vn</p>
    <p>Hotline: +123 456 (789)</p>
</body>
</html>