<?php
require 'Pagination.php';

$curPage=1;
if(isset($_GET['page'])){
    $curPage=$_GET['page'];
}

/*
* $totalPages =>total pages
* $hLink =>hyperlink address
* $pageStyle =>array containe page-style=>page link style, page-active=>active page style
* $curPage => for identifing current page
*/

$totalPages=10;
$hLink='/index.php?page';
$pageStyle=["page-style"=>"page-styles","page-active"=>"active"];

$obj=new Pagination($totalPages,$pageStyle,$hLink);
$datas=$obj->Pages($curPage);

?>

<style>
.page-styles{
    text-decoration: none;
    font-size: 12px;
    font-weight: 600;
    background-color: #2b373a;
    color: #fff; 
    width: 34px;
    height: 30px;
    border-radius: 2px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 4px;
}
.page-styles:hover {
    opacity: 0.8;
}
.active{
    background-color: #00d7b3;
}
</style>


<?php
foreach($datas as $SinglePage){
    echo $SinglePage;
}