<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    </header>
    <main>
        <div class="container d-flex justify-content-center pt-2">
            <div id="DropDownLocation" class="dropdown">
                <button type="button" class="btn dropdown-toggle fs-5 fw-bold" data-bs-toggle="dropdown">
                    <i class="bi bi-geo-alt-fill catering-hub-color"></i>
                    <span id="Kecamatan">Cilandak</span><span>, </span>
                    <span id="Kota">Jakarta Selatan</span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Select location using Google Maps <i class="bi bi-geo-alt-fill"></i>
                        </a>
                    </li>
                </ul>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%20City%2C%20New%20York%2C%20USA!5e0!3m2!1sde!2sde!4v1573800931555!5m2!1sde!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-1">
            <form id="search" class="d-flex justify-content-center">
                <input class="form-control me-2 w-50" type="text" placeholder="Search restaurant, dishes" />
                <button id="searchbtn" class="btn btn-light me-2" type="button">
                    <i class="bi bi-search"></i>
                </button>
                <div id="DropDownFilter" class="dropdown">
                    <button id="filter" type="button" class="btn btn-light me-2" data-bs-toggle="dropdown">
                        <i class="bi bi-filter"></i>
                    </button>
                    <div class="dropdown-menu">
                        <button class="dropdown-item" type="button" onclick="filterFunction('FourStarsUpFilter')"><i
                                class="bi bi-star-fill" style="color:yellow"></i> (4+)</button>
                        <button class="dropdown-item" type="button" onclick="filterFunction('Halal')">
                            <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid"
                                style="height: 0.7em; width: 0.7em;">
                            Halal
                        </button>
                    </div>
                </div>
                <button id="heart" class="btn btn-light" type="button">
                    <i class="bi bi-heart-fill" style="color:red"></i>
                </button>
            </form>
        </div>
        <div class="container-fluid mt-2  overflow-hidden">
            <div class="row row-cols-2 row-cols-md-5 row-cols-xxl-6 px-1 px-md-5 py-2 py-md-3 g-2 g-md-5">
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest1.jpeg" class="card-img-top" alt="Medina Catering" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Medina Catering</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">2.5 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest2.jpg" class="card-img-top" alt="Gorry Gourmet" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Gorry Gourmet</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 4.8</span>
                                <span id="distance" class="float-end h6">1.0 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest3.jpg" class="card-img-top " alt="Dapur Babah Elite" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Dapur Babah Elite</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 4.7</span>
                                <span id="distance" class="float-end h6">2.5 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest4.jpg" class="card-img-top" alt="Dapur Pangeran" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Dapur Pangeran</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">1.2 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest5.jpg" class="card-img-top" alt="Mustafa Catering" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Mustafa Catering</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">3 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest6.jpeg" class="card-img-top" alt="Thyme Diner" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Thyme Diner</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">1.7 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest1.jpeg" class="card-img-top" alt="Medina Catering" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Medina Catering</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">2.5 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest2.jpg" class="card-img-top" alt="Gorry Gourmet" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Gorry Gourmet</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 4.8</span>
                                <span id="distance" class="float-end h6">1.0 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest3.jpg" class="card-img-top " alt="Dapur Babah Elite" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Dapur Babah Elite</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 4.7</span>
                                <span id="distance" class="float-end h6">2.5 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest4.jpg" class="card-img-top" alt="Dapur Pangeran" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Dapur Pangeran</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">1.2 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest5.jpg" class="card-img-top" alt="Mustafa Catering" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Mustafa Catering</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">3 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest6.jpeg" class="card-img-top" alt="Thyme Diner" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Thyme Diner</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">1.7 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest1.jpeg" class="card-img-top" alt="Medina Catering" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Medina Catering</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 5</span>
                                <span id="distance" class="float-end h6">2.5 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest2.jpg" class="card-img-top" alt="Gorry Gourmet" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Gorry Gourmet</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 4.8</span>
                                <span id="distance" class="float-end h6">1.0 km</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="menu" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="../assets/images/imgrest3.jpg" class="card-img-top " alt="Dapur Babah Elite" />
                            <div class="card-body bg-light">
                                <h5 class="card-title fs-5">Dapur Babah Elite</h5>
                                <span id="rating" class="float-start h6"><i class="bi bi-star-fill"
                                        style="color:yellow"></i> 4.7</span>
                                <span id="distance" class="float-end h6">2.5 km</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
        <a href="cart" class="text-decoration-none align-items-center">
            <div id="cart"
                class="py-1 px-4 bg-info border border-2 d-flex justify-content-center align-items-center rounded-circle">
                <i class="bi bi-cart4 text-light" style="font-size:3.6em"></i>
            </div>
        </a>
    </main>
    <footer class="mt-auto">
        <div class="container-fluid catering-hub-bg-color text-body text-center p-3 border-top fw-bold mt-3">
            <p class="fs-6">© 2024 CateringHub. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
