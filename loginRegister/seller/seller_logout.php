<?php
session_start();
session_destroy();
// Correct the redirection path here
header('Location: ../../index.php');
exit(); // It's good practice to call exit after a header redirection
?>
