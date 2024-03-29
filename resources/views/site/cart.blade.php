@extends('site.layout.layout')
@section('content')
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Checkout</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <form class="card-body">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--firstName-->
                                    <div class="md-form ">
                                        <input type="text" id="firstName" class="form-control">
                                        <label for="firstName" class="">First Name</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--lastName-->
                                    <div class="md-form">
                                        <input type="text" id="lastName" class="form-control">
                                        <label for="lastName" class="">Last Name</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="email" id="email" class="form-control" placeholder="youremail@example.com">
                                <label for="email" class="">Your email (obligatory)</label>
                            </div>

                            <!--address-->
                            <div class="md-form mb-5">
                                <input type="text" id="address" class="form-control" placeholder="Saint St">
                                <label for="address" class="">Address</label>
                            </div>

                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <label for="state">State</label>
                                    <select class="custom-select d-block w-100" id="state" required>
                                        <option value="">Choose...</option>
                                        <option>SP</option>
                                        <option>RJ</option>
                                        <option>ES</option>
                                        <option>BA</option>
                                        <option>SC</option>
                                        <option>MG</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select one state.
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <label for="zip">Cep</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Write your CEP" required>
                                    <div class="invalid-feedback">
                                        Write your CEP
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <hr>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Pix</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">PayPal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Card's owner name</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">NUMBER ON THE FRONT OF CARD</small>
                                    <div class="invalid-feedback">
                                        Name's owner of card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Card's number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Card's number
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">End date.</label>
                                    <input type="date" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        End date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue the purchase</button>

                        </form>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>

                    <!-- Cart -->
                    <ul class="list-group mb-3 z-depth-1">
                        @foreach($products as $product)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $product->Name }}</h6>
                            </div>
                            <span class="text-muted" id="productValue">R$ {{ $product->Price }},00</span>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Cart -->

                    <!-- Promo code -->
                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Coupon discount" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
                            </div>
                        </div>
                    </form>
                    <!-- Promo code -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
@endsection
