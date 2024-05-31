<?php
    session_start();
    unset($_SESSION["id"]);//取消設置會話變數 "id" 以登出使用者
    echo "登出成功....";//輸出一條訊息以表示成功登出
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";

?>





