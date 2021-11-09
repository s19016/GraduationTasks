<?php
require_once('./blog.php');
require_once("../login/functions.php");
// 取得したデータを表示

$blog = new Blog();
$blogData = $blog->getAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>ブログ一覧</title>
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <h1 class="header-logo"><a href="login_home.php">ひまッチ</a></h1>
            <!-- /.header-logo -->
            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="list-item">
                        <a class="item-btn" href="search.php">検索</a>
                    </li>
                    <!-- /.list-item -->
                    <li class="list-item">
                        <a class="item-btn" href="blog/blog_home.php">投稿</a>
                    </li>
                    <!-- /.list-item -->
                    <li class="list-item">
                        <a class="item-btn" href="../mypage.php">マイページ</a>
                    </li>
                    <!-- /.list-item -->
                </ul>
                <!-- /.nav-list -->
            </nav>
            <!-- /.header-nav -->
        </div>
        <!-- /.header-inner -->
    </header>
    <!-- /.header -->
    <h2>ブログ一覧</h2>
    <p><a href="./blog_form.html">新規作成</a></p>
    <table>
        <tr>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>投稿日時</th>
        </tr>
        <?php foreach ($blogData as $column) : ?>
            <tr>
                <td><?php echo h($column['title']) ?></td>
                <td><?php echo h($blog->setCategoryName($column['category'])) ?></td>
                <td><?php echo h($column['post_at']) ?></td>
                <td><a href="./detail.php?id=<?php echo $column['id'] ?> ">詳細</a></td>
                <td><a href="./update_form.php?id=<?php echo $column['id'] ?> ">編集</a></td>
                <td><a href="./blog_delete.php?id=<?php echo $column['id'] ?> ">削除</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>