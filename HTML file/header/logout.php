<?php
session_start();
session_destroy();
header("Location: /webKomik/ranya-comic-web/Index.php");
exit();