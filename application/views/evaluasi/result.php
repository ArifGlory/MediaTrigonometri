

<div class="am-content bgimg">
	<div class="main-content">
	
		<div class="page-head">
			<h2>Hasil Evaluasi</h2>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>Utama/dashboard">Home</a></li>
				<li class="active">Hasil Evaluasi</li>
			</ol>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="tools">
							<a href="#">
								<span class="icon s7-angle-right-circle"></span>
							</a>
						</div><span class="title" id="nomor_soal">Hasil Skor anda = <?php echo $skor; ?></span>
					</div>
					<div class="panel-body">
						<br><br>
						<div id="pertanyaan" class="row text-center">
							<h3 id="pertanyaan">Berikut adalah hasil dari evaluasi soal sebelumnya</h4>
							<br><br>
						</div>
						<div class="row text-left">
							<table class="table table-responsive">
								<thead>
									<tr>
										<th>Soal</th>
										<th>Jawaban Benar</th>
										<th>Jawaban Anda</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 0;
									foreach($soal as $val){
										if($val->jawaban_benar == "A"){
											$jawaban_benar = $val->jawaban_a;
										}else if($val->jawaban_benar == "B"){
											$jawaban_benar = $val->jawaban_b;
										}else if($val->jawaban_benar == "C"){
											$jawaban_benar = $val->jawaban_c;
										}else if($val->jawaban_benar == "D"){
											$jawaban_benar = $val->jawaban_d;
										}

										if($listJawaban[$no] == "A"){
											$jawaban_user = $val->jawaban_a;
										}else if($listJawaban[$no] == "B"){
											$jawaban_user = $val->jawaban_b;
										}else if($listJawaban[$no] == "C"){
											$jawaban_user = $val->jawaban_c;
										}else if($listJawaban[$no] == "D"){
											$jawaban_user = $val->jawaban_d;
										}

										if($listJawaban[$no] == $val->jawaban_benar){
											$status = "true";
										}else{
											$status = "false";
										}

									?>
									<tr>
										<td><?php echo $val->soal;  ?></td>
										<td><?php echo $jawaban_benar;  ?></td>
										<td><?php echo $jawaban_user;  ?></td>
										<?php if($status == "true") { ?>
											<td>
												<button class="btn btn-rounded btn-alt1"><i class="icon icon-left s7-check"></i> Benar</button>
											</td>
										<?php }else { ?>
											<td>
												<button class="btn btn-rounded btn-primary"><i class="icon icon-left s7-close"></i> Salah</button>
											</td>
										<?php } ?>
									</tr>
									<?php
								 $no++;
								 } ?>
								</tbody>
							</table>
						</div>
						<br><br>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<img height="1000px">
		</div>

	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		console.log("soal loaded");
		var c 			= 1;
		var jmlSoal 	= <?php echo count($soal); ?>;
		
		var soal 		= <?php echo json_encode($soal); ?>;
	
		
		
	});
</script>
