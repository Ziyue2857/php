
<?php
    error_reporting(0);
    session_start();
       // 如果未登入，顯示請登入帳號的訊息，並重新導向至登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
         // 執行 SQL 命令，如果執行失敗，顯示錯誤訊息，否則顯示成功訊息
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
