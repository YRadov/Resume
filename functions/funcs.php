<?php
/* ===Распечатка массива=== */
function print_arr($arr)
{
    echo '<pre>';
     print_r($arr);
    echo'</pre>';
}
/* ===Распечатка массива=== */

/* ===Выбор корректной страницы и подсветка меню=== */
function getContent($content)
{
    $pages = [
        'home',
        'skills',
        'about',
        'contacts',
        'resume'
    ];

    return in_array($content,$pages);
}
/* ===Выбор корректной страницы=== */

