<!-- page content -->
<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="min-height: 525px;">
                <div class="x_title">
                    <h2>Data Administrator</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                        <?php
                            foreach ($query->result() as $obj) {
                        ?>
                        <div class="profile_img">
                            <img src="<?php echo base_url();?>assets/administrator/images/admin.png" alt="Avatar">
                        </div>
                        <h3><?php echo $obj->username; ?></h3>
                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-user user-profile-icon"></i> <?php echo $obj->nama; ?></li>
                            <li><i class="fa fa-envelope user-profile-icon"></i> <?php echo $obj->email; ?></li>
                            <li><i class="fa fa-phone-square user-profile-icon"></i> <?php echo $obj->telepon; ?></li>
                            <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $obj->alamat; ?></li>
                            <li>
                                 <a href="<?php echo base_url(); ?>index.php/c_administrator/edit/<?php echo $obj->id_administrator;?>" class="btn btn-success col-sm-4"><i class="fa fa-edit m-right-xs"></i> Update</a>
                            </li>
                        </ul>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    <!-- start recent activity -->

                                    <?php
                                    foreach ($query2->result() as $obj2){
                                    ?>
                                    <ul class="messages">
                                        <li>
                                            <img src="<?php echo base_url();?>assets/administrator/images/admin.png" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <p class="month"><?php echo $obj2->tanggal; ?></p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading"><?php echo $obj2->username; ?></h4>
                                                <blockquote class="message"><?php echo $obj2->aktivitas; ?></blockquote>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                    <!-- end recent activity -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>