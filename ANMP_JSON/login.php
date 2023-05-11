<?php
$data = array(
    array("username"=>"Hendy", "email"=>"hendy.ar@email.com", "password"=>"hendy", "photo"=>"https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/27/e06af444-2e70-4f3e-b4d1-edfd3ed21d55.jpg"),
    array("username"=>"Rem", "email"=>"rem.ar@email.com", "password"=>"rem", "photo"=>"https://www.akseleran.co.id/blog/wp-content/uploads/2022/10/download-1.png"),
    array("username"=>"Toni", "email"=>"toni.ar@email.com", "password"=>"toni", "photo"=>"https://www.shutterstock.com/image-vector/yummy-smile-emoji-tongue-lick-260nw-2122476482.jpg")
    );

$datafix = "";
if(isset($_GET['username'])){
    if(isset($_GET['password'])){
        foreach($data as $key => $value){
    	    if(($value['username'] == $_GET['username']) || ($value['email'] == $_GET['username']) && ($value['password'] == $_GET['password'])){
        	    $datafix = $value;
            }
        }
        if($datafix != ""){
            echo json_encode($datafix);   
        }
        else{
            $datafix1 = array("username"=>"fail", "email"=>"fail.ed@email.com", "password"=>"fail", "photo"=>"https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/27/e06af444-2e70-4f3e-b4d1-edfd3ed21d55.jpg");
            echo json_encode($datafix1);
        }   
    }
    else{
        $datafix1 = array("username"=>"fail", "email"=>"fail.ed@email.com", "password"=>"fail", "photo"=>"https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/27/e06af444-2e70-4f3e-b4d1-edfd3ed21d55.jpg");
        echo json_encode($datafix1);
    }
}
else{
    $datafix1 = array("username"=>"fail", "email"=>"fail.ed@email.com", "password"=>"fail", "photo"=>"https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/27/e06af444-2e70-4f3e-b4d1-edfd3ed21d55.jpg");
        echo json_encode($datafix1);
}
?>