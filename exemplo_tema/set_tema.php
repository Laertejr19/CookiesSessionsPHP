<?php
if (isset($_GET['tema']) && in_array($_GET['tema'], ['claro', 'escuro'])) {
    $tema = $_GET['tema'];
    setcookie('tema', $tema, time() + (30 * 24 * 60 * 60), "/");
}
header("Location: index.php");
exit;
?>