<aside class="right-side">
<section class="col-lg-8 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">                                        
                                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                                    </div><!-- /. tools -->

                                    <i class="fa fa-users"></i>
                                    <h3 class="box-title">
                                        <?php
                                        if($stat == 'new'){
                                            echo "Form Tambah Portofolio";
                                            }
                                        else{
                                            echo "Form Edit Portofolio";
                                            }
                                        ?>
                                    </h3>
                                </div>
                                
                                <div class="box-footer">
                                    <form action="<?php echo base_url('index.php/panel/portofolio/klik');?>" enctype="multipart/form-data" method="POST">
                                    <div class="form-group">
                                        <label>Nama Portofolio</label>
                                        <input type="hidden" name="kode" value="<?=$kode?>" />
                                        <input type="hidden" name="stat" value="<?=$stat?>" />
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" class="form-control" name="judul" value="<?=$judul ?>" placeholder="Masukan Nama Judul"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <br/>
                                  
                                    <div class="form-group">
                                        <label>File Portofolio</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                            <input type="file" class="btn btn-primary btn-sm" name="gambar"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="callout callout-danger">
                                        <p>Format gambar harus JPEG/JPG/PNG dan ukuran gambar diseragamkan</p>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-warning btn-block btn-sm">
                                            <?php
                                                 if($stat == 'new'){
                                                    echo "Simpan Portofolio";
                                                        }
                                                else{
                                                    echo "Update Portofolio";
                                                        }
                                            ?>
                                     </button>
                                    
                                    </form>
                                </div>
                            </div>
                            <!-- /.box -->




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