<?php

// Обробка GET-запиту
// if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['getData'])) {
//     $getData = htmlspecialchars($_GET['getData']);
//     $getMessage = "You submitted (GET): " . $getData;
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['postData'])) {
    echo "<p>You submitted (POST): " . htmlspecialchars($_POST['postData']) . "</p>";
}

// Обробка POST-запиту
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['postData'])) {
    $postData = htmlspecialchars($_POST['postData']);
    $postMessage = "You submitted (POST): " . $postData;
}

if (isset($_POST['ajaxPostData'])) {
    $postData = htmlspecialchars($_POST['ajaxPostData']);
    echo "You submitted (POST AJAX): " . $postData;
} elseif (isset($_GET['ajaxGetData'])) {
    $getData = htmlspecialchars($_GET['ajaxGetData']);
    echo "You submitted (GET AJAX): " . $getData;
}
?>
