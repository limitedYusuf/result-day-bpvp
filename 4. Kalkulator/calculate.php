<?php
if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $result = eval("return $data;");
    echo number_format($result, 0, '.', '.');
}
?>