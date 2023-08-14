<body>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-nav mt-4 d-flex justify-content-center">

                        <div class=" rounded-circle px-2 py-2  bg-primary mx-1"></div>
                        <div class=" rounded-circle px-2 py-2  bg-primary  bg-opacity-50 mx-1"></div>
                        <div class=" rounded-circle px-2 py-2  bg-primary bg-opacity-50 mx-1"></div>
                        <!-- <div class="bg-success p-2 text-dark bg-opacity-50">This is 50% opacity success background</div> -->



                    </div>
                    <div class="card-title">

                    </div>
                    <div class="card-body">
                        <form>


                            <div class="container">

                                <h4 class="text-bold text-dark">Pilih Calon Presiden</h4>

                                <div class="form-group col-lg-12 ">
                                    <?php foreach ($capres as $c) {
                                    ?>
                                        <div class="radio-card">
                                            <input type="radio" id="capres" name="capres" value="<?php echo ($c->id) ?>">
                                            <label for="capres"><?php echo ($c->capres) ?></label>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="col-lg-12 d-flex justify-content-center mb-3 mt-4">
                                    <button class="btn btn-primary rounded-pill px-5 py-2"> Next</button>
                                </div>
                            </div>

                            <div class="container">

                                <h4 class="text-bold text-dark">Pilih Calon Wakil Presiden</h4>

                                <div class="form-group col-lg-12 ">
                                    <?php foreach ($cawapres as $c) {
                                    ?>
                                        <div class="radio-card">
                                            <input type="radio" id="capres" name="capres" value="<?php echo ($c->id) ?>">
                                            <label for="capres"><?php echo ($c->cawapres) ?></label>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="col-lg-12 d-flex justify-content-center mb-3 mt-4">
                                    <button class="btn btn-outline-primary rounded-pill px-5 py-2 me-3"> Back</button>

                                    <button class="btn btn-primary rounded-pill px-5 py-2"> Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    body {
        box-sizing: border-box;
        margin: 2rem auto;
        background-color: #f1f5f8;
        font-family: 'Poppins';

    }

    .card-nav {
        padding: 12px 24px;
    }

    .card {
        border-radius: 20px;
        border: none;
    }

    .form-control {
        border-radius: 20px;
    }

    .radio-card {
        border: 1px solid #0d6efd;
        padding: 12px 24px;
        border-radius: 10px;
        margin-bottom: 1rem;
    }
</style>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>