<?php
header('Content-Type: application/json');
require 'db.php'; // file này chứa kết nối PDO: $pdo

// Nhận dữ liệu JSON từ client
$data = json_decode(file_get_contents('php://input'), true);

// Danh sách các trường bắt buộc
$required = [
    'article_link', 'article_tag', 'article_author', 'article_title',
    'article_summary', 'article_content', 'article_image','article_video',
    'article_date', 'article_status'
];

// Kiểm tra dữ liệu đầu vào
foreach ($required as $field) {
    if (!isset($data[$field]) || trim($data[$field]) === '') {
        http_response_code(400);
        echo json_encode(['error' => "Thiếu hoặc trống trường: $field"]);
        exit;
    }
}


// Câu lệnh SQL để chèn bài viết
$sql = "INSERT INTO article (
    article_link, article_tag, article_author, article_title,
    article_summary, article_content, article_image, article_video, 
    article_date, article_status
) VALUES (
    :link, :tag, :author, :title,
    :summary, :content, :image,video
    :date, :status
)";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':article_link'    => $data['article_link'],
        ':article_tag'     => $data['article_tag'],
        ':article_author'  => $data['article_author'],
        ':article_title'   => $data['article_title'],
        ':article_summary' => $data['article_summary'],
        ':article_content' => $data['article_content'],
        ':article_image'   => $data['article_image'],
        ':article_date'    => $data['article_date'],
        ':article_status'  => $data['article_status']
    ]);

    echo json_encode(['message' => '✅ Bài viết đã được đăng thành công']);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => '❌ Lỗi khi lưu bài viết vào CSDL']);
}



?>
