<?php
function readJsonArray(){
    $temp = file_get_contents('data.json');
    return (array) json_decode($temp,true);
}
function readSomeJson($num){
    $someData = 'data.json';
    $temp = file_get_contents($someData);
    $tempArray = json_decode($temp, true);
    return $tempArray[$num];
}
function writeJason($newArray){
    $tempJson = json_encode($newArray);
    file_put_contents('data.json',$tempJson);
}
