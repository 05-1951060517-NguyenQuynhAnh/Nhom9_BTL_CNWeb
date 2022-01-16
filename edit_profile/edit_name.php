<?php include('../config/database.php'); ?>
<?php include('../template/edit_profilr_header.php'); ?>
<div class="col-md bg-white rounded border" style="height:277px">
    <div class="profile">
        <div class="px-3 pt-3 border-bottom">
            <h1 class="fw-bold" style="letter-spacing: 0.75px;">Change Your Name</h1>
        </div>
        <div class="p-3 pb-0">
            <form action="process_edit_name.php" method="post">
                <div class="form-group">
                    <div class="d-flex">
                        <label style="font-size:13px" class="d-inline fw-bold" for="txtname">User id:</label>
                        <input style="width:300px;font-size:13px" type="text" class=" border-0 p-0 form-control" name="txtid"
                            value=" <?php echo $row['user_id'];?>">
                    </div>
                    <label style="font-size:13px" class="fw-bold" for="txtname">Name</label>
                    <input style="width:300px" type="text" class="form-control" name="txtname"
                        value="<?php echo $row['name'];?>">
                    <button type="submit" name="btnsua" style="background: #ed1c40;"
                        class="link-light fw-bold btn mt-3 px-3">Submit</button>
                    <button type="submit" name="" class="ms-3 bg-white border fw-bold btn mt-3 px-3">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include('../template/edit_profile_footer.php'); ?>