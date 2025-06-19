<?php

$data=[
    [
        'id'=>'1',
        'name'=>'amy'
    ],
    [
        'id'=>'2',
        'name'=>'bob'
    ],
    [
        'id'=>'3',
        'name'=>'cat'
    ],
];

function dd($data){
    echo "</pre>";
    print_r($data);
    echo "</pre>";
};

// echo dd($data);

echo json_encode($data);