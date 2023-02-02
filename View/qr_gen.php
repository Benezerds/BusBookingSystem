<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/phpqrcode.qrlib.php";

    include ($path);
    $param = $_GET['id'];
    ob_start("callback");
    $codeText = $param;
    $debugLog = ob_get_contents();
    ob_end_clean();
    QRcode::png($codeText);
  ?>
