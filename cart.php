<?php
$json = [];
 
if(!empty($_POST['kot'])){
    $mysql = mysqli_connect("localhost", "a0528183_admin", "1234567890", "a0528183_tovar");
    $result = $mysql->query("SELECT `tovar`, `money`, `id` FROM `tovar` WHERE `id` IN (" . implode(',', $_POST['kot']) . ")");
    if ($result->num_rows) {
        while ($data = mysqli_fetch_array($result)) {
            $json['products'][] = array(
              'product_id' => $data['id'],
              'product_name' => $data['tovar'],
              'product_price' => $data['money']
            );
            
        }
    }else{
        $json['empty'] = 'Товаров не найдено';
    }
}
 
 
echo json_encode($json);
?>
