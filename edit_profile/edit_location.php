<?php include('../config/database.php'); ?>
<?php include('../template/edit_profilr_header.php'); ?>
<div class="col-md bg-white rounded border" style="height:300px">
    <div class="profile">
        <div class="px-3 pt-3 border-bottom">
            <h1 class="fw-bold" style="letter-spacing: 0.75px;">Change Your Location</h1>
        </div>
        <div class="p-3 pb-0">
            <form action="process_edit_location.php" method="post">
                <div class="form-group">
                    <div class="d-flex">
                        <label style="font-size:13px" class="d-inline fw-bold" for="">User id:</label>
                        <input style="width:300px;font-size:13px" type="text" class=" border-0 p-0 form-control"
                            name="txtid" value=" <?php echo $row['user_id'];?>">
                    </div>
                    <div class="d-block">
                        <label style="font-size:13px" class="d-block fw-bold" for="">Country</label>
                        <select id="city" name="txtcountry">
                            <option value="Cao Bang">Cao Bằng</option>
                            <option value="Đà Lạt">Đà Lạt</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Huế">Huế</option>
                            <option value="Hà Giang">Hà Giang</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                            <option value="Hòa Bình">Hòa Bình</option>
                            <option value="Thanh Hóa">Thanh Hóa</option>
                            <option value="Hồ Chí Minh City">Hồ Chí Minh City</option>
                            <option value="<?php echo $row['location'];?>" selected="selected"><?php echo $row['location'];?></option>             
                        </select>
                    </div>
                    <!-- <input style="width:300px" type="email" class="form-control" name="txtcountry"> -->
                    <label style="font-size:13px" class="fw-bold mt-3" for="txtname">Hometown</label>
                    <input style="width:300px" type="text" class="form-control" name="txthometown"value=" <?php echo $row['hometown];?>">
                    <button type="submit" name="btnsua" style="background: #ed1c40;"
                        class="link-light fw-bold btn mt-3 px-3">Submit</button>
                    <button type="submit" name="" class="ms-3 bg-white border fw-bold btn mt-3 px-3">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include('../template/edit_profile_footer.php'); ?>