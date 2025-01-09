<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileUpload'])) {
    $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/";
    $targetFile = $targetDir . basename($_FILES["fileUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
        // アップロード成功後、画像パスをセッションに保存
        $_SESSION['uploadedImage'] = [
            'imagePath' => "/uploads/" . basename($_FILES["fileUpload"]["name"])
        ];
        header('Location: web.php'); // web.phpにリダイレクト
        exit;
    } else {
        echo "アップロードに失敗しました。";
    }
}
?>
