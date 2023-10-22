<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-5 g-4 ">
        <?php
            // Check if the "apartamentos" variable exists in the response
            if (isset($apartamentos)) {
                foreach ($apartamentos as $apartamento) {
                    // Extract apartment details
                    $titulo = $apartamento['Titulo'];
                    $descripcion = $apartamento['Descripcion'];
                    // You can extract other fields as needed

                    // Generate a card for each apartment
                    echo '<div class="col">
                        <div class="card h-100" style="width: 75%;">
                            <img src="imgs/logo/logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $titulo . '</h5>
                                <p class="card-text">' . $descripcion . '</p>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo '<p>No apartments available.</p>';
            }
            ?>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/apartamentos.js"></script>
</body>

</html>