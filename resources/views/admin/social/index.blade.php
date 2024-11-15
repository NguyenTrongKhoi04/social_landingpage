<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Tên File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 1200px;
        }

        table.dataTable {
            border-radius: 8px;
            overflow: hidden;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border-radius: 5px;
            padding: 5px 10px;
        }

        .input-group .btn {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                <strong>Thành công!</strong> {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                <strong>Lỗi!</strong> {{ session('error') }}
            </div>
        @endif
        <h2 class="text-center mb-4">Danh sách Link Landing Page</h2>

        <div class="mb-4">
            <form action="{{ route('social.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12">
                        <div class="input-group">
                            <input type="text" name="linkOffer" class="form-control"
                                placeholder="Nhập link để tạo các Landing page mới..." required>
                            <button type="submit" class="btn btn-success btn-lg">Thêm</button>
                        </div>
                        @if ($errors->has('linkOffer'))
                            <div class="alert alert-danger mt-2">
                                {{ $errors->first('linkOffer') }}
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>

        <div class="text-center mt-3">
            <button type="submit" id="deleteSelected" class="btn btn-danger">Xóa các mục đã chọn</button>
        </div>

        <table id="fileTable" class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>Tên Landing Page</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fileNames as $fileName)
                    <tr>
                        <td><input type="checkbox" class="select-item text-center" value="{{ $fileName }}"></td>
                        <td><a href="{{ $fileName }}">{{ $fileName }}</a></td>
                        <td>
                            <form action="{{ route('social.destroy', ['social' => $fileName]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Chắc chắn muốn xóa ?')" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#fileTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthMenu": [10, 15, 25, 50],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf'
                ]
            });

            // Chọn tất cả checkbox
            $('#selectAll').on('click', function() {
                $('.select-item').prop('checked', this.checked);
            });

            // Xóa các mục đã chọn
            $('#deleteSelected').on('click', function() {
                var selectedFiles = [];
                $('.select-item:checked').each(function() {
                    selectedFiles.push($(this).val());
                });

                if (selectedFiles.length > 0) {
                    if (confirm("Bạn có chắc chắn muốn xóa các mục đã chọn không?")) {
                        $.ajax({
                            url: "{{ route('social.bulkDelete') }}",  // Route cho xóa hàng loạt
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                files: selectedFiles
                            },
                            success: function(response) {
                                location.reload();
                            }
                        });
                    }
                } else {
                    alert("Vui lòng chọn ít nhất một mục để xóa.");
                }
            });
        });
    </script>
</body>

</html>
