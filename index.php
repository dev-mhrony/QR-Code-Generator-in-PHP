<?php
require_once 'phpqrcode/qrlib.php';
$path = 'images/';
$qrcode = $path.time().".png";
$qrimage = time().".png";
$qrtext = "https://sites.google.com/view/alit-bd";

QRcode :: png($qrtext, $qrcode, 'H', 4, 4);
echo "<img src='".$qrcode."'>";