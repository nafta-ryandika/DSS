    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel" style="min-height: 525px;">
                    <div class="x_title">
                    <h2>Data Perbandingan Kriteria</h2>
                    <div class="clearfix"></div>
                    </div>
                        <div class="x_content">
                        <form action="<?php echo base_url();?>index.php/c_perbandingan_subkriteria/update_perbandingan_subkriteria/<?php echo "$id";?>" method="POST">
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                            <th></th>
                            <?php foreach ($daftar_subkriteria as $subkriteria) {?>
                            <th><h5><?php echo $subkriteria->subkriteria;?></h5></th>
                            <?php } ?>
                            </tr>        
                            <?php $kolom = 1;
                            foreach ($daftar_subkriteria as $subkriteria) {?>
                            <fieldset>
                            
                            <tr>
                            <td><h5><b><?php echo $subkriteria->subkriteria;?></b></h5></td>
                            <?php $baris = 1;
                            foreach ($daftar_subkriteria as $subkriteria) {
                            if($baris <= $kolom)
                            {?>
                            <td><input type="text" id="<?php echo $kolom; echo $baris; ?>" name="<?php echo $kolom; echo $baris; ?>" class="form-control col-md-12" value="1" readonly="readonly" ></td>
                            <?php }

                            else { ?>
                            <td>
                            <select class="btn btn-default dropdown-toggle btn-md col-md-12" id="nilai<?php echo $baris; echo $kolom; ?>" name="<?php echo $kolom; echo $baris; ?>" onchange="gantiNilai(<?php echo $baris; ?>, <?php echo $kolom; ?>, <?php echo $jumlah; ?>)">
                                <option value="0.111">1/9</option>
                                <option value="0.125">1/8</option>
                                <option value="0.142">1/7</option>
                                <option value="0.166">1/6</option>
                                <option value="0.2">1/5</option>
                                <option value="0.25">1/4</option>
                                <option value="0.333">1/3</option>
                                <option value="0.5">1/2</option>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            </td>
                            <?php }
                            $baris++;} ?>
                            </tr>
                            <?php 
                            $kolom++; } ?>
                        </table>
                            </fieldset>
                        <a href="<?php echo base_url();?>index.php/c_perbandingan_subkriteria/perbandingan_subkriteria/<?php echo "$id";?>" class="btn btn-danger btn-sm col-sm-1" style="float: right; margin-bottom: 5px;"><span class="glyphicon glyphicon-remove-sign"></span> Batal</a>
                        <button type="submit" class="btn btn-info btn-sm col-sm-1" style="float: right; margin-bottom: 5px;"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                        </form>

                        </div>
                                
                        </div>
                        </div>

                        <br />
                        <br />
                        <br />

                        </div>
                        </div>
                        </table>
                        </form>