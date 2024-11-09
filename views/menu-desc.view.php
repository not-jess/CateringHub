<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
    </header>
    <main>
        <div class="container-fluid pt-3">
            <h1 class="text-center catering-hub-color">Dapur Pangeran</h1>
            <hr class="w-50 mx-auto">
            <h4 class="text-center">Menu Kanjeng 1</h4>
            <img src="../assets/images/imgmenu1.jpg" class="img-fluid mx-auto d-block border border-2"
                style="border-radius: 20%" alt="Kanjeng 1" />
        </div>
        <div class="container w-50 mt-2">
            <h5 class="text-center text-danger fw-bold">Rp. 35.000</h5> 
            <div class="d-flex justify-content-center">
                    <h6 class="bg-light p-2 border rounded-pill tags"><i class="bi bi-star-fill" style="color:yellow"> </i>5</h6>
                    <h6 class="bg-light p-2 border rounded-pill tags">
                        <img src="../assets/images/halal-sign.png" alt="Halal" class="img-fluid" style="height: 0.8em; width: 0.8em;">
                        Halal
                    </h6>
                    <h6 class="bg-light p-2 border rounded-pill tags"><i class="bi bi-fire" style="color: orangered"> </i>1340 kkal</h6>
            </div>
            <!-- menu description -->
            <div class="container">
                <p class="text-center">Nasi Putih, Ayam Seset Pedas, Mie Goreng, Orek Tempe, Buncis Teri Medan, Sambal Bawang, Kerupuk Udang.</p>
            </div>
            <div class="d-flex justify-content-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#myModal"
                        class="btn border rounded-pill text-light catering-hub-bg-color me-2">
                        Add to Cart
                    </button>
                    <button type="button" class="btn btn-light border rounded-pill ms-2 tags">
                        <i class="bi bi-heart-fill" style="color:red"></i>
                    </button>
            </div>
        </div>
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
