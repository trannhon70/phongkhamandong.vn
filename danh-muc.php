<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sequential Ping Effect with Spacing</title>
  <style>
    .ping-wrapper {
      position: relative;
      display: inline-block;
    }

    .ping-border {
      position: relative;
      padding: 20px;
      border: 2px solid blue; /* Border của thẻ chính */
      background-color: white; /* Màu nền của phần tử chứa */
    }

    .ping-wrapper::before,
    .ping-wrapper::after,
    .ping-wrapper .ping-layer1,
    .ping-wrapper .ping-layer2 {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(100px); /* Đặt vào giữa và bắt đầu từ kích thước 0 */
      opacity: 0; /* Bắt đầu không nhìn thấy */
      pointer-events: none; /* Đảm bảo pseudo-elements không can thiệp vào các tương tác */
    }

    .ping-wrapper::before {
      width: calc(100% + 10px); /* Kích thước của lớp ping đầu tiên, thêm 5px ở mỗi bên */
      height: calc(100% + 10px);
      border: 4px solid red; /* Màu sắc của lớp ping đầu tiên */
      animation: pingLayer 2s infinite;
    }

    .ping-wrapper::after {
      width: calc(100% + 20px); /* Kích thước của lớp ping thứ hai, thêm 10px ở mỗi bên */
      height: calc(100% + 20px);
      border: 4px solid blue; /* Màu sắc của lớp ping thứ hai */
      animation: pingLayer 2s infinite;
      animation-delay: 0.5s; /* Đặt delay để tạo hiệu ứng nối tiếp */
    }

    .ping-wrapper .ping-layer1 {
      width: calc(100% + 30px); /* Kích thước của lớp ping thứ ba, thêm 15px ở mỗi bên */
      height: calc(100% + 30px);
      border: 4px solid salmon ; /* Màu sắc của lớp ping thứ ba */
      animation: pingLayer 2s infinite;
      animation-delay: 1s; /* Đặt delay để tạo hiệu ứng nối tiếp */
    }

    .ping-wrapper .ping-layer2 {
      width: calc(100% + 40px); /* Kích thước của lớp ping thứ tư, thêm 20px ở mỗi bên */
      height: calc(100% + 40px);
      border: 4px solid seagreen ; /* Màu sắc của lớp ping thứ tư */
      animation: pingLayer 2s infinite;
      animation-delay: 1.5s; /* Đặt delay để tạo hiệu ứng nối tiếp */
    }

    @keyframes pingLayer {
      0% {
        transform: translate(-50%, -50%) scale(0); /* Bắt đầu với kích thước 0 */
        opacity: 1; /* Bắt đầu với độ mờ 1 */
      }
      50% {
        transform: translate(-50%, -50%) scale(1); /* Mở rộng border ra */
        opacity: 0; /* Biến mất khi mở rộng */
      }
      100% {
        transform: translate(-50%, -50%) scale(0); /* Quay lại kích thước 0 */
        opacity: 0; /* Đảm bảo không còn nhìn thấy khi kết thúc */
      }
    }
  </style>
</head>
<body style="display: flex; align-items: center; justify-content: center; height: 100vh; " >
  <div class="ping-wrapper">
    <div class="ping-border">
      Sequential Ping Layers with Spacing!
    </div>
    <!-- Thêm các lớp ping nếu cần -->
    <div class="ping-layer1"></div>
    <div class="ping-layer2"></div>
  </div>
</body>
</html>
