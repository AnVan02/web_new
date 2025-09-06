<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include "db.php";


$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $sql = "SELECT * FROM article WHERE article_id=$id";
            $result = $conn->query($sql);
            echo json_encode($result->fetch_assoc());
        } else {
            $sql = "SELECT * FROM article ORDER BY article_date DESC";
            $result = $conn->query($sql);
            $articles = [];
            while ($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }
            echo json_encode($articles);
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);

        $article_link = $conn->real_escape_string($data['article_link']);
        $article_tag = $conn->real_escape_string($data['article_tag']);
        $article_author = $conn->real_escape_string($data['article_author']);
        $article_title = $conn->real_escape_string($data['article_title']);
        $article_summary = $conn->real_escape_string($data['article_summary']);
        $article_content = $conn->real_escape_string($data['article_content']);
        $article_image = $conn->real_escape_string($data['article_image']);
        $article_video = $conn->real_escape_string($data['article_video']);
        $article_date = $conn->real_escape_string($data['article_date']);
        $article_status = intval($data['article_status']);

        $sql = "INSERT INTO article 
                (article_link, article_tag, article_author, article_title, article_summary, article_content, article_image, article_video, article_date, article_status)
                VALUES 
                ('$article_link', '$article_tag', '$article_author', '$article_title', '$article_summary', '$article_content', '$article_image', '$article_video', '$article_date', $article_status)";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Thêm bài viết thành công"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case 'PUT':
        $id = intval($_GET['id']);
        $data = json_decode(file_get_contents("php://input"), true);

        $article_link = $conn->real_escape_string($data['article_link']);
        $article_tag = $conn->real_escape_string($data['article_tag']);
        $article_author = $conn->real_escape_string($data['article_author']);
        $article_title = $conn->real_escape_string($data['article_title']);
        $article_summary = $conn->real_escape_string($data['article_summary']);
        $article_content = $conn->real_escape_string($data['article_content']);
        $article_image = $conn->real_escape_string($data['article_image']);
        $article_video = $conn->real_escape_string($data['article_video']);
        $article_date = $conn->real_escape_string($data['article_date']);
        $article_status = intval($data['article_status']);

        $sql = "UPDATE article SET 
                    article_link='$article_link',
                    article_tag='$article_tag',
                    article_author='$article_author',
                    article_title='$article_title',
                    article_summary='$article_summary',
                    article_content='$article_content',
                    article_image='$article_image',
                    article_video='$article_video',
                    article_date='$article_date',
                    article_status=$article_status
                WHERE article_id=$id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Cập nhật thành công"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case 'DELETE':
        $id = intval($_GET['id']);
        $sql = "DELETE FROM article WHERE article_id=$id";

        if ($conn->query($sql)) {
            echo json_encode(["message" => "Xóa thành công"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    default:
        echo json_encode(["error" => "Phương thức không hỗ trợ"]);
        break;
}
