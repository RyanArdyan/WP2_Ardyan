<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- fungsi esc() adalah fungsi global yang disediakan oleh CodeIgniter untuk membantu mencegah serangan XSS -->
    <!-- cetak value variable $title yg dikirimkan Controller -->
    <h1><?= esc($title) ?></h1>