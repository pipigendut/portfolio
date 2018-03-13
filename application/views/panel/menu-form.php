
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
               
                <!-- Main content -->
                <section class="content">

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="box box-danger" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                    <i class="fa fa-cloud"></i>

                                    <h3 class="box-title">
                                    <?php
                                        if($stat == 'new'){
                                            echo "Form Tambah Menu Baru";
                                            }
                                        else{
                                            echo "Form Edit Menu";
                                            }
                                        ?>
                                    </h3>
                                </div><!-- /.box-header -->

                                <div class="box-body no-padding">
                                <form action="<?php echo base_url('index.php/panel/menu/save');?>" enctype="multipart/form-data" method="POST">
                                    <div class="row">
                                    <div class='col-md-12'>

                                    <h5>Nama Menu</h5>
                                    <input type="hidden" name="kode" value="<?=$kode?>" />
                                    <input type="hidden" name="stat" value="<?=$stat?>" />
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" placeholder="Email" name="menu_name" value="<?=$menu_name ?>">
                                    </div>

                                    <h5>Menu Parent</h5>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <select type="text" class="form-control" name="parent_id" placeholder="Email">
                                        <option value="">Root</option>
                                        <?php foreach($menu->result() as $menu):?>
                                        <option><?php echo $menu->menu_name?></option>
                                        <?php endforeach ?>
                                        </select>
                                    </div>

                                    <h5>Type</h5>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <select type="text" class="form-control" name="view_type" placeholder="Email">
                                        <option value="">Url</option>
                                        <option>Artikel</option>
                                        <option>Category</option>
                                        <option>Page</option>
                                        </select>
                                    </div>

                                   <h5>Content Url</h5>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" placeholder="Email" name="content_id">
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="input-group">
                                            <input type="radio" class="form-control" name="status" value="1" checked="checked"/> Publish   &nbsp; &nbsp; &nbsp;
                                            <input type="radio" class="form-control" name="status" value="0"/> Draft
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <div class="box-footer">
                                         <button type="submit" class="btn btn-warning btn-block btn-sm">
                                            <?php
                                                 if($stat == 'new'){
                                                    echo "Simpan Menu";
                                                        }
                                                else{
                                                    echo "Update menu";
                                                        }
                                            ?>
                                         </button>
                                     </div>

                                    
                                    </div>
                                    </div><!-- /.row - inside box -->
                                    </form>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->        

                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url();?>assets/panel/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url();?>assets/panel/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/panel/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/panel/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/panel/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url();?>assets/panel/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url();?>assets/panel/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url();?>assets/panel/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    </body>
</html>