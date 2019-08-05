<div class="am-content bgimg">
	<div class="main-content">
		<div class="page-head">
			<h2>Evaluasi</h2>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>Utama/dashboard">Home</a></li>
				<li class="active">Evaluasi Trigonometri</li>
			</ol>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="tools">
							<a href="ui-panels.php.html#">
								<span class="icon s7-angle-right-circle"></span>
							</a>
						</div><span class="title" id="nomor_soal">Soal </span>
					</div>
					<div class="panel-body">
						<br><br>
						<div id="pertanyaan" class="row text-center">
							<h3 id="pertanyaan"><?php echo $soal[0]->soal; ?> </h4>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-6 text-center">
								<button style="width:300px;" id="A" class="btn btn-primary btn-md btn-jawaban">A. <?php echo $soal[0]->jawaban_a; ?></button>
							</div>
							<div class="col-md-6 text-center">
								<button style="width:300px;" id="B" class="btn btn-primary btn-md btn-jawaban">B. <?php echo $soal[0]->jawaban_b; ?></button>
							</div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-md-6 text-center">
								<button style="width:300px;" id="C" class="btn btn-primary btn-md btn-jawaban">C. <?php echo $soal[0]->jawaban_c; ?></button>
							</div>
							<div class="col-md-6 text-center">
								<button style="width:300px;" id="D" class="btn btn-primary btn-md btn-jawaban">D. <?php echo $soal[0]->jawaban_d; ?></button>
							</div>
						</div>
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
		var list_jawab 	= [];
		var getAnswer 	= "no";
		var skor 		= 0; 
		

		function setupSoal(){
			$("#pertanyaan").text(soal[c]['soal']);
			$("#A").html("A. "+soal[c]['jawaban_a']);
			$("#B").html("B. "+soal[c]['jawaban_b']);
			$("#C").html("C. "+soal[c]['jawaban_c']);
			$("#D").html("D. "+soal[c]['jawaban_d']);
			c++;
		}

		function nextSoal(){
			console.log('Get Answer = ' + getAnswer);
			
			if(c < jmlSoal){
				list_jawab.push(getAnswer);
				setupSoal();
				
			}else{

				if (c <= jmlSoal) {
					list_jawab.push(getAnswer);
					c++;

					$("#pertanyaan").text("Soal selesai");
					$("#A").html("Lihat Hasil Evaluasi");
					$("#B").remove();
					$("#C").remove();
					$("#D").remove();
				}else{
					console.log("List jawab : "+list_jawab);
					//var jsonJawaban 	= JSON.stringify(list_jawab);
					var jsonJawaban 	= list_jawab;

					$.ajax({
					// beforeSend:function() { 
						
					// },
					type: "POST",
					url: "<?php echo base_url(); ?>Utama/koreksi",
					data: {
						data: jsonJawaban
					},
					cache: false,
					success: function(data) {
						var response = JSON.parse(data);
						console.log(response['status']);
						window.location.replace(response['redirect']);
						
					}
				});
				}
				
			}
		} 

		
		$("#A").on("click",function(){
			getAnswer = "A";
			nextSoal();
		});
		$("#B").on("click",function(){
			getAnswer = "B";
			nextSoal();
		});
		$("#C").on("click",function(){
			getAnswer = "C";
			nextSoal();
		});
		$("#D").on("click",function(){
			getAnswer = "D";
			nextSoal();
		});

		$(".btn-jawaban").mouseenter(function(){
			$(this).removeClass('btn-primary');
			$(this).addClass('btn-alt1');
		})
		.mouseleave(function(){
			$(this).removeClass('btn-alt1');
			$(this).addClass('btn-primary');
		});

		
		
	});
</script>
