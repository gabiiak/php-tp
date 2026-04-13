<?php 
    $Productos = array(
        0 => array(
            "nombre" => "Mouse Logitech G305",
            "codigo" => 2001,
            "precio" => 15000,
            "cantidad" => 3,
            "medioPago" => "transferencia"
        ),
        1 => array(
            "nombre" => "Teclado Redragon K552",
            "codigo" => 2002,
            "precio" => 22000,
            "cantidad" => 2,
            "medioPago" => "transferencia"
        ),
        2 => array(
            "nombre" => "Monitor Samsung 24\"",
            "codigo" => 2003,
            "precio" => 120000,
            "cantidad" => 1,
            "medioPago" => "tarjeta"
        ),
        3 => array(
            "nombre" => "Auriculares HyperX Cloud II",
            "codigo" => 2004,
            "precio" => 45000,
            "cantidad" => 6,
            "medioPago" => "efectivo"
        ),
        4 => array(
            "nombre" => "Celular Samsung Galaxy A54",
            "codigo" => 2005,
            "precio" => 280000,
            "cantidad" => 1,
            "medioPago" => "efectivo"
        ),
        5 => array(
            "nombre" => "Smart TV LG 43\"",
            "codigo" => 2006,
            "precio" => 350000,
            "cantidad" => 1,
            "medioPago" => "tarjeta"
        ),
        6 => array(
            "nombre" => "Webcam Logitech C920",
            "codigo" => 2007,
            "precio" => 38000,
            "cantidad" => 3,
            "medioPago" => "efectivo"
        ),
        7 => array(
            "nombre" => "Parlante JBL Flip 6",
            "codigo" => 2008,
            "precio" => 60000,
            "cantidad" => 2,
            "medioPago" => "tarjeta"
        ),
        8 => array(
            "nombre" => "Notebook Lenovo IdeaPad",
            "codigo" => 2009,
            "precio" => 520000,
            "cantidad" => 1,
            "medioPago" => "transferencia"
        ),
        9 => array(
            "nombre" => "Pendrive Kingston 64GB",
            "codigo" => 2010,
            "precio" => 8000,
            "cantidad" => 5,
            "medioPago" => "efectivo"
        )
    );
    $cant = count($Productos); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Bootstrap</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.27.1/dist/themes/foundation/bootstrap-table-foundation.min.css">
</head>
<body>

<div class="container mt-5">
    
    <h2 class="mb-3 text-primary">Gestión de Ventas</h2>

    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Nota importante:</strong> Los cambios realizados en esta tabla se guardarán automáticamente en el servidor.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="table-responsive mb-5">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Código</th>
                    <th>Precio unitario</th>
                    <th>Cantidad</th>
                    <th>Medio de pago</th>
                    <th>¿Corresponde descuento? <span class="badge bg-warning text-dark">10% Off</span></th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $cant; $i++){ ?>
                <tr>
                    <td><?php echo $i + 1?></td>
                    <td><?php echo $Productos[$i]["nombre"]?></td>
                    <td><?php echo $Productos[$i]["codigo"]?></td>
                    <td>$<?php echo $Productos[$i]["precio"]?></td>
                    <td><?php echo $Productos[$i]["cantidad"]?></td>
                    <td><?php echo $Productos[$i]["medioPago"]?></td>
                    <td class="table-<?php 
                        
                        if ($Productos[$i]["medioPago"] == "efectivo"){
                            echo $color = "success"; 
                        }else{
                            echo $color ="danger";
                        }
                    
                    ?> text-center fw-bold">
                        <?php
                            if ($Productos[$i]["medioPago"] == "efectivo"){
                                echo "SI";
                            } else {
                                echo "NO";
                            }
                            
                        ?>
                    </td>
                    <td>
                        <?php 
                            $total = $Productos[$i]["cantidad"] * $Productos[$i]["precio"];
                            $Productos[$i]["total"] = $total;
                            $descuento = $total * 0.10;
                            if ($Productos[$i]["medioPago"] == "efectivo"){
                                $total = $total - $descuento;
                            }
                            echo $Productos[$i]["total"];
                        ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div> <hr> <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card border-primary shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <span class="fs-1">🏆</span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title text-muted mb-1">Producto más vendido</h5>
                            <h3 class="fw-bold text-primary mb-0">
                                <?php
                                    $aux = 0; 
                                    for ($i = 0; $i < $cant; $i++){
                                        if ($Productos[$i]["cantidad"] > $aux){
                                            $aux = $Productos[$i]["cantidad"];
                                            $vendido = $Productos[$i]["nombre"];
                                        } 
                                    }
                                    echo $vendido; 
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary border border-primary"> unidades vendidas: 
                            <?php 
                                echo $aux;
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card border-success shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <span class="fs-1">💰</span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title text-muted mb-1">Total Acumulado</h5>
                            <h3 class="fw-bold text-success mb-0">$
                                <?php 
                                    $totalAcumulado = 0;
                                    for ($i = 0; $i < $cant; $i++){
                                        $totalAcumulado += $Productos[$i]["total"];
                                    }
                                    echo $totalAcumulado;
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="mt-3">
                        <small class="text-muted">Actualizado ahora mismo</small>
                    </div>
                </div>
            </div>
        </div>
    </div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>