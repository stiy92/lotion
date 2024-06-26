<?php

$item = null;
$valor = null;
$orden = "id";


if(isset($_GET["fechaInicial"])){

  $fechaInicial = $_GET["fechaInicial"];
  $fechaFinal = $_GET["fechaFinal"];

}else{

$fechaInicial = null;
$fechaFinal = null;

}

// VER SUMA TOTAL DE VENTAS POR DIA//////////////////////
$ventass = ControladorVentas::ctrSumaTotalVentasdia($fechaInicial, $fechaFinal);
///////////////////////////////////////////////////

// VER SUMA TOTAL DE GASTOS POR DIA ////////////////////////////
$gastoss = ControladorGastos::ctrSumaTotalGastosdia($fechaInicial, $fechaFinal);
//////////////////////////////////////////////////////////

// VER SUMA TOTAL CREDITO POR DIA//////////////////////
$ventascre = ControladorVentas::ctrSumaTotalVentasdiacredito($fechaInicial, $fechaFinal);
///////////////////////////////////////////////////

// VER SUMA TOTAL NEQUI POR DIA//////////////////////
$ventasneq = ControladorVentas::ctrSumaTotalVentasdianequi($fechaInicial, $fechaFinal);
///////////////////////////////////////////////////

/////////////////////////////////////////////////////////TOTALES///////////////////////////////////////////////////////////

// VER SUMA TOTAL DE VENTAS ////////////////////////////
$ventas = ControladorVentas::ctrSumaTotalVentas();
//////////////////////////////////////////////////////////

// VER SUMA TOTAL DE GASTOS ////////////////////////////
$gastos = ControladorGastos::ctrMostrarSumaGastos();
//////////////////////////////////////////////////////////

// VER SUMA TOTAL DE VENTAS CREDITOS ////////////////////////////
$creditot = ControladorVentas::ctrSumaTotalCreditos();
//////////////////////////////////////////////////////////

// VER SUMA TOTAL DE VENTAS NEQUI ////////////////////////////
$nequit = ControladorVentas::ctrSumaTotalNequi();
//////////////////////////////////////////////////////////

///////////////////////////////////////////////////////TOTALES END////////////////////////////////////////////

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>

<!-- VENTAS EFECTIVOS-->
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3>$<?php echo number_format($ventas["total"],); ?></h3>

      <p>Ventas efectivo</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<!-- GASTOS -->
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
    
    <div class="inner">
      
      <h3>$<?php echo number_format($gastos["total"],); ?></h3>

      <p>Gastos</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>


<!-- VENTAS CREDITOS -->
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
      
      <h3>$<?php echo number_format($creditot["total"],); ?></h3>

      <p>Ventas credito</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<!-- VENTAS NEQUI -->
<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-purple">
    
    <div class="inner">
      
      <h3>$<?php echo number_format($nequit["total"],); ?></h3>

      <p>Ventas Nequi</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<!-- PRODUCTOS TOTAL -->
<!-- <div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div> -->