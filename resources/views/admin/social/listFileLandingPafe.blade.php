<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả Tạo File Mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 900px;
        }
        .alert-success {
            background-color: #28a745;
            color: white;
        }
        .file-link {
            color: #007bff;
            text-decoration: none;
        }
        .file-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Kết quả Tạo Landing Page Mới</h2>

    <div class="alert alert-success">
        <strong>Thành công!</strong> Có tổng số <b>{{ $fileCount }}</b> landing page mới đã được tạo thành công.
    </div>
    <div>
        <h4>Danh sách các landing page mới:</h4>
        {!! $linkList !!}
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('social.index') }}" class="btn btn-primary">Quay lại</a>
    </div>

    <div class="mt-4">
        <p class="text-center text-muted">Landing Page được tạo tự động từ hệ thống</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
