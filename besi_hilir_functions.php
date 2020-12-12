<?php
function getAllRecordsCount($connect, $query_param=''){    
    $query="SELECT count(*)as total FROM `besi_hilir` where 1=1 $query_param";
    $execute = $connect->query($query);
    $row=$execute->fetch_row();
    return $row[0];
}
 
function getAllRecordsArray($connect, $start, $limit, $order_col, $dir, $query_param=''){
     
    $query="SELECT * FROM `besi_hilir` where 1=1 $query_param order by $order_col $dir limit $start, $limit";
    $execute = $connect->query($query);
     
    $result = array();
    while($row = $execute->fetch_assoc()) {
        $result[] = $row;
    }
     
    return $result;
}



?>