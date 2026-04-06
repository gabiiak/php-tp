<?php 
    $Productos = array(
        0 => array(
            "nombre" => "hola",
            "codigo" => 1234,
            "precio" => 1000,
            "cantidad" => 3,
            "medioPago" => "transferencia",
            "descuento" => "NO",
            "total" => 2700
        ),
        1 => array(
            "nombre" => "adios",
            "codigo" => 7852,
            "precio" => 9000,
            "cantidad" => 3,
            "medioPago" => "transferencia",
            "descuento" => "NO",
            "total" => 90020
        ),
        2 => array(
            "nombre" => "aña",
            "codigo" => 389,
            "precio" => 200,
            "cantidad" => 2,
            "medioPago" => "tarjeta",
            "descuento" => "NO",
            "total" => 400
        ),
        3 => array(
            "nombre" => "owo",
            "codigo" => 123,
            "precio" => 9000,
            "cantidad" => 2,
            "medioPago" => "tarjeta",
            "descuento" => "NO",
            "total" => 18000
        )
    ); 

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
                <tr>
                    <td>1</td>
                    <td>Auriculares Bluetooth</td>
                    <td>#1234</td>
                    <td>$1000</td>
                    <td>3</td>
                    <td>Efectivo</td>
                    <td class="table-success text-center fw-bold">SI</td>
                    <td>$2700</td>
                </tr>
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
                            <h3 class="fw-bold text-primary mb-0">Auriculares Bluetooth</h3>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary border border-primary">3 unidades</span>
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
                            <h3 class="fw-bold text-success mb-0">$2,700.00</h3>
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