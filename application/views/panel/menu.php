
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
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="box box-danger" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                    <i class="fa fa-bars"></i>

                                    <h3 class="box-title"><?=$title?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <div class="row">
                                    
                                     <div class="col-md-12">
                                     <a href="<?php echo base_url();?>index.php/panel/menu/add"> 
                                     <button class="btn btn-primary btn-flat "><div class="fa fa-plus-square-o"> Tambah Data</div></button></a>
                                     
<?php echo $this->session->flashdata("save_menu");?>
<table width="100" border="1" bordercolor="#C3FDEE" cellspacing="1" cellpadding="1" class="table table-striped">
  <tbody>
    <tr>
      <th scope="col"><b>No.</b></th>
      <th scope="col"><b>Nama Menu</b></th>
      <th scope="col"><b>Url/Slug</b></th>
      <th scope="col"><b>Sub Menu</b></th>
      <th sSScope="col"><b>Status</b></th>
      <th colspan="2" scope="col"><b>Aksi</b></th>
    </tr>
    <?php 
	$no = 1;
	foreach($menu as $m){
	?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $m['menu_name']; ?></td>
      <td><?php echo $m['content_id']; ?></td>
      <td><?php echo $m['parent_id']; ?></td>
      <td><?php echo $m['status']; ?></td>
      <td>
        <a href="<?php echo base_url();?>index.php/panel/menu/edit/<?=$m['menu_id']?>"<button class="btn bg-blue btn-circle"><i class="fa fa-edit "></i></button></a>
      </td>
      <td>
      <a onclick="return confirm('Yakin ingin menghapus menu ini..?')" href="<?php echo base_url();?>index.php/panel/menu/del/<?=$m['menu_id']?>"<button class="btn bg-red btn-circle"><i class="fa fa-trash-o"></i></button></a>
        
      </td>
    </tr>
    <?php 
	}
	?>
  </tbody>
</table>

                                     </div>
                                    </div><!-- /.row - inside box -->
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->        

                </section><!-- /.content -->
                </div><!-- /.row (main row) -->
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