
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
             // 執行 SQL 查詢
        if (!mysqli_query($conn, $sql)){
            // 如果執行查詢時出現錯誤，顯示錯誤消息
            echo "新增命令錯誤";
        }
        else{
            // 如果成功執行查詢，顯示成功消息，並在 3 秒後重定向
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>

