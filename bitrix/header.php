<?php
include "php_interface/init.php";
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <aside>
        <?include $_SERVER["DOCUMENT_ROOT"]."/includes/aside.php";?>
    </aside>
    <section class="main">
        <header>
            <a class="back-link" href="javascript:void(0)">
                <span class="hidden-mobile">BACK</span>
            </a>
            <div class="search-by-id">
                <form>
                    <input placeholder="Go to case ID#" type="text"><input type="submit" value="">
                </form>
            </div>
            <a class="kpi-link" href="javascript:void(0)">
                <span class="hidden-tablet">Fulfillment </span><span class="hidden-mobile">KPIs</span>
            </a>
            <div class="personal-link">
                leo@truecare24.com
            </div>
        </header>
        <main>
            <div class="content-wrapper">
                <div class="header">
                    <?=$title?>
                </div>
                <div class="content">