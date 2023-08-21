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
                                <div class="clearfix"></div>
                                <br/>

                                <label for="select" class="col-lg-2 control-label">Subkriteria</label>
                                <div class="col-lg-3">
                                <select class="form-control" id="tipe" onchange="myFunction()">
                                <?php foreach ($daftar_kriteria as $kriteria) {
                                    if($id == $kriteria->id_kriteria){ ?>
                                        <option value="<?php echo $kriteria->id_kriteria;?>" selected><?php echo $kriteria->kriteria;?></option>
                                <?php }
                                    else { ?>
                                    <option value="<?php echo $kriteria->id_kriteria;?>"><?php echo $kriteria->kriteria;?></option>
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
                                                <td><?php echo $obj->subkriteria_2; ?></td>
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

        <script type="text/javascript">
            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 10,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });


        <!-- Fungsi javascript untuk onchange -->
         $("#select_subkriteria").chained("#select_kriteria");
        </script>