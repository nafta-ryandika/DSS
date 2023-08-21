<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update Data Administrator</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        <?php
                        foreach ($query->result() as $obj){
                        $id_administrator = $obj->id_administrator;
                        $nama = $obj->nama;
                        $username = $obj->username;
                        $password = $obj->password;
                        $email = $obj->email;
                        $alamat = $obj->alamat;
                        $telepon = $obj->telepon;
                        }
                        ?>

                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" action="<?php echo base_url();?>index.php/c_administrator/simpan" method="post">
                                <input type="hidden" name="id_administrator" value="<?php echo $id_administrator;?>" class="form-control" placholder="id_administrator">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nama" value="<?php echo $nama;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" value="<?php echo $username;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password" value="<?php echo $password;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email" value="<?php echo $email;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="alamat" value="<?php echo $alamat;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telepon <span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="telepon" value="<?php echo $telepon;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="<?php echo base_url(); ?>index.php/c_administrator/data_administrator" class="btn btn-danger col-sm-2"><i class="glyphicon glyphicon-remove-sign m-right-xs"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary col-sm-2"><i class="glyphicon glyphicon-save-file"></i> Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->