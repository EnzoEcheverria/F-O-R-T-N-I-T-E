<?php
header('Cache-Control: no-cache');
$imgs = array(
                'block.png',
                'lake.png',
                'mega.png',
                'volcano.png',
                'neo.png'
        );
$img_id = mt_rand(0,(count($imgs)-1));
header('Location: '.$imgs[$img_id]);
?>