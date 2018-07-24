<?php
    ob_start();
    session_start();

    $token = fopen("token.txt", "w") or die("Problem in opening file!");

    $_SESSION['TOKEN'] = base64_encode(openssl_random_pseudo_bytes(32));
    $save_token = $_SESSION['TOKEN'].",";
    fwrite($token, $save_token);

    $session_id = session_id();
    setcookie('ssd_sid',$session_id,time()+60*60*24*365,'/');

    $save_session_id = $session_id."\n";
    fwrite($token, $save_session_id);

    fclose($token);
    echo $_SESSION['TOKEN'];
?>