<aside class="right-side">
<section class="col-lg-12 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">                                        
                                    <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                                    </div><!-- /. tools -->

                                    <i class="fa fa-list"></i>
                                    <h3 class="box-title">
                                        <?=$title?>
                                    </h3>
                                </div>
                                
                              <div class="box-footer">
<?php if($this->session->userdata('akses')=='1'):?>
      <a href="<?php echo base_url();?>index.php/panel/portofolio/add" class="btn btn-primary btn-sm"><i class='fa fa-plus-circle'></i> Tambah Portofolio Baru</a>
                                    <br /><br />
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <a href="<?php echo base_url();?>index.php/panel/portofolio/add" class="btn btn-primary btn-sm"><i class='fa fa-plus-circle'></i> Tambah Portofolio Baru</a>
                                    <br /><br />
  <?php else:?>
     <a onclick="alert ('Anda Bukan Admin')" href="#" class="btn btn-primary disabled"><i class='fa fa-plus-circle'></i> Tambah Portofolio Baru</a>
                                    <br /><br />
  <?php endif;?>
                                    
                                    
<?php echo $this->session->flashdata('save_portofolio');?>
  <table width="100%" border="1" bordercolor="#CCCCCC" cellspacing="1" cellpadding="1" class="table table-striped">
  <tr>
    <td><b>No.</b></td>
    <td><b>Nama Portofolio</b></td>
    <td><b>Gambar URL</b></td>
    <td colspan="2" align="center"><b>Aksi</b></td>
  </tr>
  <?php
  $no = 1; 
  foreach ($portofolio as $p) {
  ?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td><?php echo character_limiter($p['title'],20); ?></td>
    <td><img src="<?php echo base_url();?>/file/images/<?php echo $p['gambar']; ?>" class="img-circle" width="45" height="47" /></td>

  <?php if($this->session->userdata('akses')=='1'):?>
      <td><a href="<?=base_url('index.php/panel/portofolio/edit')?>/<?=$p['id']?>"><button class="btn bg-blue btn-circle"><i class="fa fa-edit"></i></button></a></td>

  <?php elseif($this->session->userdata('akses')=='2'):?>
      <td><a href="<?=base_url('index.php/panel/portofolio/edit')?>/<?=$p['id']?>"><button class="btn bg-blue btn-circle"><i class="fa fa-edit"></i></button></a></td>
  <?php else:?>
      <td><a onclick="alert ('Anda Bukan Admin')"><button class="btn bg-blue btn-circle disabled"><i class="fa fa-edit"></i></button></a></td>
  <?php endif;?>

    
 <?php if($this->session->userdata('akses')=='1'):?>
      <td><a onclick="return confirm('Yakin ingin menghapus artikel ini..?')" href="<?=base_url('index.php/panel/portofolio/del')?>/<?=$p['id']?>"><button class="btn bg-red btn-circle"><i class="fa fa-trash-o"></i></button></a></td>
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <td><a onclick="return confirm('Yakin ingin menghapus artikel ini..?')" href="<?=base_url('index.php/panel/portofolio/del')?>/<?=$p['id']?>"><button class="btn bg-red btn-circle"><i class="fa fa-trash-o"></i></button></a></td>
  <?php else:?>
     <td><a onclick="alert ('Anda Bukan Admin')"><button class="btn bg-red btn-circle"><i class="fa fa-trash-o"></i></button></a></td>
  <?php endif;?>


  </tr>
  <?php
  }
  ?>
</table>

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