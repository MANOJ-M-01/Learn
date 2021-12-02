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

/* pagination variable fillable */
$totalPages=10;
$hLink='/index.php?page';
$pageStyle=[
        "page-container"=>"page-box",
        "page-style"=>"pages",
        "page-active"=>"active"
    ];

/* Pagination initializing */
$Paginator=new Pagination($totalPages,$pageStyle,$hLink);
$Paginaton=$Paginator->Pages($curPage);

?>
<style>
    .page-box{
        position: absolute;
        bottom: 0;
        right: 0;
        margin:20px;
    }
    .pages{
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
    .pages:hover {
        opacity: 0.8;
    }
    .active{
        background-color: #00d7b3;
    }
</style>

<?php
/* Pagination printing */
 echo $Paginaton;