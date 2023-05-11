<?php
$data = array(
    array("idBooking"=>"01Ja22", "namaPasien"=>"Rem", "namaDokter"=>"Dr. Saitama", "obatYangDiminum"=>"Paracetamol - 3x Sehari&Antibiotik - 3x Sehari", "tanggalBooking"=>"01 Januari 2022"),
    array("idBooking"=>"02Ja22", "namaPasien"=>"Rem", "namaDokter"=>"Dr. Meliodas", "obatYangDiminum"=>"Bodrex - 3x Sehari&Antibiotik - 3x Sehari", "tanggalBooking"=>"02 Januari 2022"),
    array("idBooking"=>"10Ja22", "namaPasien"=>"Toni", "namaDokter"=>"Dr. Saitama", "obatYangDiminum"=>"Paracetamol - 3x sehari&Antibiotik - 3x Sehari", "tanggalBooking"=>"10 Januari 2022"),
    array("idBooking"=>"20Fe22", "namaPasien"=>"Toni", "namaDokter"=>"Dr. Meliodas", "obatYangDiminum"=>"Paracetamol - 2x Sehari&Antibiotik - 1x Sehari", "tanggalBooking"=>"20 Februari 2022"),
    array("idBooking"=>"25Ma22", "namaPasien"=>"Hendy", "namaDokter"=>"Dr. Meliodas", "obatYangDiminum"=>"Paracetamol - 3x Sehari", "tanggalBooking"=>"25 Maret 2022"),
    array("idBooking"=>"30Ap22", "namaPasien"=>"Hendy", "namaDokter"=>"Dr. Saitama", "obatYangDiminum"=>"Antibiotik - 3x Sehari", "tanggalBooking"=>"30 April 2022")
    );
    
    $datafix = [];
    $dataindividu = "";
    if(isset($_GET['namapasien'])){
        foreach($data as $key => $value){
        	if($value['namaPasien'] == $_GET['namapasien']){
            	$datafix[] = $value;
            }
        }
        echo json_encode($datafix);
    } else if(isset($_GET['idbooking'])) {
        foreach($data as $key => $value){
        	if($value['idBooking'] == $_GET['idbooking']){
            	$dataindividu = $value;
            }
        }
        echo json_encode($dataindividu);
    }else{
        echo json_encode($data);
    }
?>