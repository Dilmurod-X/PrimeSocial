<?php

/**
* @package     Prime Social
* @link        http://primesocial.ru
* @copyright   Copyright (C) 2016 Prime Social
* @author      BoB | http://primesocial.ru/about
*/


function type ($type) {
    
    if ($type == 1) {
        
        $whitelist = array('.jpg', '.jpeg', '.png', '.gif', '.bmp', '.JPG');
        
    } elseif ($type == 2) {
        
        $whitelist = array('.avi', '.wmv', '.mov', '.mkv', '.3gp', '.flv', '.mp4');
        
    } elseif ($type == 3) {
        
        $whitelist = array('.mp3', '.wma', '.flac', '.aac', '.mmf', '.amr', '.m4a', '.m4r', '.ogg', '.mp2', '.wav');
        
    } elseif ($type == 4) {
        
        $whitelist = array('.jar');
        
    } elseif ($type == 5) {
        
        $whitelist = array('.apk');
        
    } elseif ($type == 6) {
        
        $whitelist = array('.zip', '.rar');
        
    } elseif ($type == 7) {
        
        $whitelist = array('.ipa');
        
    } elseif ($type == 8) {
        
        $whitelist = array('.rar');
        
    } elseif ($type == 9) {
        
        $whitelist = array('.swf');
        
    } elseif ($type == 10) {
        
        $whitelist = array('.thm', '.nth', '.sis');
        
    } elseif ($type == 11) {
        
        $whitelist = array('.sis', '.sisx', '.zip', '.rar');
        
    }
    
    return $whitelist;
    
}

function type_view ($type) {
    
    if ($type == 1) {
        
        $whitelist = 'jpg, png, gif, bmp';
        
    } elseif ($type == 2) {
        
        $whitelist = 'avi, wmv, mov, mkv, 3gp, flv, mp4';
        
    } elseif ($type == 3) {
        
        $whitelist = 'mp3, wma, flac, aac, mmf, amr, amr, m4a, m4r, ogg, mp2, wav';
        
    } elseif ($type == 4) {
        
        $whitelist = 'jar';
        
    } elseif ($type == 5) {
        
        $whitelist = 'apk';
        
    } elseif ($type == 6) {
        
        $whitelist = 'zip, rar';
        
    } elseif ($type == 7) {
        
        $whitelist = 'ipa';
        
    } elseif ($type == 8) {
        
        $whitelist = 'rar';
        
    } elseif ($type == 9) {
        
        $whitelist = 'swf';
        
    } elseif ($type == 10) {
        
        $whitelist = 'thm, nth, sis';
        
    } elseif ($type == 11) {
        
        $whitelist = 'sis, sisx, zip, rar';
        
    }
    
    return $whitelist;
    
}


function translit($str) 
{
    $tr = array(
        "�"=>"A","�"=>"B","�"=>"V","�"=>"G",
        "�"=>"D","�"=>"E","�"=>"J","�"=>"Z","�"=>"I",
        "�"=>"Y","�"=>"K","�"=>"L","�"=>"M","�"=>"N",
        "�"=>"O","�"=>"P","�"=>"R","�"=>"S","�"=>"T",
        "�"=>"U","�"=>"F","�"=>"H","�"=>"TS","�"=>"CH",
        "�"=>"SH","�"=>"SCH","�"=>"","�"=>"YI","�"=>"",
        "�"=>"E","�"=>"YU","�"=>"YA","�"=>"a","�"=>"b",
        "�"=>"v","�"=>"g","�"=>"d","�"=>"e","�"=>"j",
        "�"=>"z","�"=>"i","�"=>"y","�"=>"k","�"=>"l",
        "�"=>"m","�"=>"n","�"=>"o","�"=>"p","�"=>"r",
        "�"=>"s","�"=>"t","�"=>"u","�"=>"f","�"=>"h",
        "�"=>"ts","�"=>"ch","�"=>"sh","�"=>"sch","�"=>"y",
        "�"=>"yi","�"=>"'","�"=>"e","�"=>"yu","�"=>"ya",
   "."=>"_"," "=>"_","?"=>"_","/"=>"_","\\"=>"_",
   "*"=>"_",":"=>"_","*"=>"_","\""=>"_","<"=>"_",
   ">"=>"_","|"=>"_"
    );
    return strtr($str,$tr);
}
?>