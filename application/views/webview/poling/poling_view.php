<body>
    <div class="container-fluid">
        <div class=" d-flex justify-content-center">
            <div class="container-fluid col-lg-6">
                <div class="card">
                    <div class="card-nav mt-4 d-flex justify-content-center">

                        <div class="step rounded-circle px-2 py-2  mx-1"></div>
                        <div class="step rounded-circle px-2 py-2  mx-1"></div>
                        <!-- <div class="step rounded-circle px-2 py-2  mx-1"></div> -->



                    </div>
                    <div class="card-title">

                    </div>
                    <div class="card-body">
                        <form id="poll_form">
                            <input type="hidden" value="" id="id_add" name="id_add" />


                            <div class="container tab">

                                <h4 class="text-bold text-dark">Pilih Calon Presiden</h4>

                                <div class="form-group col-lg-12 ">
                                    <?php foreach ($capres as $c) {
                                    ?>
                                        <div class="radio-card">
                                            <!-- <span class="circle"></span> -->

                                            <input type="radio" id="capres" name="capres" value="<?php echo ($c->id) ?>">
                                            <label for="capres"><?php echo ($c->capres) ?></label>
                                        </div>
                                    <?php } ?>
                                </div>


                            </div>

                            <div class="container tab ">


                                <h4 class="text-bold text-dark">Pilih Calon Wakil Presiden </h4>

                                <div class="form-group col-lg-12 ">
                                    <?php foreach ($cawapres as $c) {
                                    ?>
                                        <div class="radio-card">
                                            <!-- <span class="circle"></span> -->
                                            <input type="radio" id="cawapres" name="cawapres" value="<?php echo ($c->id) ?>">
                                            <label for="cawapres"><?php echo ($c->cawapres) ?></label>
                                        </div>
                                    <?php } ?>
                                </div>


                            </div>

                            <div class="container tab">


                                <h4 class="text-bold text-dark">Selamat anda sudah berhasil memilih!</h4>




                            </div>


                            <!-- <div class="col-lg-12 d-flex justify-content-center mb-3 mt-4 " id="btn-cawapres">
                                <button class="btn btn-outline-primary rounded-pill px-5 py-2 me-3"> Back</button>

                                <button class="btn btn-primary rounded-pill px-5 py-2"> Submit</button>
                            </div> -->
                        </form>

                        <div class="col-lg-12 d-flex justify-content-center mb-3 mt-4">
                            <!-- <a class="btn btn-primary rounded-pill px-5 py-2 disabled " id="btn-capres" type=""> Next</a> -->
                            <div style="float:right;">
                                <button class="btn btn-outline-primary rounded-pill px-5 py-2  " type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn-primary rounded-pill px-5 py-2 disabled  " type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                <button class="btn btn-primary rounded-pill px-5 py-2  hidden" type="submit" id="submit" onclick="save()">Submit</button>

                            </div>
                        </div>

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

    .tab {
        display: none;
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


    /* .radio-card:hover {
        border: 1px solid #0d6efd;
        padding: 12px 24px;
        border-radius: 10px;
        margin-bottom: 1rem;
        color: #0d6efd;


    } */

    .radio-card {
        border: 1px solid grey;
        padding: 12px 24px;
        border-radius: 10px;
        margin-bottom: 1rem;
        display: flex;

    }

    .radio-card.selected {
        border: 1px solid #0d6efd;
        padding: 12px 24px;
        border-radius: 10px;
        margin-bottom: 1rem;
        color: #0d6efd;
    }

    input[type="radio"] {
        height: 1.3rem;
        width: 1.3rem;
        align-items: center !important;
        /* display: flex; */
        /* justify-content: left; */
        margin-right: 0.5rem;

    }

    /* .radio-card>input label {
        align-items: center;
        display: flex;
        flex-direction: row;

    } */

    .input[type="radio"]::after {
        content: "";
        height: 11px;
        width: 11px;
        background: #0d6efd;
        border-radius: inherit;
        position: absolute;
        left: 2px;
        top: 2px;
        display: none;

    }

    .step {
        background: #ccc;
    }

    .step.active {
        background: #0d6efd;
    }

    .hidden {
        display: none;
    }

    /* .radio-card .circle {
        content: '';
        background-color: #0d6efd;
        border-radius: 100%;
        height: 24px;
        width: 24px;
        padding: 5px 5px;
    } */

    /* .radio-card .circle {
        height: 19px;
        width: 19px;
        display: block;
        border: 2px solid #ccc;
        border-radius: 50%;
        margin-right: 10px;
        position: relative;
    }

    .radio-card .circle.selected {
        background: #0d6efd;

    }

    .radio-card .circle::after {
        content: "";
        height: 11px;
        width: 11px;
        background: #0d6efd;
        border-radius: inherit;
        position: absolute;
        left: 2px;
        top: 2px;
        display: none;

    }

    .radio-card:hover .circle::after {
        display: block;
        background: #ccc;
    }

    .radio-card.selected {
        border: 1px solid #0d6efd;
        color: #0d6efd;

    }

    .radio-card.selected .circle {
        border: 2px solid #0d6efd;


    } */


    /* input[type="radio"],
    input[type="checkbox"] {
        display: none;
    } */
</style>