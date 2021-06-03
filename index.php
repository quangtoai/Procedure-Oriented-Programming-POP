<?php
require 'config.php';
require 'libs/query.php';
$connect = mysqli_connect('localhost', 'root', '', 'tin_tuc') or die('khong the ket noi database');
mysqli_set_charset($connect, 'utf8');
session_start();
?>
<?php
require 'layout/header.php';
?>

    <main class="container">
        <?php
        $module = isset($_GET['m']) ? $_GET['m'] : 'post';
        $action = isset($_GET['a']) ? $_GET['a'] : 'list';
        if (isset($module) && isset($action)) {
            $file = 'module/' . $module . '/' . $action . '.php';
            if (!file_exists($file)) {
                $file = 'layout/page/' . $action . '.php';
                if (!file_exists($file)) {
                    echo 'sai module hoac sai dương dan';
                    return;
                }

            }
            require "$file";
        }
        ?>
    </main>
<?php
require "layout/fooder.php";
?>