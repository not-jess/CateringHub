<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    </header>
    <main>
        <div class="container-fluid pt-3">
            <h1 class="text-center catering-hub-color">Dapur Pangeran</h1>
            <hr class="w-50 mx-auto">
            <h4 class="text-center">Choose a <span class="catering-hub-color">Dish</span></h4>
        </div>
        <div class="container w-50 mt-2">
            <div id="filters" class="btn-group d-flex justify-content-center">
                <span class="me-3">
                    <i class="bi bi-funnel-fill catering-hub-color" style="font-size: 2em"></i>
                </span>
                <button type="button" class="btn btn-light border rounded-circle me-2" style="max-height:5em">
                    <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                        style="height: 0.7em; width: 0.7em;">
                    Halal
                </button>
                <button type="button" class="btn btn-light border rounded-circle me-2">
                    Rp. 0 - Rp. 50.000
                </button>
                <button type="button" class="btn btn-light border rounded-circle me-2">
                    Rp. 50.000 - Rp. 300.000
                </button>
            </div>
        </div>
        <div class="container-fluid mt-3 overflow-hidden">
            <h3 class="text-center strong">
                Menu Kanjeng
            </h3>
            <div
                class="row row-cols-2 row-cols-md-3 px-1 px-md-5 py-2 py-md-3 g-2 g-md-5 d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu1.jpg" class="card-img-top" alt="Kanjeng 1" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Kanjeng 1</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 35.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1340
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu1.jpg" class="card-img-top" alt="Kanjeng 2" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Kanjeng 2</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 35.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1140
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu1.jpg" class="card-img-top" alt="Kanjeng 3" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Kanjeng 3</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 39.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1190
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu1.jpg" class="card-img-top" alt="Kanjeng 4" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Kanjeng 4</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 39.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1090
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu1.jpg" class="card-img-top" alt="Kanjeng 5" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Kanjeng 5</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 42.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1290
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 overflow-hidden">
            <h3 class="text-center strong">
                Menu Ningrat
            </h3>
            <div
                class="row row-cols-2 row-cols-md-3 px-1 px-md-5 py-2 py-md-3 g-2 g-md-5 d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu2.jpg" class="card-img-top" alt="Ningrat 1" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Ningrat 1</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 53.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1590
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu2.jpg" class="card-img-top" alt="Ningrat 2" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Ningrat 2</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 53.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1740
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 overflow-hidden">
            <h3 class="text-center strong">
                Menu Nusantara
            </h3>
            <div
                class="row row-cols-2 row-cols-md-3 px-1 px-md-5 py-2 py-md-3 g-2 g-md-5 d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu3.jpg" class="card-img-top" alt="Nasi Kuning Manado" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Nasi Kuning Manado</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 38.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1130
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu3.jpg" class="card-img-top" alt="Nasi Gudeg Yogya" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Nasi Gudeg Yogya</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 38.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1140
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="menu-desc" class="text-decoration-none text-dark">
                            <img src="../assets/images/imgmenu3.jpg" class="card-img-top" alt="Nasi Bali" />
                        </a>
                        <div class="card-body bg-light">
                            <h5 class="card-title fs-5">Nasi Bali</h5>
                            <p class="float-start">
                                <span class="h6"><i class="bi bi-star-fill" style="color:yellow"> </i>5</span>
                                <br>
                                <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                    style="height: 0.8em; width: 0.8em;">
                                <span class="h6">Halal</span>
                                <br>
                                <span class="h5 catering-hub-color fw-bold">Rp. 38.000</span>
                            </p>
                            <p class="float-end">
                                <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1130
                                    kkal</span>
                                <br>
                                <br>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                                    class="btn border rounded-pill text-light catering-hub-bg-color">
                                    Add to Cart
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="cart" class="text-decoration-none align-items-center">
            <div id="cart"
                class="py-1 px-4 bg-info border border-2 d-flex justify-content-center align-items-center rounded-circle">
                <i class="bi bi-cart4 text-light" style="font-size:3.6em"></i>
            </div>
        </a>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="cart">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add to Cart</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <!-- input quantity -->
                            <div class="input-group mb-3">
                                <span class="input-group-text catering-hub-bg-color text-light">Quantity</span>
                                <input type="number" class="form-control" value="1" min="1" max="10">
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn catering-hub-bg-color text-light">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-auto">
        <div class="container-fluid catering-hub-bg-color text-body text-center p-3 border-top mt-3">
            <p class="fs-6">© 2024 CateringHub. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
