            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" style="min-height: 525px;">
                                <div class="x_title">
                                    <h2>Data Subkriteria</h2>
                                    <div class="clearfix"></div>
                                </div>

                                <label for="select" class="col-lg-2 control-label">Kriteria</label>
                                <div class="col-lg-3">
                                    <input type="text" name="nama" class="form-control" disabled="disabled" placeholder="Nilai Mata Kuliah">
                                </div>

                                <div class="clearfix"></div>
                                <br/>

                                <label for="select" class="col-lg-2 control-label">Subkriteria</label>
                                <div class="col-lg-3">
                                <select class="form-control" id="tipe" onchange="myFunction()">
                                <?php foreach ($daftar_topik_skripsi as $topik_skripsi) {
                                    if($id == $topik_skripsi->id_topik_skripsi){ ?>
                                        <option value="<?php echo $topik_skripsi->id_topik_skripsi;?>" selected><?php echo $topik_skripsi->topik_skripsi;?></option>
                                <?php }
                                    else { ?>
                                    <option value="<?php echo $topik_skripsi->id_topik_skripsi;?>"><?php echo $topik_skripsi->topik_skripsi;?></option>
                                <?php }
                                } ?>
                                </select>
                                </div>


                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th><center>No. </center></th>
                                                <th><center>Kriteria </center></th>
                                                <th><center>Persentase Bobot </center></th>
                                            </tr>
                                        </thead>

                                         <tbody>
                                            <?php
                                                $no=0; 
                                                foreach ($daftar_subkriteria as $obj) {
                                                $no++;
                                                ?>
                                            <tr class="even pointer">
                                                <td><center><?php echo $no; ?></center></td>
                                                <td><?php echo $obj->subkriteria; ?></td>
                                                    <?php
                                                    $bobot=$obj->bobot;
                                                    $persentase = 100 * $bobot;
                                                    ?>
                                                <td><center><?php echo $persentase; ?> %</center></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>