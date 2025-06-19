<?php
$dsn="mysql:host=localhost;dbname=store;charset=utf8";
$pdo=new PDO($dsn,'root','');
$sql="select * from items";
$row=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$data=[
    [
    'id'=>'1',
    'name'=>'amy',
    'mobile'=>'0911'
    ],
    [
    'id'=>'2',
    'name'=>'bob',
    'mobile'=>'0922'
    ],
    [
    'id'=>'3',
    'name'=>'cat',
    'mobile'=>'0933'
    ],
];

function dd($row){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
};

// echo dd($row);
echo json_encode($row);