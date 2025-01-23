<?php
session_start();

// アップロードされた画像パスをセッションから取得
$uploadedImage = $_SESSION['uploadedImage']['imagePath'] ?? null;
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>アップロード画像の表示</title>
</head>
<body>
    <h1>アップロードした画像</h1>
    <?php if ($uploadedImage): ?>
        <p>以下の画像がアップロードされました。</p>
        <img src="<?php echo htmlspecialchars($uploadedImage); ?>" alt="アップロード画像" style="max-width: 100%; height: auto;">
        <p>画像パス: <?php echo htmlspecialchars($uploadedImage); ?></p>
    <?php else: ?>
        <p>まだ画像がアップロードされていません。</p>
    <?php endif; ?>
    <a href="UP.html">戻る</a>
</body>
</html>
