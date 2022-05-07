<?php
if (isset($_GET['url']) && !empty($_GET['url'])) {
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=" . $_GET['url']);
    @readfile($_GET['url']);
}