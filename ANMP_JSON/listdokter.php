<?php
$data = array(
    array("idDokter"=>"JkO10", "name"=>"Dr. Midoriya", "specialist"=>"Gigi", "photo"=>"https://png.pngtree.com/png-clipart/20211226/original/pngtree-cute-chibi-male-doctor-cartoon-png-image_6979229.png", "open"=>'07:00:00', "close"=>"15:00:00", "rating"=>4.0, "description"=>"Doctor Gigi Specialist Gigi"),
    array("idDokter"=>"KJku1", "name"=>"Dr. Todoroki", "specialist"=>"Tulang", "photo"=>"https://www.pngitem.com/pimgs/m/512-5121238_doctor-logo-cliparthot-of-the-more-and-animasi.png", "open"=>"08:00:00", "close"=>"14:00:00", "rating"=>4.5, "description"=>"Doctor Tulang Specialist Tulang"),
    array("idDokter"=>"PKOQ1", "name"=>"Dr. Luffy", "specialist"=>"Saraf", "photo"=>"https://cdn.pixabay.com/photo/2017/01/31/22/32/doctor-2027768_960_720.png", "open"=>"10:00:00", "close"=>"20:00:00", "rating"=>3.9, "description"=>"Doctor Saraf Specialist Saraf"),
    array("idDokter"=>"kPsnO", "name"=>"Dr. Saitama", "specialist"=>"Umum", "photo"=>"https://e7.pngegg.com/pngimages/852/108/png-clipart-cartoon-drawing-baby-doctor-child-food.png", "open"=>"09:00:00", "close"=>"21:00:00", "rating"=>4.7, "description"=>"Doctor Umum"),
    array("idDokter"=>"jnKOA", "name"=>"Dr. Meliodas", "specialist"=>"Kandungan", "photo"=>"https://i.pinimg.com/736x/37/bf/b6/37bfb6c94a15e7b76122bf44e6c761c8.jpg", "open"=>"07:00:00", "close"=>"20:00:00", "rating"=>4.8, "description"=>"Doctor Specialist Kandungan"),
    array("idDokter"=>"Jo1B1", "name"=>"Dr. Ban", "specialist"=>"Kulit", "photo"=>"https://www.rsiayasira.co.id/upload/doctor/1734865295116221.jpg", "open"=>"10:00:00", "close"=>"19:00:00", "rating"=>4.0, "description"=>"Doctor Specialist Kulit"),
    array("idDokter"=>"klmap", "name"=>"Dr. Elaine", "specialist"=>"THT", "photo"=>"https://w7.pngwing.com/pngs/327/702/png-transparent-cartoon-physician-drawing-cartoon-female-doctor-cartoon-character-child-people.png", "open"=>"07:00:00", "close"=>"20:00:00", "rating"=>4.9, "description"=>"Doctor Specialit Telinga (THT)"),
    array("idDokter"=>"ioS09", "name"=>"Dr. Elizabeth", "specialist"=>"Jiwa", "photo"=>"https://img.lovepik.com/free-png/20210926/lovepik-cartoon-doctor-png-image_401469911_wh1200.png", "open"=>"14:00:00", "close"=>"19:00:00", "rating"=>5.0, "description"=>"Doctor Specialist Jiwa"),
    array("idDokter"=>"jknA2", "name"=>"Dr. Sakura", "specialist"=>"Anak", "photo"=>"https://st3.depositphotos.com/3428903/34565/v/600/depositphotos_345653192-stock-illustration-cartoon-kid-doctor-character-character.jpg", "open"=>"09:00:00", "close"=>"17:00:00", "rating"=>3.5, "description"=>"Doctor Anak"),
    array("idDokter"=>"loAD1", "name"=>"Dr. Senku", "specialist"=>"Mata", "photo"=>"https://web.rscktzuchi.co.id/property/assets/data-img/DOKTER_ICON_CEWE.jpg", "open"=>"08:00:00", "close"=>"21:00:00", "rating"=>5.0, "description"=>"Doctor Mata")
    );
    $datafix = "";
    if(isset($_GET['idDokter'])){
        foreach($data as $key => $value){
        	if($value['idDokter'] == $_GET['idDokter']){
            	$datafix = $value;
            }
        }
        echo json_encode($datafix);
    }else{
        echo json_encode($data);
    }
    
?>