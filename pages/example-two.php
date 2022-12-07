<?php include '../pages/includes/header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Please upload the file</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3" for="">Name</label>
                                <div class="col-md-9">
                                    <input name="file_name" type="text" id="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" for="">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                </div>
                                <div>
                                    <input class="btn1" type="submit" value="Submit">
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