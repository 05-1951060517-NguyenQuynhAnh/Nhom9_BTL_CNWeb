<?php include('../config/database.php'); ?>
<?php include('../template/edit_profilr_header.php'); ?>
<div class="col-md bg-white rounded border" style="height:300px">
    <div class="profile">
        <div class="px-3 pt-3 border-bottom">
            <h1 class="fw-bold" style="letter-spacing: 0.75px;">Change Your Email Address</h1>
        </div>
        <div class="p-3 pb-0">
            <form action="process_edit_email.php" method="post">
                <div class="form-group">
                    <div class="d-flex">

                        <label style="font-size:13px" class="d-inline fw-bold" for="">User id:</label>
                        <input style="width:300px;font-size:13px" type="text" class=" border-0 p-0 form-control" name="txtid"
                            value=" <?php echo $row['user_id'];?>">
                    </div>
                    <label style="font-size:13px" class="fw-bold" for="txtemail">New Email Address</label>
                    <input style="width:300px" type="email" class="form-control" name="txtemail"
                        >
                        <label style="font-size:13px" class="fw-bold" for="txtname">Password</label>
                    <input style="width:300px" type="password" class="form-control" name="txtpass"
                        >
                    <button type="submit" name="" style="background: #ed1c40;"
                        class="link-light fw-bold btn mt-3 px-3">Save</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include('../template/edit_profile_footer.php'); ?>