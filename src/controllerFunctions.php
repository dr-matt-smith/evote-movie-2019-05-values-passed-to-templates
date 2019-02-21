<?php
function homeAction()
{
    $pageName = 'home';
    require_once __DIR__ . '/../templates/index.php';
}

function aboutAction()
{
    $pageName = 'about';
    require_once __DIR__ . '/../templates/about.php';
}

function contactAction()
{
    $pageName = 'contact';
    require_once __DIR__ . '/../templates/contact.php';
}

function listAction()
{
    $pageName = 'list';
    require_once __DIR__ . '/../templates/list.php';
}

function sitemapAction()
{
    $pageName = 'sitemap';
    require_once __DIR__ . '/../templates/sitemap.php';
}
