

<div class="am-content bgimg">
	<div class="main-content">
	
		<div class="page-head">
			<h2>Materi</h2>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>Utama/dashboard">Home</a></li>
				<li class="active">Materi Trigonometri</li>
			</ol>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-9">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="tools">
							<a href="ui-panels.php.html#">
								<span class="icon s7-angle-right-circle"></span>
							</a>
						</div><span class="title" id="judul_materi"><?php echo $materi[0]->judul; ?></span>
					</div>
					<div class="panel-body">
						<div id="isi_materi" class="row text-center">
							<!-- load html dinamicly in here with jquery -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-alt3">
					<div class="panel-heading">
						<div class="tools"></div>
						<span class="title">Navigasi</span>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6 text-center">
								<button type="button" id="btnPrevious" class="btn btn-default"><i class="icon s7-angle-left-circle"></i> Previous</button>
							</div>
							<div class="col-md-6 text-center">
								<button type="button" id="btnNext" class="btn btn-default"><i class="icon s7-angle-right-circle"></i> Next</button>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12 text-center">
							<button type="button" class="btn btn-default"><i class="icon s7-home"></i> Materi awal</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		console.log("materi loaded");
		var c = 0; 
		
		var materi = <?php echo json_encode($materi); ?>;
		console.log(materi[0]['judul']); 

		//this is working
		$("#isi_materi").load("<?php echo base_url(); ?>/<?php echo $materi[0]->url_materi; ?>");

		$("#btnNext").on("click",function(){
			console.log("next");
			c++;
			$("#judul_materi").text(materi[c]['judul']);
			$("#isi_materi").load("<?php echo base_url(); ?>/"+materi[c]['url_materi']);
		});
		$("#btnPrevious").on("click",function(){
			console.log("prev");
			c--;
			$("#judul_materi").text(materi[c]['judul']);
			$("#isi_materi").load("<?php echo base_url(); ?>/"+materi[c]['url_materi']);
		});
	});
</script>
