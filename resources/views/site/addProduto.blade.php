@extends('site.layout.layout')
@section('content')
        <div class="container bg-black" style="height: 750px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">

                            <form enctype="multipart/form-data" action="" enctype method="post">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Product's name</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" class="form-control form-control-lg" id="" name="name" placeholder="Write the product's name"/>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Price</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="price" id="" placeholder="Write the price of product" class="form-control form-control-lg"/>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Description</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" type="text" name="description" placeholder="Write a brief description"/>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Image</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" type="file" name="Image" id="image" name='MAX_FILE_SIZE' value='5242880' />
                                        <div class="small text-muted mt-2">Product's Image
                                        </div>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Save Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
