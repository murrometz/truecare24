<?php
$arMenu = [
    "main-link" => "/",
    "dash-link" => "/dashboard/",
    "faq-link" => "/faq/",
    "settings-link" => "/settings/",
    "signout-link" => "/signout/"
];

foreach($arMenu as $class => $link)
{
    $menuActive = $curPath == $link;
    ?>
    <a class="<?=$class?> <?=$menuActive ? "active" : "" ?>" href="<?=$link?>"></a>
    <?php
}