<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template Sederhana dengan CodeIgniter</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Tempalyte Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'web/about' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>

        