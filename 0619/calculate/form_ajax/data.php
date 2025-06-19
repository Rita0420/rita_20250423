<?php

$data = $_GET;

// function dd($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// };

// $result = 0;
// foreach ($data as $key => $value) {
//     $inputA = $data['inputA'];
//     $math = $data['math'];
//     $inputB = $data['inputB'];
//     switch ($math) {

//         case '+':
//             $result = $inputA + $inputB;

//             break;

//         case '-':
//             $result = $inputA - $inputB;
//             break;

//         case '*':
//             $result = $inputA * $inputB;
//             break;

//         case '/':
//             $result = $inputA / $inputB;
//             break;
//         default;
//             break;
//         };
// };

// dd($result);

echo json_encode($data);