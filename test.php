<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng bài viết</title>
</head>
<body>
  <h2>Form đăng bài viết</h2>
  <form id="articleForm">
    <input type="text" name="article_link" placeholder="Link bài viết" required><br>
    <input type="text" name="article_tag" placeholder="Thẻ tag" required><br>
    <input type="text" name="article_author" placeholder="Tác giả" required><br>
    <input type="text" name="article_title" placeholder="Tiêu đề" required><br>
    <input type="text" name="article_summary" placeholder="Nội dung tóm tắt" required><br>
    <input type="text" name="article_content" placeholder="Tóm tắt nội dung" required><br>
    <input type="text" name="article_image" href="../assets/upload/images/" required><br>
    <input type="text" name="article_video" placeholder="../assets/uplaod/video/" required><br>
    <input type="date" name="article_date" required><br>
    <input type="number" name="article_status" placeholder="Trạng thái (0 hoặc 1)" required><br>
  </form>


  <form method="POST" action="API_web.php">
    <button type="submit">Gửi bài viết</button>
  </form>



  <div id="result"></div>

  <script>
    document.getElementById('articleForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this); 
        const data = {};
        formData.forEach((value, key) => data[key] = value);

        fetch('API_web.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(json => {
            document.getElementById('result').innerText = JSON.stringify(json, null, 2);
        })
        .catch(err => {
            document.getElementById('result').innerText = 'Lỗi gửi bài viết';
        });
    });
  </script>
</body>
</html>
