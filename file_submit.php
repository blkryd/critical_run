<?php
/**
 * Created by PhpStorm.
 * User: Heisenburg
 * Date: 10/5/2017
 * Time: 2:48 PM
 */
?>
<?php
include 'includes/header.php';
?>

<!-- End Header -->

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <h2>Registration Page / <span>File submition</span> </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pages Banner Area -->
<!-- Start Login Form -->
<div class="login-form-area login-fix">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="login-form">
                    <h3>Upload your files</h3>
                    <hr>
                    <form action="upload.php" class="dropzone" id="dropzone" ><div class="dz-default dz-message"><span>Drop your files here.</span><br><span>ONLY 2 FILE CAN BE UPLOADED</span></div></form>

                    <br>
                    <form action="includes/finish.php" method="post"><button type="submit" name="submit" id="mybutton" class="btn btn-block btn-success btn-lg">Finish</button></form>
                </div>

            </div>
        </div>

    </div>
</div>
<script type="application/javascript">
    Dropzone.options.dropzone = {
        autoProcessQueue: true,
        maxFilesize: 1000,
        parallelUploads: 100,
        addRemoveLinks: true,
        maxFiles: 2,
    };
</script>

<!-- End Login Form -->

<?php include 'includes/footer.php'?>


