<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files Form</title>
    <!-- Link đến Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2 class="mb-4">Form Upload Files</h2>
        <form action="" mui>
            <div class="form-group">
                <label for="htmlFiles">Upload Files HTML</label>
                <input type="file" class="form-control-file" id="htmlFiles" multiple>
            </div>

            <div class="form-group">
                <label for="excelFile">Upload File Excel</label>
                <input type="file" class="form-control-file" id="excelFile" accept=".xlsx, .xls">
            </div>

            <div class="form-group mt-4">
                <button class="btn btn-primary" id="saveBtn">Save</button>
                <button class="btn btn-success" id="generateBtn">Generate</button>
            </div>
        </form>
        <!-- Bảng kết quả -->
        <h3 class="mt-5">Bảng Kết Quả</h3>
        <table class="table table-bordered mt-3" id="resultTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">HTML File</th>
                    <th scope="col">URL Link from Excel</th>
                    <th scope="col">New HTML File Link</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu sẽ được thêm vào đây sau khi bấm Generate -->
            </tbody>
        </table>
    </div>

    <!-- Link đến Bootstrap JS và jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('saveBtn').addEventListener('click', function() {
            alert('Files have been saved!');
        });

        document.getElementById('generateBtn').addEventListener('click', function() {
            // Xử lý giả lập để tạo bảng kết quả - Ở đây chỉ là ví dụ tĩnh
            const tableBody = document.getElementById('resultTable').getElementsByTagName('tbody')[0];
            tableBody.innerHTML = ''; // Xóa các hàng cũ nếu có

            // Giả lập dữ liệu từ file HTML và file Excel
            const htmlFiles = document.getElementById('htmlFiles').files;
            const excelData = [{
                    url: 'https://example.com/page1'
                },
                {
                    url: 'https://example.com/page2'
                },
                {
                    url: 'https://example.com/page3'
                }
            ];

            // Kiểm tra và tạo hàng dữ liệu dựa trên số lượng file HTML và URL Excel
            for (let i = 0; i < htmlFiles.length; i++) {
                const row = tableBody.insertRow();
                row.insertCell(0).innerText = i + 1;
                row.insertCell(1).innerText = htmlFiles[i].name;
                row.insertCell(2).innerText = excelData[i % excelData.length]
                .url; // Vòng lặp giả lập URL từ file Excel
                row.insertCell(3).innerText = 'new-' + htmlFiles[i].name; // Đường dẫn giả lập cho file HTML mới
            }
        });
    </script>

</body>

</html>
