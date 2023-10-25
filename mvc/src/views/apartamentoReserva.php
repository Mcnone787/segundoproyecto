<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap dd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body data-bs-theme="light">
    <?php include "nav.php" ?>
    <div class="container">
        <div class="row p-3 m-3 bg-body-secondary">
            <div class="col p-3 m-3 rounded-4 text-center bg-white imgReservaBox">
                <img class="img-thumbnail" src="imgs/logo/logo.png" alt="apartamentIMGS">
            </div>
            <div class="col p-3 m-3 rounded-4 bg-white reservabox">
                <div class="col">
                    <div class="col d-flex rounded-2 p-3 m-3 text-center" style="border: 1px black">
                        <div class="col rounded p-3">
                            <span class="fw-bold">Llegada</span>
                            <h5 class="text-dark">01/04/2023</h5>
                        </div>
                        <div class="col rounded p-3">
                            <span class="fw-bold">Salida</span>
                            <h5 class="text-dark">01/04/2023</h5>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary btn-lg" type="submit">Reservar</button>
                    </div>
                </div>
                <div class="col mt-5 p-3">
                    <div class="mb-3">
                        <span class="text-dark">Comision</span>
                        <span class="text-dark fw-bold" style="float: right;">20%</span>
                    </div>
                    <div class="mb-3">
                        <span class="text-dark">Precio por noche:</span>
                        <span class="text-dark fw-bold" style="float: right;">100€</span>
                    </div>
                    <div class="border-top mb-3">
                        <span class="text-dark">TOTAL:</span>
                        <span class="text-dark fw-bold" style="float: right;">100€</span>
                    </div>
                </div>
            </div>
            <div class="row m-auto bg-white text-dark rounded-4 infoReservaBox">
                <div class="col-6 p-3 m-3">
                    <div class="col p-3 m-2">
                        <div>
                            <span class="fw-bold">Titulo:</span>
                            <span class="text-dark">Titulo</span>
                        </div>
                        <div>
                            <span class="fw-bold">Descripcion:</span>
                            <span class="text-dark">Descripcion</span>
                        </div>
                        <div>
                            <span class="fw-bold">M2:</span>
                            <span class="text-dark"> M2</span>
                        </div>
                        <div>
                            <span class="fw-bold">Numero Habitaciones:</span>
                            <span class="text-dark"> Habitaciones</span>
                        </div>
                    </div>
                </div>
                <div class="col-5 p-3 m-3">
                    <h4>Servicios</h4>
                    <div class="d-flex justify-content-center">
                        <div class="col-2 justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z" />
                                <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                            </svg>
                        </div>
                        <div class="col-2 justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 512 512">
                                <path d="M132.7 4.7l-64 64c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9H208c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-64-64c-6.2-6.2-16.4-6.2-22.6 0zM64 128c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H64zm96 96a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM80 400c0-26.5 21.5-48 48-48h64c26.5 0 48 21.5 48 48v16c0 17.7-14.3 32-32 32H112c-17.7 0-32-14.3-32-32V400zm192 0c0-26.5 21.5-48 48-48h64c26.5 0 48 21.5 48 48v16c0 17.7-14.3 32-32 32H304c-17.7 0-32-14.3-32-32V400zm32-128a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM356.7 91.3c6.2 6.2 16.4 6.2 22.6 0l64-64c4.6-4.6 5.9-11.5 3.5-17.4S438.5 0 432 0H304c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l64 64z" />
                            </svg>
                        </div>
                        <div class="col-2 justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 640 512">
                                <path d="M624 416h-16c-26.04 0-45.8-8.42-56.09-17.9-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C461.8 407.58 442.04 416 416 416s-45.8-8.42-56.09-17.9c-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C269.8 407.58 250.04 416 224 416s-45.8-8.42-56.09-17.9c-8.9-8.21-19.66-14.1-31.77-14.1h-16.3c-12.11 0-22.87 5.89-31.77 14.1C77.8 407.58 58.04 416 32 416H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h16c38.62 0 72.72-12.19 96-31.84 23.28 19.66 57.38 31.84 96 31.84s72.72-12.19 96-31.84c23.28 19.66 57.38 31.84 96 31.84s72.72-12.19 96-31.84c23.28 19.66 57.38 31.84 96 31.84h16c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zm-400-32v-96h192v96c19.12 0 30.86-6.16 34.39-9.42 9.17-8.46 19.2-14.34 29.61-18.07V128c0-17.64 14.36-32 32-32s32 14.36 32 32v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16c0-52.94-43.06-96-96-96s-96 43.06-96 96v96H224v-96c0-17.64 14.36-32 32-32s32 14.36 32 32v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16c0-52.94-43.06-96-96-96s-96 43.06-96 96v228.5c10.41 3.73 20.44 9.62 29.61 18.07 3.53 3.27 15.27 9.43 34.39 9.43z" />
                            </svg>
                        </div>
                        <div class="col-2 justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>