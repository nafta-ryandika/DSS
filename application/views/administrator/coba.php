<html>
<body>
    <table>
        <tr>
            <th></th>
        <?php foreach ($daftar_kriteria as $kriteria) {?>
            <th><?php echo $kriteria->kriteria;?></th>
        <?php } ?>
            <th>Priority Vector</th>
        </tr>
        
        <?php $index = 0;
            
        foreach ($daftar_kriteria as $kriteria) {?>
        <fieldset>
        <tr>
            <td><b><?php echo $kriteria->kriteria;?></b></td>
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
            <td><b>Jumlah</b></td>
            <?php for($i = 0; $i < count($jumlah_per_kolom); $i++){ ?>
                <td><?php echo $jumlah_per_kolom[$i] ?></td>
            <?php } ?>
            <td></td>
        </tr>
        
    </table>
    </fieldset>
    <table>
        <tr>
            <td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
            <?php echo $nilai_lamda; ?>
            </b></p></td>
        </tr>
        <tr>
            <td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
            <?php echo $nilai_ci; ?>
            </b></p></td>
        </tr>
        <tr>
            <td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
            <?php echo $nilai_cr; ?>%
            </b></p></td>
        </tr>
    </table>
    <?php if($nilai_cr > 0.1){ ?>
        <div class="alert alert-error">
          Nilai Perbandingan Tidak Konsisten, Silahkan melakukan perbandingan lagi
        </div>
    <?php } else { ?>
        <div class="alert alert-success">
          Nilai Perbandingan Konsisten, Lanjut ke logika fuzzy
        </div>
        <hr />
        <center><h3>Tabel Fuzzy</h3></center>
        <hr />
        <table class="table table-striped table-bordered table-hover fill-head">
        <tr>
            <th>#</th>
        <?php foreach ($daftar_kriteria as $kriteria) {?>
            <th colspan="3"><?php echo $kriteria->kriteria;?></th>
        <?php } ?>
            <th colspan="3">Jumlah</th>
        </tr>
        
        <?php   
        $total1 = 0;
        $total2 = 0;
        $total3 = 0;
        $index = 0;
        foreach ($daftar_kriteria as $kriteria) {?>
        <fieldset>
        <tr>
            <td><b><?php echo $kriteria->kriteria;?></b></td>
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
            <td><b>Jumlah</b></td>
            <td colspan="12"></td>
            <td> <?php echo $total_fuzzy1; ?> </td>
            <td> <?php echo $total_fuzzy2; ?> </td>
            <td> <?php echo $total_fuzzy3; ?> </td>
        </tr>    
    </table>
    </fieldset>
    <hr />
    <center><h3>Nilai Sintesis Fuzzy (Si) Kriteria</h3></center>
    <hr />
        <table>
        <tr>
            <th rowspan="2"><center>Kriteria</center></th>
            <th colspan="3"><center>Si</center></th>
        </tr>
        <tr>
            <th><center>l</center></th>
            <th><center>m</center></th>
            <th><center>u</center></th>
        </tr>
        <?php   
        foreach ($daftar_kriteria as $kriteria) {?>
        <fieldset>
        <tr>
            <td><b><?php echo $kriteria->kriteria;?></b></td>
            <?php $index = 0;
            foreach ($daftar_kriteria as $kriteria2) {
                if($kriteria2->id_kriteria == $kriteria->id_kriteria){?>
                <td><?php echo $nilai_si[$index][0];?></td>
                <td><?php echo $nilai_si[$index][1];?></td></td>
                <td><?php echo $nilai_si[$index][2];?></td>
            <?php 
            }
            $index++;
        } ?>
        </tr>  
        <?php } ?>
    </table>
    <hr />
        <center><h3>Nilai Bobot Kriteria</h3></center>
    <hr />
    <table>
        <tr>
            <th><center>Kriteria</center></th>
            <th><center>Bobot</center></th>
        </tr>
        <?php   
        $index = 0;
        foreach ($daftar_kriteria as $kriteria) {?>
        <fieldset>
        <tr>
            <td><b><?php echo $kriteria->kriteria;?></b></td>
            <td><?php echo $bobot_fuzzy[$index];?></td>
            <?php
            $index++;
        } ?>
        </tr>
    </table>
    <?php } ?>
</body>
</html>