	<!--/about-->
	<div class="about" id="about">
		<div class="container">
			<div class="about-main_w3_agileits">
				<div class="col-md-6 about-left">
					<img src="<?php echo base_url();?>file/images/<?=$pp?>" alt="">
				</div>
				<div class="col-md-6 about-right_agileits">
					<h3><?=$title ?></h3>
					<p><?php echo character_limiter(strip_tags($teks),50) ?></p>
					<a class="active" href="#" data-toggle="modal" data-target="#modalForm">Learn more</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//about-->

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">About Me</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                    <?php foreach ($profile as $p): ?>
                        <label for="masukkanNama"><?=$p['title']?></label>
                        <p><?=$p['content']?></p>
                    <?php endforeach ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

		<!--/portofolio-->
	<div class="choose" id="portofolio">
		<div class="container">
			<div class="choose-main">
				<div class="col-md-12 news-right">
					<h2>PORTOFOLIO</h2>
					<p>Duis sit amet posuere justo, sit amet finibus urna. Aenean elementum diam nec laoreet sodales. Morbi vulputate tempor
							nisl nec tristique.</p>
				</div>
		</div>
	</div>
	<!--//portofolio-->
	<!--/gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="gallery-main">
				<div class="gallery-top">
					<?php foreach ($portofolio as $pf): ?>
					<div class="gallery-top-img portfolio-grids">
						<a href="<?php echo base_url();?>file/images/<?=$pf['gambar']?>" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
									<img src="<?php echo base_url();?>file/images/<?=$pf['gambar']?>" class="img-responsive" alt="" />
									<div class="p-mask">
										<h4><span><?=$pf['title']?></span></h4>
									</div>
								</a>
					</div>
					<?php endforeach ?>
					<div class="gallery-top-img">
						<h3>PORTOFOLIO</h3>
						<span> </span>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--//gallery-->

<!--/tab_section-->
	<div class="tabs_section" id="edukasi">
		<div class="container">
			<h5>MORE</h5>
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li> Educations</li>
					<li> Skills</li>
					<li> English</li>
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="recipe-grid">
							<div class="col-md-6 menu-grids">
							<?php foreach ($edukasi1 as $e1): ?>
								<div class="menu-text_wthree">
									<div class="menu-text-left">
										<div class="rep-img">
											<img src="<?php echo base_url();?>file/images/<?=$e1['gambar']?>" alt=" " class="img-responsive">
										</div>
										<div class="rep-text">
											<h4><?=$e1['title']?></h4>
											<h6><?=$e1['lulus']?></h6>
										</div>

										<div class="clearfix"> </div>
									</div>
									<div class="menu-text-right">
										<h4><?=$e1['nilai']?></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							<?php endforeach ?>
							</div>
							<div class="col-md-6 menu-grids">
							<?php foreach ($edukasi2 as $e2): ?>
								<div class="menu-text_wthree">
									<div class="menu-text-left">
										<div class="rep-img">
											<img src="<?php echo base_url();?>file/images/<?=$e2['gambar']?>" alt=" " class="img-responsive">
										</div>
										<div class="rep-text">
											<h4><?=$e2['title']?></h4>
											<h6><?=$e2['lulus']?></h6>
										</div>

										<div class="clearfix"> </div>
									</div>
									<div class="menu-text-right">
										<h4><?=$e2['nilai']?></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							<?php endforeach ?>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab2">
						<div class="recipe-grid">
							<div class="col-md-6 menu-grids">
							<?php foreach ($skill1 as $s1): ?>
								<div class="menu-text_wthree">
									<div class="menu-text-left">
										<div class="rep-img">
											<img src="<?php echo base_url();?>file/images/<?=$s1['gambar']?>" alt=" " class="img-responsive">
										</div>
										<div class="rep-text">
											<h4><?=$s1['title']?></h4>
										</div>

										<div class="clearfix"> </div>
									</div>
									<div class="menu-text-right">
										<h4><?=$s1['nilai']?></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							<?php endforeach ?>
							</div>

							<div class="col-md-6 menu-grids">
							<?php foreach ($skill2 as $s2): ?>
								<div class="menu-text_wthree">
									<div class="menu-text-left">
										<div class="rep-img">
											<img src="<?php echo base_url();?>file/images/<?=$s2['gambar']?>" alt=" " class="img-responsive">
										</div>
										<div class="rep-text">
											<h4><?=$s2['title']?></h4>
										</div>

										<div class="clearfix"> </div>
									</div>
									<div class="menu-text-right">
										<h4><?=$s2['nilai']?></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							<?php endforeach ?>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="tab3">
						<div class="recipe-grid">
							<div class="col-md-6 menu-grids">
							<?php foreach ($inggris as $ig): ?>
								<div class="menu-text_wthree">
									<div class="menu-text-left">
										<div class="rep-img">
											<img src="<?php echo base_url();?>file/images/<?=$ig['gambar']?>" alt=" " class="img-responsive">
										</div>
										<div class="rep-text">
											<h4><?=$ig['title']?></h4>
										</div>

										<div class="clearfix"> </div>
									</div>
									<div class="menu-text-right">
										<h4><?=$ig['nilai']?></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							<?php endforeach ?>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /tabs -->
	<!--//tab_section-->

	<!--project-->
	<div class="news" id="project">
		<div class="container">
			<div class="news-main_wthree_agile">
				<div class="col-md-12 news-right">
					<h2>MY PROJECT</h2>
					<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet
					</p>
				</div>

				<div class="clearfix"></div>
				<div class="mid_slider">
					<!-- banner -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1" class=""></li>
							<li data-target="#myCarousel" data-slide-to="2" class=""></li>
							<li data-target="#myCarousel" data-slide-to="3" class=""></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="row">
								<?php foreach ($projek as $p):?>
									<div class="col-md-3 col-sm-3 col-xs-3 slidering">
										<div class="thumbnail"><a href="<?=$p['link']?>" target="blank"><img src="<?php echo base_url();?>file/images/<?=$p['gambar']?>" alt="Image" style="max-width:100%;"></a></div>
										<p class="text-center"><?=$p['title']?></p>
									</div>
								<?php endforeach?>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
						<!-- The Modal -->
					</div>
					<!--//banner -->

				</div>
			</div>
		</div>
	</div>
