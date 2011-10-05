<?php

$echo ="";

$echo .= '<script src="../js/jquery-1.4.4.min.js" type="text/javascript" charset="utf-8"></script>';
$echo .= '<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />';
$echo .= '<script src="../js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>';
$echo .=   '<script type="text/javascript" charset="utf-8">';
$echo .=  '$(document).ready(function(){';
    //$("a[rel^='prettyPhoto']").prettyPhoto();
$echo .=    '$("a[rel^=';
$echo .= "'prettyPhoto'";
$echo .= ']").prettyPhoto({social_tools:false})';
$echo .=   '})';
$echo .= '</script>';

echo $echo;
?>