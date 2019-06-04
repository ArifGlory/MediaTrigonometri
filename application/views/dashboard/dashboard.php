<div class="am-content">
	<div class="main-content">

		<div class="row">
			<div class="col-md-6">
				<div class="widget widget-calendar">
					<div class="cal-container">
						<div class="cal-notes"><span class="day"><?php echo $nama_hari; ?></span><span class="date">
								<?php echo date("F d",strtotime($tanggal)); ?></span>

						</div>
						<div class="cal-calendar">
							<h3 class="text-center">Selamat Datang! Mari Lanjutkan belajarnya</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-alt3">
					<div class="panel-heading">
						<div class="tools">
                        </div>
                        <span class="title">Materi</span>
					</div>
					<div class="panel-body">
                        <p><br></p>
						<p> Tambah pengetahuan mu dengan belajar materi tentang trigonometri</p>
                        <br>
                        <div class="text-center">
                            <a href="<?php echo base_url();?>Utama/materi" class="btn btn-success btn-lg">Mulai</a>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="tools">
                        </div>
                        <span class="title">Latihan</span>
					</div>
					<div class="panel-body">
                        <p><br></p>
						<p> Ujicoba kemampuan mu dengan tes evaluasi dan latihan soal</p>
                        <br>
                        <div class="text-center">
                            <a class="btn btn-success btn-lg">Mulai</a>
                        </div>
					</div>
				</div>
			</div>
            <div class="col-md-4">
				<div class="panel panel-alt1">
					<div class="panel-heading">
						<div class="tools">
                        </div>
                        <span class="title">SK / KD</span>
					</div>
					<div class="panel-body">
                        <p><br></p>
						<p> Pelajari SK / KD tentang materi ini</p>
                        <br><br>
                        <div class="text-center">
                            <a class="btn btn-success btn-lg">Mulai</a>
                        </div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>