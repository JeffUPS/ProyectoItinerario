<?php
session_start();
$arreglo = $_SESSION['CARRITO'];
for($i=0;$i<count($arreglo);$i++){
    if($arreglo[$i]['Id']==$_POST['id']){
        $arregloNuevo[]=array(
            'Id'=>$arreglo[$i]['Id'],
            'Nombre'=>$arreglo[$i]['Nombre'],
            'Precio'=>$arreglo[$i]['Precio'],
            'Imagen'=>$arreglo[$i]['Imagen'],
            'Cantidad'=>$arreglo[$i]['Cantidad']
        );
    }
}
if(isset($arregloNuevo)){
    $_SESSION['CARRITO']=$arregloNuevo;
}else{
    //quiere decir que el registro a eliminar era el unico que habia
    unset($_SESSION['CARRITO']);
}
echo "LISTO";
?>