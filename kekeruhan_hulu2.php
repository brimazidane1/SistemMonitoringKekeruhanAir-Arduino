<?php
// including database connection file 
include('koneksi.php');
include('kekeruhan_hulu_functions.php');
 
 
// create table column array that match with database table column name 
$columns = array( 
    0=> 'id_kekeruhan',
    1=> 'tegangan',
    2=> 'ntu',
    3=> 'keterangan',
    4=>  'waktu'
);
     
//total rows to be display in table
$limit  = $_POST['length'];
// starting point 
$start  = $_POST['start'];
// get selected sorting column name 
$order_col  = $columns[$_POST['order'][0]['column']];
// get order direction 
$dir    = $_POST['order'][0]['dir'];
// datatable default search;
$search = $_POST['search']['value']; 
 
// Custome search field
$joinDateFrom   = $_POST['joinDateFrom'];
$joinDateTo     = $_POST['joinDateTo'];
$keterangan       = $_POST['keterangan'];
 
$query_param='';

#checking default search and creating query (exclude join date and keterangan column because they have seaprate custome filter code below)
if(!empty($search)){
    $query_param="and (`tegangan` like '%$search%' or `ntu` like '%$search%') ";
}

#checking  from, to input field "join date" and creating query
if(!empty($joinDateFrom) AND !empty($joinDateTo)){
    $query_param.="and waktu between '$joinDateFrom' and '$joinDateTo' ";
}

#checking "keterangan" field and creating query
if(!empty($keterangan)){
    $query_param.="and keterangan = '$keterangan' ";
}
 
 
// total record count 
$total_record  = getAllRecordsCount($connect);
 
// getting records
$get_records=getAllRecordsArray($connect, $start, $limit, $order_col, $dir, $query_param);
 
//get filtered count
$totalFiltered = getAllRecordsCount($connect, $query_param);
 
$data = array();
// check 
if(!empty($get_records))
{   
    // arranging records as per table column sequence
    foreach ($get_records as $record)
    {
        // match table columns with database column name 
        $nestedData[$columns[0]] = $record[$columns[0]];
        $nestedData[$columns[1]] = $record[$columns[1]];
        $nestedData[$columns[2]] = $record[$columns[2]];
        $nestedData[$columns[3]] = $record[$columns[3]];
        $nestedData[$columns[4]] = $record[$columns[4]];
         
        $data[] = $nestedData;
 
    }
}
 
$json_data = array(
    "draw"            => intval($_POST['draw']),  
    "recordsTotal"    => intval($total_record),  // total record count
    "recordsFiltered" => intval($totalFiltered), // total filtered record count
    "data"            => $data   // data in array 
    );
 
echo json_encode($json_data); // encode array to json
?>