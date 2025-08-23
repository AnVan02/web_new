<title>Kiểm Tra Đơn Hàng</title>

<?php
    require "header.php";
?>

<?php if(isset($_SESSION["message"])):?>
	<script>
		function message() {
		window.alert("<?php echo $_SESSION["message"];?>");
		}
	</script>
<?php endif;?>
<head>
<!-- Banner -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

  <!-- Các dấu chấm -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../image/banner_sp_2.png" class="d-block w-100" alt="Banner 1" onclick="window.location.href='https://rosacomputer.vn/.php'">
        </div>
        <!-- <div class="carousel-item">
            <img src="../image/Backtoschool.jpg" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="../image/banner_sp_3.png" class="d-block w-100" alt="Banner 3">
        </div> -->
    </div>
</div>

<?php if(isset($_SESSION["message"])) {echo 'onload="message()"';unset($_SESSION["message"]);}?>


    <style>
        .breadcrumb {
            background: #fff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        */
        .tab {
            padding: 20px;
            background-color: white;
            margin: 20px auto;
            width: 80%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .tab h1 {
            font-size: 24px;
            color: #333;
            display: inline-block;
            padding-bottom: 5px;
        }
        .tab p {
            color: red;
            font-size: 14px;
        }
        .tab label {
            font-size: 16px;
            color: #333;
        }
        .tab input[type="text"] {
            padding: 10px;
            width: 200px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .tab button {
            padding: 10px 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: black;
        }
        .table {
            display: none;
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .table th {
            background-color: red;
            color: white;
        }
      
    </style>
	<!-- Main content -->
    
    <div class="tab">
        <h1>Kiểm tra đơn hàng</h1>
        <p>(Dành cho đơn đặt hàng online trên website)</p>
        <label for="order-code">Nhập mã đơn hàng để kiểm tra đơn hàng của bạn.</label><br><br>
        <input type="text" id="order-code">
        <button id="check_id">Kiểm tra</button>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Mã đơn hàng</th>
                <th>Họ tên</th>
                <th>Điện thoại</th>
                <th>Ngày đặt hàng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
            </tr>
        </table>
        
        <div id="order_content"></div>
    </div>
    <script>
        document.getElementById("check_id").addEventListener("click", function () {
            const orderCode = document.getElementById("order-code").value.trim();

            if (!orderCode) {
                alert("Vui lòng nhập mã đơn hàng");
                return;
            }

           fetch(`https://rosacomputer.vn/api.php?order_code=${orderCode}`)
            .then(response => response.json())
            .then(data => {
                const table = document.querySelector(".table");
                table.innerHTML = `
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Họ tên</th>
                            <th>Điện thoại</th>
                            <th>Ngày đặt hàng</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    </tbody>
                `;
        
                if (data.success) {
                    const row = `
                        <tr>
                            <td data-label="Mã đơn hàng">${data.data.formatted_order_id}</td>
                            <td data-label="Họ tên">${data.data.customer_name}</td>
                            <td data-label="Điện thoại">${data.data.customer_phone}</td>
                            <td data-label="Ngày đặt hàng">${data.data.order_date}</td>
                            <td data-label="Trạng thái">${data.data.status}</td>
                        </tr>
                    `;
                    table.style.display = "block"; /* Use block for mobile */
                    table.querySelector("tbody").innerHTML += row;
                    document.getElementById('order_content').innerHTML = data.data.order;
                } else {
                    alert(data.message);
                    table.style.display = "none";
                    document.getElementById('order_content').innerHTML = "";
                }
            })
            .catch(err => {
                console.error(err);
                alert("Đã xảy ra lỗi khi kết nối với server!");
            });
        });
    </script>

        <!-- Closing div tags for the container and row -->
            </div>
        </div>
    </div>

<style>
/* CSS Responsive cho Kiểm Tra Đơn Hàng */
.tab {
    padding: 15px;
    background-color: white;
    margin: 15px auto;
    width: 90%; /* Linh hoạt hơn trên di động */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px; /* Bo góc nhẹ cho thẩm mỹ */
}

.tab h1 {
    font-size: clamp(1.5rem, 5vw, 1.8rem); /* Font size linh hoạt */
    color: #333;
    display: inline-block;
    padding-bottom: 5px;
    margin: 0;
}

.tab p {
    color: red;
    font-size: clamp(0.9rem, 4vw, 1.2rem);
    margin: 5px 0;
}

.tab label {
    font-size: clamp(0.9rem, 3.5vw, 1rem);
    color: #333;
    display: block; /* Đảm bảo label chiếm toàn bộ chiều rộng */
    margin-bottom: 8px;
}

.tab input[type="text"] {
    padding: 10px;
    width: 100%; /* Chiếm toàn bộ chiều rộng */
    max-width: 300px; /* Giới hạn trên màn hình lớn */
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước */
    font-size: clamp(0.9rem, 3.5vw, 1rem);
}

.tab button {
    padding: 10px 20px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: clamp(0.9rem, 3.5vw, 1rem);
    width: 100%;
    max-width: 150px; /* Giới hạn trên màn hình lớn */
    transition: background-color 0.3s ease; /* Hiệu ứng mượt khi hover */
}

.tab button:hover {
    background-color: black;
}

.table {
    display: none; /* Ẩn mặc định cho đến khi có dữ liệu */
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 10px;
    text-align: left; /* Căn trái cho dễ đọc */
    border: 1px solid #ddd;
}

.table th {
    background-color: red;
    color: white;
    font-weight: bold;
}

/* Media Queries cho thiết bị di động */
@media (max-width: 768px) {
    .tab {
        width: 95%; /* Gần full-width trên di động */
        padding: 10px;
    }

    .tab input[type="text"], .tab button {
        max-width: 100%; /* Full-width trên di động */
    }

    .tab button {
        padding: 12px; /* Tăng padding cho dễ chạm */
    }

    /* Chuyển bảng thành dạng stacked */
    .table {
        display: block;
    }

    .table thead {
        display: none; /* Ẩn tiêu đề trên di động */
    }

    .table tbody, .table tr {
        display: block;
    }

    .table tr {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .table td {
        display: block;
        text-align: right;
        position: relative;
        padding: 10px 10px 10px 50%;
        border: none;
        border-bottom: 1px solid #ddd;
    }

    .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        width: 45%;
        font-weight: bold;
        text-align: left;
        color: #333;
    }

    .table td:last-child {
        border-bottom: none; /* Xóa đường viền cuối */
    }
}

/* Đảm bảo hover cho container button */
.container button:hover {
    background-color: black;
}
</style>

<?php
    require "footer.php";
?>
