<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 10-6 </title>
</head>

<body>
<?php
    // open file
    $fp = @fopen("km.jpg" , "rb");
    if ($fp) {
        $fpnew = @fopen("new_km.jng" , "wb");
        while ($ln = @fread ($fp , 1024)) {
            fwrite($fpnew , $ln);
        }
        @fclose($fp);
        @fclose($fpnew );
        copy( "km.jpg", "km_copy.jpg");
        echo "<h3>File Copy Finish...</h3>";
        echo "<image src='new_km.jpg' width='370' height=''>";
    }
    else {
        die ("ไม่สามารถเปิดไฟล์ km.jpg ได้ !");
    }
?>
</body>
</html>