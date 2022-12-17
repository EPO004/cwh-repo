<?php 
    $flname = $_POST["flname"];
    $email = $_POST["email"];
    $note = $_POST["note"];
    $counter = 1;
    while (file_exists($counter.".txt")){
        $counter++;
    }
    $file = fopen($counter.".txt", "w");
    fwrite($file, "نام و نام خانوادگی: ".
        $flname."\n"."ایمیل: ".$email."\n"."پیام شما: ".$note);
    fclose($file);
?>
