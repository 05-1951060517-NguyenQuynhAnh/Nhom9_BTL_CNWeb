<?php include('../config/database.php'); ?>
<?php include('../template/edit_profilr_header.php'); ?>
<div class="col-md bg-white rounded border" style="height:350px">
    <div class="profile">
        <div class="px-3 pt-3 border-bottom">
            <h1 class="fw-bold" style="letter-spacing: 0.75px;">Edit your Birthday & Gender</h1>
        </div>
        <div class="p-3 pb-0">
            <form action="process_edit_birth.php" method="post">
                <div class="form-group">
                    <div class="d-flex">
                        <label style="font-size:13px" class="d-inline fw-bold" for="">User id:</label>
                        <input style="width:300px;font-size:13px" type="text" class=" border-0 p-0 form-control"
                            name="txtid" value=" <?php echo $row['user_id'];?>">
                    </div>
                    <label style="font-size:19px" class="fw-bold mt-3 mb-2" for="txtname">Birthday</label>
                    <input style="width:300px" type="date" class="form-control" name="txtday">
                    <div class="d-block mt-3">
                        <label style="font-size:13px" class="d-block fw-bold" for="">I am</label>
                        <select id="city" name="txtgender" style="width:250px">
                        <option value="Male">--</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Male">Nonbinary/None of these choices</option>
                            
                            <option value="<?php echo $row['gender'];?>" selected="selected"><?php echo $row['gender'];?></option>             
                        </select>
                    </div>
                    
                    <button type="submit" name="btnsua" style="background: #ed1c40;"
                        class="link-light fw-bold btn mt-4 px-3">Submit</button>
                    <button type="submit" name="" class="ms-3 bg-white border fw-bold btn mt-4 px-3">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include('../template/edit_profile_footer.php'); ?>