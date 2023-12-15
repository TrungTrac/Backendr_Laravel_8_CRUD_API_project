## Bước 1: php artisan serve để chạy dự án
## Bước 2: php artisan migatre để đồng bộ dữ liệu với MySQL
## Bước 3: khởi động postman
## Bước 4 test CRUD: 
## Phương thức GET : http://127.0.0.1:8000/api/targets
## Phương thức GET theo id : http://127.0.0.1:8000/api/targets/{nhập id mà muốn lấy}
## Phương thức POST theo id : http://127.0.0.1:8000/api/targets ở phần body thêm dữ liệu của 2 biến ví dụ :
<!-- 
{
    "targetName":"tentarget",
    "targetDeadline":"11121997"
}
 -->

## Phương thức DELETE theo id : http://127.0.0.1:8000/api/targets/{nhập id mà muốn sửa} ở phần body thêm dữ liệu của 2 biến ví dụ :
<!-- 
{
    "targetName":"tentarget",
    "targetDeadline":"11121997"
} -->
## Phương thức DELETE theo id : http://127.0.0.1:8000/api/targets/{nhập id mà muốn xóa}
