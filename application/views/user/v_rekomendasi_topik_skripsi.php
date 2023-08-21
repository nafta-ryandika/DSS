    <section>
        <div class="center">
            <fieldset class="registration-form">
            <form method="post">
                <div class="form-group">
                    <div class="col-md-5">
                        <select class="form-control" name="topikSkripsi" onchange="this.form.submit()">
                        <?php
                            if (isset($_POST['topikSkripsi'])) {
                                $topikSkripsi = $_POST['topikSkripsi'];
                                echo "<option selected>$topikSkripsi</option>";
                            }
                        ?>
                            <option value="Pilih Salah Satu" disabled="disabled" selected="">Pilih Salah Satu</option>
                            <option value="Genaphografi">Genaphografi</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="Keamanan Sistem Informasi">Keamanan Sistem Informasi</option>
                            <option value="Data Mining">Data Mining</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
                        <noscript><input type="submit" value="Submit"></noscript>
                    </div>
            </form>
            <br>
            <form class="form-horizontal" action="<?php echo base_url();?>index.php/c_rekomendasi_topik_skripsi/simpan" method="post">
                    <?php
                    if(isset($_POST['topikSkripsi'])){
                    $topikSkripsi = $_POST['topikSkripsi'];
                    }
                    else{
                    $topikSkripsi = "";
                    }

                    if($topikSkripsi=="Genaphografi"){
                    $id_topik_skripsi=1;
                    ?>
                                <input type="hidden" name="id_topik_skripsi" value="<?php echo $id_topik_skripsi;?>" class="form-control">
                                <legend>Nilai Mata Kuliah</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Pengantar Sistem Informasi Geografi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_1">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Sistem Penunjang Keputusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_2">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Pengindraan Jauh</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_3">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ekoinformatik</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_4">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Minat</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Minat</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="minat">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Kendala</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kendala</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="kendala">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Rekomendasi Dosen</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Rekomendasi Dosen</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="rekomendasi_dosen">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Ketersediaan Referensi</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ketersediaan Referensi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="ketersediaan_referensi">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Penjurusan</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Penjurusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="penjurusan">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="center" style="margin-top: 30px;">
                                        <button type="reset" class="btn btn-danger col-sm-3" style="margin-right:5px; margin-left: 80px ">Reset</button>
                                        <button type="submit" class="btn btn-primary col-sm-3" style="margin-right:5px;">Proses</button>
                                        <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/rangking" class="btn btn-success col-sm-3">Rekomendasi</a>
                                    </div>
                                    </div>
                    <?php
                    }
                    elseif($topikSkripsi=="Akuntansi"){
                     $id_topik_skripsi=2;
                    ?>
                                <input type="hidden" name="id_topik_skripsi" value="<?php echo $id_topik_skripsi;?>" class="form-control">
                                <legend>Nilai Mata Kuliah</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Dasar-dasar Akuntansi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_1">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Sistem Informasi Akuntansi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_2">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">E-commerce</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_3">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Aspek Sosial dan Ekonomi Perangkat Lunak</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_4">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Manajemen Agroindustri Modern</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_5">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Minat</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Minat</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="minat">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Kendala</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kendala</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="kendala">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Rekomendasi Dosen</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Rekomendasi Dosen</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="rekomendasi_dosen">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Ketersediaan Referensi</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ketersediaan Referensi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="ketersediaan_referensi">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Penjurusan</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Penjurusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="penjurusan">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="center" style="margin-top: 30px;">
                                        <button type="reset" class="btn btn-danger col-sm-3" style="margin-right:5px; margin-left: 80px ">Reset</button>
                                        <button type="submit" class="btn btn-primary col-sm-3" style="margin-right:5px;">Proses</button>
                                        <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/rangking" class="btn btn-success col-sm-3">Rekomendasi</a>
                                    </div>
                                    </div>
                    <?php
                    }
                    elseif($topikSkripsi=="Jaringan Komputer"){
                    $id_topik_skripsi=3;
                    ?>
                                <input type="hidden" name="id_topik_skripsi" value="<?php echo $id_topik_skripsi;?>" class="form-control">
                                <legend>Nilai Mata Kuliah</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Jaringan Komputer</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_1">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Pemrograman Jaringan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_2">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Multimedia dalam Jaringan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_3">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Minat</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Minat</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="minat">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Kendala</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kendala</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="kendala">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Rekomendasi Dosen</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Rekomendasi Dosen</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="rekomendasi_dosen">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Ketersediaan Referensi</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ketersediaan Referensi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="ketersediaan_referensi">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Penjurusan</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Penjurusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="penjurusan">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="center" style="margin-top: 30px;">
                                        <button type="reset" class="btn btn-danger col-sm-3" style="margin-right:5px; margin-left: 80px ">Reset</button>
                                        <button type="submit" class="btn btn-primary col-sm-3" style="margin-right:5px;">Proses</button>
                                        <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/rangking" class="btn btn-success col-sm-3">Rekomendasi</a>
                                    </div>
                                    </div>
                    <?php
                    }
                    elseif($topikSkripsi=="Keamanan Sistem Informasi"){
                    $id_topik_skripsi=4;
                    ?>
                                <input type="hidden" name="id_topik_skripsi" value="<?php echo $id_topik_skripsi;?>" class="form-control">
                                <legend>Nilai Mata Kuliah</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Manajemen Keamanan Sistem Informasi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_1">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kriptografi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_2">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Digital Forensik</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_3">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Minat</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Minat</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="minat">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Kendala</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kendala</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="kendala">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Rekomendasi Dosen</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Rekomendasi Dosen</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="rekomendasi_dosen">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Ketersediaan Referensi</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ketersediaan Referensi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="ketersediaan_referensi">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Penjurusan</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Penjurusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="penjurusan">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="center" style="margin-top: 30px;">
                                        <button type="reset" class="btn btn-danger col-sm-3" style="margin-right:5px; margin-left: 80px ">Reset</button>
                                        <button type="submit" class="btn btn-primary col-sm-3" style="margin-right:5px;">Proses</button>
                                        <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/rangking" class="btn btn-success col-sm-3">Rekomendasi</a>
                                    </div>
                                    </div>
                    <?php
                    }
                    elseif($topikSkripsi=="Data Mining"){
                    $id_topik_skripsi=5;
                    ?>
                                <input type="hidden" name="id_topik_skripsi" value="<?php echo $id_topik_skripsi;?>" class="form-control">
                                <legend>Nilai Mata Kuliah</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Data Mining</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_1">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Minat</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Minat</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="minat">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Kendala</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kendala</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="kendala">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Rekomendasi Dosen</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Rekomendasi Dosen</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="rekomendasi_dosen">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Ketersediaan Referensi</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ketersediaan Referensi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="ketersediaan_referensi">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Penjurusan</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Penjurusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="penjurusan">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="center" style="margin-top: 30px;">
                                        <button type="reset" class="btn btn-danger col-sm-3" style="margin-right:5px; margin-left: 80px ">Reset</button>
                                        <button type="submit" class="btn btn-primary col-sm-3" style="margin-right:5px;">Proses</button>
                                        <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/rangking" class="btn btn-success col-sm-3">Rekomendasi</a>
                                    </div>
                                    </div>
                    <?php
                    }
                    elseif($topikSkripsi=="Multimedia"){
                    $id_topik_skripsi=6;
                    ?>
                                <input type="hidden" name="id_topik_skripsi" value="<?php echo $id_topik_skripsi;?>" class="form-control">
                                <legend>Nilai Mata Kuliah</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Pengantar Multimedia</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_1">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Pemrograman Grafis</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_2">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Multimedia dalam Jaringan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="nilai_3">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Minat</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Minat</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="minat">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Kendala</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Kendala</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="kendala">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Rekomendasi Dosen</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Rekomendasi Dosen</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="rekomendasi_dosen">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Ketersediaan Referensi</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Ketersediaan Referensi</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="ketersediaan_referensi">
                                                <option value="Sangat Banyak">Sangat Banyak</option>
                                                <option value="Banyak">Banyak</option>
                                                <option value="Cukup">Cukup</option>
                                                <option value="Sedikit">Sedikit</option>
                                                <option value="Sangat Sedikit">Sangat Sedikit</option>
                                            </select>
                                        </div>
                                    </div>
                                <legend>Penjurusan</legend>
                                    <div class="form-group">
                                    <label for="select" class="col-md-6 control-label">Penjurusan</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="select" name="penjurusan">
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="center" style="margin-top: 30px;">
                                        <button type="reset" class="btn btn-danger col-sm-3" style="margin-right:5px; margin-left: 80px ">Reset</button>
                                        <button type="submit" class="btn btn-primary col-sm-3" style="margin-right:5px;">Proses</button>
                                        <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/rangking" class="btn btn-success col-sm-3">Rekomendasi</a>
                                    </div>
                                    </div>
                    <?php
                    }


                    ?>
                
                    </form>

                </div>
                
            </fieldset>
        </div>
    </section>
    



                        



                    
                    