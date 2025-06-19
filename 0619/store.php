<?php

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
};

$input=$_GET;
$input['rank']='A';

// echo dd($input);
echo json_encode($input);