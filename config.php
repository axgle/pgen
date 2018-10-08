<?php
//
namespace pgen;


function av($index=null){
    if($index===null) return $_SERVER['argv'];
    return  $_SERVER['argv'][$index];
}

function ac(){
    return $_SERVER['argc'];
}


