<section id="registration" class="container">
        <div class="row">
        	<table class="table table-striped table-hover fill-head">
        <tr>
                    <th>No</th>
                    <th>Topik Skripsi</th>
                    <th>Persentase</th>
                </tr
                
               <?php $no = 1;
                foreach ($daftar_rekomendasi_topik_skripsi as $rekomendasi) {?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rekomendasi->topik_skripsi;?></td>
                    <?php
                    $score = $rekomendasi->score;
                    $persentase = $score * 100;
                    ?>
                    <td><?php echo $persentase;?> %</td>
                </tr>
                <?php 
                $no++;
                } ?>
            </table>
                <div class="center" style="margin-top: 30px; margin-left: 485px;">
                    <a href="<?php echo base_url();?>index.php/c_utama_user/rekomendasi_topik_skripsi" class="btn btn-primary col-sm-2" style="margin-right:5px;">Tambah Data</a>
                    <a href="<?php echo base_url(); ?>index.php/c_rekomendasi_topik_skripsi/selesai" class="btn btn-warning col-sm-2">Selesai</a>
                </div>
         </div><!--/.row-->
</section><!--/#registration-->
