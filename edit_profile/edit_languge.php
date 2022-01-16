<?php include('../config/database.php'); ?>
<?php include('../template/edit_profilr_header.php'); ?>
<div class="col-md bg-white rounded border" style="height:240px">
    <div class="profile">
        <div class="px-3 pt-3 border-bottom">
            <h1 class="fw-bold" style="letter-spacing: 0.75px;">Change Your Language</h1>
        </div>
        <div class="p-3 pb-0">
            <form action="process_edit_language.php" method="post">
                <div class="form-group">
                    <div class="d-flex">
                        <label style="font-size:13px" class="d-inline fw-bold" for="">User id:</label>
                        <input style="width:300px;font-size:13px" type="text" class=" border-0 p-0 form-control"
                            name="txtid" value=" <?php echo $row['user_id'];?>">
                    </div>
                    <div class="d-block">
                        <label style="font-size:13px" class="d-block mt-2 fw-bold" for="">Language</label>
                        <select name="language" class="margin-right span-30">						
															
								<option class="en-AU" value="English (Australia)">English (Australia)</option>
                                <option class="en-AU" value="English">English</option>						
								<option class="de-DE" value="Deutsch">Deutsch</option>							
								<option class="es" value="Español">Español</option>							
								<option class="es-ES" value="Español (España)">Español (España)</option>						
								<option class="fr-FR" value="Français">Français</option>							
								<option class="it-IT" value="Italiano">Italiano</option>						
								<option class="nl-NL" value="Nederlands">Nederlands</option>							
								<option class="pl-PL" value="Polski">Polski</option>						
								<option class="pt-BR" value="Português">Português</option>
								<option class="tr-TR" value="Türkçe">Türkçe</option>							
								<option class="ru-RU" value="Русский">Русский</option>							
								<option class="th-TH" value="ไทย">ไทย</option>						
								<option class="ja-JP" value="日本語">日本語</option>							
								<option class="ko-KR" value="한국어">한국어</option>
                                <option class="en-US" value="<?php echo $row['language'];?>" selected="selected"><?php echo $row['language'];?></option>
							
						</select>
                    </div>

                    <button type="submit" name="btnsua" style="background: #ed1c40;"
                        class="link-light fw-bold btn mt-3 px-3">Save</button>
                    <button type="submit" name="" class="ms-3 bg-white border fw-bold btn mt-3 px-3">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include('../template/edit_profile_footer.php'); ?>