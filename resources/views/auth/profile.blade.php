<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1>ĐĂNG KÝ</h1>
    <form action="./save-add-product"  method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Mã Sinh Viên</label>
                <input type="number" name="mssv" class="form-control">
                
            </div>
           
            <div class="form-group">
                <label for="">Họ và Tên</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Lớp</label>
                <input type="text" name="class" class="form-control">
                
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input type="number" name="brith" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Dịa Chỉ</label>
                <textarea name="detail" class="form-control" rows="2"></textarea>
            </div>
           
    </div>
</form>
</body>
</html>
