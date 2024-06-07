<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";
    else
        echo "登入失敗";
?>
<!--如果帳號是輸入john跟密碼是輸入john1234的話顯示登入成功，否則就登入失敗>
