<?php
// ユーザーからの入力を取得
$name = $_GET['name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>XSS Example</title>
</head>
<body>
    <h1>こんにちは、<?php echo $name; ?>さん！</h1>
</body>
</html>

# 2025/9/18 17:46更新
