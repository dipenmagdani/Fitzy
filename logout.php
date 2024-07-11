<?php
session_start();
session_unset();
session_destroy();
echo "<script>
    setTimeout(function () {
        window.location.href= 'index.php?action=logout';
    }, 100);
    </script>";
