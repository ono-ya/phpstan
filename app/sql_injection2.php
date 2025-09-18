<?php
// ユーザーからの入力を取得
$username = $_GET['username'];
$password = $_GET['password'];

// データベース接続（例）
$conn = mysqli_connect("localhost", "root", "", "test_db");

// 脆弱なクエリ（ユーザー入力を直接埋め込んでいる）
// 適当な改行
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

// 結果の確認
if (mysqli_num_rows($result) > 0) {
    echo "ログイン成功";
} else {
    echo "ログイン失敗";
}
?>
