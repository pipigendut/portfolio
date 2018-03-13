<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script>
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor importcss"
        ],
        content_css: "css/development.css",
        add_unload_trigger: false,

        toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
        toolbar2: "custompanelbutton textbutton spellchecker",

        image_advtab: true,

        style_formats: [
            {title: 'Bold text', format: 'h1'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        template_replace_values : {
            username : "Jack Black"
        },

        template_preview_replace_values : {
            username : "Preview user name"
        },

        //file_browser_callback: function() {},

        templates: [ 
            {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'}, 
            {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
        ],

        setup: function(ed) {
            ed.addButton('custompanelbutton', {
                type: 'panelbutton',
                text: 'Panel',
                panel: {
                    type: 'form',
                    items: [
                        {type: 'button', text: 'Ok'},
                        {type: 'button', text: 'Cancel'}
                    ]
                }
            });

            ed.addButton('textbutton', {
                type: 'button',
                text: 'Text'
            });
        },

        spellchecker_callback: function(method, words, callback) {
            if (method == "spellcheck") {
                var suggestions = {};

                for (var i = 0; i < words.length; i++) {
                    suggestions[words[i]] = ["First", "second"];
                }

                callback(suggestions);
            }
        }
    });
</script>
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
                                    <i class="fa fa-cloud"></i>

                                    <h3 class="box-title"><?=$title?></h3>
                                </div><!-- /.box-header -->
                                <!-- Input addon -->
                            <div class="box box-info">
                            <form action="<?php echo base_url('index.php/panel/about/save');?>" enctype="multipart/form-data" method="POST">
                                <div class="box-body">
                                    <p>Title</p>
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                        <input type="text" class="form-control" placeholder="Title" name="judul" value="<?=$judul?>">
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                            <label for="exampleInputFile">Photo</label>
                                            <input type="file" class="btn btn-primary" name="foto" id="exampleInputFile">
                                            <p class="help-block">*Tipe File JPG/PNG max.2MB.</p>
                                    </div>
                                    <br/>

                                    <p>Content Text</p>
                                    <form>
                                        <textarea id="editor1" name="teks" rows="10" cols="80">
                                            <?=$teks?>
                                        </textarea>                        
                                    </form>

                                    <div class="box-footer">
                                         <div class="box-footer">
  <?php if($this->session->userdata('akses')=='1'):?>
      <button type="submit" class="btn btn-warning btn-block btn-sm">
                                            Edit Profile</button>

  <?php elseif($this->session->userdata('akses')=='2'):?>
      <button type="submit" class="btn btn-warning btn-block btn-sm">
                                            Edit Profile</button>
  <?php else:?>
      <a href="#" onclick="alert ('Anda Bukan Admin')"><button type="submit" class="btn btn-warning btn-block disabled">
                                            Edit Profile</button>
  <?php endif;?>
                                         
                                    </div>
                                    </div>
                                    
                                </div><!-- /.box-body -->
                            </form>
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
        <script src="<?php echo base_url();?>assets/panel/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- CK Editor -->
        <script src="../../js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
    </body>
</html>