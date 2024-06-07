<?php
    session_start();
    if (!isset($_SESSION["counter"]))// 如果 session 中的 counter 變數不存在
        $_SESSION["counter"]=1;// 將 counter 設置為 1
    else
        $_SESSION["counter"]++;// 否則增加 counter 的值

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>

<!--簡單計算網頁的訪問次數>
