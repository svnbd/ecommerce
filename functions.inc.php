<?php
function pr($arr){
    echo '<pre>';
    print_r($arr);
  }
function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
  }
function get_safe_value($conn,$data){
    if($data!=''){
      $data = trim(htmlentities($data));
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return mysqli_real_escape_string($conn,$data);
    }
  }

function get_product($conn,$limit='',$cat_id='',$product_id=''){
    $sql="select product.*,categories.categories from product,categories where product.status=1 ";
    if($cat_id!=''){
      $sql.=" and product.categories_id=$cat_id ";
    }
    if($product_id!=''){
      $sql.=" and product.id=$product_id ";
    }
    $sql.=" and product.categories_id=categories.id ";
    $sql.=" order by product.id desc";
    if($limit!=''){
      $sql.=" limit $limit";
    }

    $res=mysqli_query($conn,$sql);
    $dataArr=array();
    while($row=mysqli_fetch_assoc($res)){
      $dataArr[]=$row;
    }
    return $dataArr;
  }

?>
