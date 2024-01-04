<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/> -->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-1.11.3.min.js"></script>

    <?php
    if (isset($this->js))
    {
        foreach ($this->js as $js)
        {
            echo ' <script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }

    }
    ?>
</head>
<body>
<div id="content">
