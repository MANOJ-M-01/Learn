<?php

if ($_SERVER['REQUEST_METHOD'] == "GET" && $_SERVER['REQUEST_URI'] == "/server.php?GetData") {
    echo "<h1>heading</h1>";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SERVER['REQUEST_URI'] == "/server.php?PostData") {
    sleep(1);
    echo "<h1> Post heading</h1>";
    exit;
}
