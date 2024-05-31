
<?php
 // 將錯誤報告設置為 0，以防止顯示錯誤消息
    error_reporting(0);
    // 開始會話以管理使用者驗證
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        // 如果用戶未登錄，顯示消息並在 3 秒後重定向到登錄頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
