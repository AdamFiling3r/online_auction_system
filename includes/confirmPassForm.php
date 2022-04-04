    <section class="newPageForm">
        <form class="vh-100 gradient-custom" enctype="multipart/form-data" action="includes/confirmPass.inc.php?offer_id=<?php echo($auction[0][0]) ?>" method="post">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">
                                        Bid to Auction offer
                                    </h2>
                                    <div class="form-outline form-white mb-4">
                                        <input type="integer" name="amount" class="form-control form-control-lg" />
                                        <label class="form-label" for="text">
                                            Bid
                                        </label>
                                        <input type="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="text">
                                            Confirm your password
                                        </label>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>