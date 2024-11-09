<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    </header>
    <main>
        <form action="checkout">
            <div class="container-fluid pt-3">
                <h1 class="text-center ">Cart</h1>
                <hr class="w-50 mx-auto">
            </div>
            <div class="container-fluid mt-3 overflow-hidden">
                <h4 class="text-center">Dapur Pangeran</h4>
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
                                    <span class="h6"><i class="bi bi-fire" style="color: orangered"> </i>1340 kkal</span>
                                    <br>
                                    <br>
                                    <label for="quantity" class="h6">Quantity:</label>
                                    <input type="number" id="quantity" value="1" style="width:2em">
                                    <button type="button" class="btn btn-light border rounded-pill tags">
                                        <i class="bi bi-trash" style="color:red"></i>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout  -->
            <div class="container-fluid mt-3">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn border rounded-pill text-light catering-hub-bg-color me-2">
                        Checkout
                    </button>
                </div>
            </div>
        </form>
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
