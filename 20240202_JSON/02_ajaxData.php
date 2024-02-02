<?php
$mobileArr = [
    [
        'id' => 1,
        'name' => "iphone10",
        'price' => 10000,
        'location' => ["台北"]
    ],
    [
        "id" => 2,
        "name" => "iphone11",
        "price" => 20000,
        "location" => ["台北", "台中"],
    ],
    [
        'id' => 3,
        'name' => "iphone12",
        'price' => 30000,
        'location' => ["高雄"],
    ],
    [
        'id' => 4,
        'name' => "iphone13",
        'price' => 40000,
        'location' => ["台北", "台中", "高雄"],
    ]
];
// 設定 header 為 JSON，通知接收端這是一個 JSON 格式的內容
header('Content-Type: application/json');

// // 將陣列轉換為 JSON 格式並輸出
echo json_encode($mobileArr);
