<?php
session_start();
session_destroy();
header("Location: /2025_CODE/index.php");
exit();