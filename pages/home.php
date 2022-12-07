<?php include '../pages/includes/header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Auto Generated Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="">Enter Your Password</label>
                                <div class="col-md-9">
                                    <input name="given_length" type="number" id="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="">Your Password</label>
                                    <div class="col-md-9">
                                        <input value="<?php echo isset($result) ? $result : " "; ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <input class="btn" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '../pages/includes/footer.php'?>