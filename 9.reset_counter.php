<?php
    session_start();
    unset($_SESSION["counter"]);// 移除 session 中的 counter 變數
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
<!--移除變數，通常是回歸原始的網頁計算模式>
