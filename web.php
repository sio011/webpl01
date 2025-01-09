<?php
session_start();
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>画像表示ページ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
if (isset($_SESSION['uploadedImage'])) {
    $imageInfo = $_SESSION['uploadedImage'];
    echo '<div class="uploaded-image">';
    echo '<h2>アップロードされた画像:</h2>';
    echo '<img src="' . htmlspecialchars($imageInfo['imagePath']) . '" alt="アップロードされた画像" style="max-width: 100%; height: auto;">';
    echo '</div>';

    // セッションの情報をクリア
    unset($_SESSION['uploadedImage']);
} else {
    echo '<p>画像はアップロードされていません。</p>';
}
?>

</body>
</html>
