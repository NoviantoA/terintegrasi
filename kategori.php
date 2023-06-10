<?php
require_once "method.php";
$kategori = new kategori();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'POST':
        if(!empty($_GET["CatNames"]))
        {
            $id=intval($_GET["CatNames"]);
            $kategori->update_kategori($id);
        }
        else
        {
            $kategori->insert_kategori();
        }		
        break; 
    break;
    case 'GET':
        if(!empty($_GET["id"]))
        {
            $id=intval($_GET["id"]);
            $kategori->get_datakategori($id);
        }
        else
        {
            $kategori->get_allkategori();    
        }                                                                      
        break;

}
?>