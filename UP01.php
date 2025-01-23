<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 画像情報を取得
    $image = $_FILES['fileUpload'];

    // ファイルの形式とサイズをチェック
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (in_array($image['type'], $allowedTypes)) {
        if ($image['size'] <= 5000000) { // 5MB以内
            // ファイル名をユニークに設定
            $filename = uniqid() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $destination = 'uploads/' . $filename;

            // ファイルをアップロード
            if (move_uploaded_file($image['tmp_name'], $destination)) {
                echo '画像が正常にアップロードされました。';
                echo '<br><img src="' . $destination . '" alt="アップロードされた画像">';
            } else {
                echo '画像のアップロードに失敗しました。';
            }
        } else {
            echo 'ファイルが大きすぎます。最大5MBまでです。';
        }
    } else {
        echo 'サポートされていないファイル形式です。JPEG、PNG、GIFのみです。';
    }
}
?>
