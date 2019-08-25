<?php $title = 'Checkout';
    session_start();
    require_once 'connection.php';
$cart=$_SESSION['cart'] ?? [];
$total_price = !empty($cart) ?array_sum(array_column($cart,'total_price')):0;
?>
<?php require_once '_header.php'; ?>

    <main role="main">
        <div class="container">
            <br>
            <p class="text-center">Checkout</p>
            <hr>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                    </h4>
                    <?php foreach($cart as $key =>$product):?>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $product['name']?></h6>
                            </div>
                            <span class="text-muted"><?php echo $product['price']?></span>
                        </li>
                    </ul>
                    <?php endforeach;?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total BDT </span>
                        <strong><?php echo number_format($total_price,2);?></strong>
                    </li>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control " name="firstname" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" name="country" required>
                                    <option>United States</option>
                                    <option value="">Bangladesh</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>


                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>

        </div>
        <!--container.//-->
    </main>

<?php require_once '_footer.php'; ?>