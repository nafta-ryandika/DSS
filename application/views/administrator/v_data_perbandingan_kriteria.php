<div class="right_col" role="main">
                <div class="">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Perbandingan Kriteria</h2>
                                    <div class="clearfix"></div>
                                </div>
                                    <a href="<?php echo base_url();?>index.php/c_perbandingan_kriteria/edit_perbandingan_kriteria" class="btn btn-warning btn-sm col-sm-1" style="float: right; margin-bottom: 5px;"><span class="glyphicon glyphicon-edit"></span> Update</a>

                                <div class="x_content">
                                    <table class="table table-striped table-bordered table-hover fill-head">
                                    <tr>
                                        <th></th>
                                            <?php foreach ($daftar_kriteria as $kriteria) {?>
                                        <th><h5>
                                            <?php echo $kriteria->kriteria;?></h5></th>
                                            <?php } ?>
                                        <th><h5>Priority Vector</h5></th>
                                    </tr>
                                    
                                    <?php $index = 0;
                                        
                                    foreach ($daftar_kriteria as $kriteria) {?>
                                    <fieldset>
                                    <tr>
                                        <td><h5><b><?php echo $kriteria->kriteria;?></b></h5></td>
                                        <?php
                                        foreach ($perbandingan_kriteria as $perbandingan) {
                                            if($perbandingan->id_kriteria_1 == $kriteria->id_kriteria){ ?>                           
                                               <td><?php echo $perbandingan->bobot; ?></td>
                                        <?php
                                              }
                                        }
                                        ?>
                                        
                                        <td>
                                            <?php echo $nilai_vector[$index]; ?>
                                        </td>
                                    </tr>
                                    <?php 
                                    $index++; } ?>
                                    <tr>
                                        <td><h5><b>Jumlah</b></h5></td>
                                        <?php for($i = 0; $i < count($jumlah_per_kolom); $i++){ ?>
                                            <td><?php echo $jumlah_per_kolom[$i] ?></td>
                                        <?php } ?>
                                        <td></td>
                                    </tr>
                                </table>
                                </fieldset>

                                <div class="clearfix"></div>

                                <table class="table">
                                    <tr>
                                        <td><h5><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
                                        <?php echo $nilai_lamda; ?>
                                        </b></p></td></h5></td>
                                    </tr>
                                    <tr>
                                        <td><h5><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
                                        <?php echo $nilai_ci; ?>
                                        </b></p></td></h5></td>
                                    </tr>
                                    <tr>
                                        <td><h5><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
                                        <?php echo $nilai_cr; ?>%
                                        </b></p></td></h5></td>
                                    </tr>
                                </table>
                                <?php if($nilai_cr > 0.1){ ?>
                                    <div class="alert alert-error">
                                      Nilai Perbandingan Antar Kriteria Tidak Konsisten
                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-success">
                                      Nilai Perbandingan Antar Kriteria Konsisten
                                    </div>
                                    <hr />
                                    <center><h2>Tabel Fuzzy</h2></center>
                                    <hr />

                                    <table class="table table-striped table-bordered table-hover fill-head">
                                    <tr>
                                        <th></th>
                                        <?php foreach ($daftar_kriteria as $kriteria) {?>
                                        <th colspan="3"><h5><?php echo $kriteria->kriteria;?></h5></th>
                                    <?php } ?>
                                        <th colspan="3"><h5>Jumlah</h5></th>
                                    </tr>
                                    
                                    <?php   
                                    $total1 = 0;
                                    $total2 = 0;
                                    $total3 = 0;
                                    $index = 0;
                                    foreach ($daftar_kriteria as $kriteria) {?>
                                    <fieldset>
                                    <tr>
                                        <td><h5><b><?php echo $kriteria->kriteria;?></b></h5></td>
                                        <?php 
                                        $index1 = 0;
                                        
                                        foreach ($perbandingan_kriteria as $perbandingan) {
                                            if($perbandingan->id_kriteria_1 == $kriteria->id_kriteria){
                                                ?>                           
                                               <td><?php echo $nilai_fuzzy[$index1][0]; ?></td>
                                               <td><?php echo $nilai_fuzzy[$index1][1]; ?></td>
                                               <td><?php echo $nilai_fuzzy[$index1][2]; ?></td>
                                        <?php
                                              }
                                              $index1++;
                                        } ?>
                                        <td> <?php echo $jumlah_fuzzy[$index][0]; ?> </td>
                                        <td> <?php echo $jumlah_fuzzy[$index][1]; ?></td>
                                        <td> <?php echo $jumlah_fuzzy[$index][2]; ?> </td>
                                    </tr>
                                    <?php 
                                        $index++;
                                    } ?>
                                    <tr>
                                        <td><h5><b>Jumlah</b></h5></td>
                                        <td colspan="18"></td>
                                        <td> <?php echo $total_fuzzy1; ?> </td>
                                        <td> <?php echo $total_fuzzy2; ?> </td>
                                        <td> <?php echo $total_fuzzy3; ?> </td>
                                    </tr>    
                                </table>
                                </fieldset>
                                <hr />
                                <center><h2>Nilai Sintesis Fuzzy (Si) Kriteria</h2></center>
                                <hr />
                                    <table class="table table-striped table-bordered table-hover fill-head" style="width: 500px; margin-left: 30%;">
                                    <tr>
                                        <th rowspan="2"><center><h5>Kriteria</h5></center></th>
                                        <th colspan="3"><center><h5>Si</h5></center></th>
                                    </tr>
                                    <tr>
                                        <th><center><h5>l</h5></center></th>
                                        <th><center><h5>m</h5></center></th>
                                        <th><center><h5>u</h5></center></th>
                                    </tr>
                                    <?php   
                                    foreach ($daftar_kriteria as $kriteria) {?>
                                    <fieldset>
                                    <tr>
                                        <td><h5><b><?php echo $kriteria->kriteria;?></b></h5></td>
                                        <?php $index = 0;
                                        foreach ($daftar_kriteria as $kriteria2) {
                                            if($kriteria2->id_kriteria == $kriteria->id_kriteria){?>
                                            <td><h5><?php echo $nilai_si[$index][0];?></h5></td>
                                            <td><h5><?php echo $nilai_si[$index][1];?></h5></td>
                                            <td><h5><?php echo $nilai_si[$index][2];?></h5></td>
                                        <?php 
                                        }
                                        $index++;
                                    } ?>
                                    </tr>  
                                    <?php } ?>
                                </table>
                                <hr />
                                    <center><h2>Nilai Bobot Kriteria</h2></center>
                                <hr />
                                <table class="table table-striped table-bordered table-hover fill-head" style="width: 500px; margin-left: 30%;">
                                    <tr>
                                        <th><center><h5>Kriteria</h5></center></th>
                                        <th><center><h5>Bobot</h5></center></th>
                                    </tr>
                                    <?php   
                                    $index = 0;
                                    foreach ($daftar_kriteria as $kriteria) {?>
                                    <fieldset>
                                    <tr>
                                        <td><h5><b><?php echo $kriteria->kriteria;?></b></h5></td>
                                        <td><h5><?php echo $bobot_fuzzy[$index];?></h5></td>
                                        <?php
                                        $index++;
                                    } ?>
                                    </tr>
                                </table>
                                <?php } ?>





                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>