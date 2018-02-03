<?php
session_start();
session_destroy();
header("Location: samplepage.php");
exit();
?>