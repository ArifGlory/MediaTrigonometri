<div class="text-left" style="padding: 5%">
	<!-- load html dinamicly in here with jquery -->
	<div class="page-head text-center">
		<ol class="breadcrumb">
			<li><a href="#ukuran_derajat">Ukuran Derajat</a></li>
			<li><a href="#ukuran_radian">Ukuran Radian</a></li>
			<li><a href="#hubungan">Hubungan Derajat dengan Radian</a></li>
		</ol>
	</div>
	<p class="text-left" id="ukuran_derajat">
		Pada subbab ini, Anda akan mempelajari ukuran sudut, sehingga anda akan mengenal
		istilah satuan derajat dan radian. Untuk lebih jelasnya, simak materi berikut.
	</p>
	<br>
	<div>
		<h3 class="text-left">1. Ukuran Derajat </h3>
		<img src="<?php echo base_url();?>assets/img/sudut1.jpg" class="img-rounded" width="400px" height="400px">
		<br>
		<p class="text-left">
			Perhatikan gambar diatas. Sebuah titik melintas lingkaran dari titik P, ke Q, ke R,
			dan kembali ke titik P. Dalam hal ini, titik bergerak satu putaran dan panjang lintasan
			yang dilalui sama dengan keliling lingkaran.
			<br>
			Besar sudut dalam satu putaran adalah 360 derajat, berarti :
			<br><br>
			<strong class="text-center">1 derajat = 1/360 putaran</strong>
			<br><br>
			Ukuran sudut yang lebih kecil dari derajat lain adalah menit (') dan detik ('').
			Hubungan ukuran sudut menit dan detik adalah sebagai berikut :
		</p>
		<br>
		<br>
		<div class="panel panel-full-alt3" style="display:inline-block;">
			<div class="panel-heading">
				<h4>Harap diingat</h4>
			</div>
			<div class="panel-body">
				<p class="text-left">
					a. 1 Derajat &emsp; = 60 menit &emsp;&emsp;&emsp;&emsp; => 1° &emsp;= &emsp; 60'
					<br>
					&emsp; 1 Menit &emsp;&emsp;= 1/60 Derajat &emsp;&emsp; => 1' &emsp; = &emsp; (1/60)°
				</p>
				<p class="text-left">
					b. 1 Menit &emsp; = 60 Detik &emsp;&emsp;&emsp;&emsp; => 1' &emsp;= &emsp; 60°
					<br id="ukuran_radian">
					&emsp; 1 Detik &emsp;&emsp;= 1/60 Menit &emsp;&emsp; => 1'' &emsp; = &emsp; (1/60)
				</p>
			</div>
		</div>
		<br>
		<div>
			<h4>Mari kita praktekkan !</h4>
			<p class="text-left">Perhatikan jam dibawah ini, Kamu dapat menyalakan dan stop jam ini dengan tombol yang ada disampingnya
			<br>
			Perhatikan ketika jam nya di stop, maka kita akan mendapatkan satuan derajat dari Jarum Jam,Jarum Menit, dan jarum detik dari jam ini.
			</p>
			<p class="text-left"> </p>
		</div>
		<div class="col-md-12">
			<div class="col-md-3">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<button id="btnStart" class="btn btn-rounded btn-lg btn-alt1"><i class="icon icon-left s7-play"></i> Start</button>
				<br><br><br>
				<div class="panel panel-full-alt3" style="width:150px;">
					<div class="panel-body text-center">
						<h4 id="jam">Jam 	= </h4>
						<h4 id="menit">Menit 	= </h4>
						<h4 id="detik">Detik 	= </h4>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			<div class="clockbox">
					<svg id="clock" xmlns="http://www.w3.org/2000/svg" width="600" height="600" viewBox="0 0 600 600">
						<g id="face">
							<circle class="circle" cx="300" cy="300" r="253.9"/>
							<path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"/>
							<circle class="mid-circle" cx="300" cy="300" r="16.2"/>
						</g>
						<g id="hour">
							<path class="hour-arm" d="M300.5 298V142"/>
							<circle class="sizing-box" cx="300" cy="300" r="253.9"/>
						</g>
						<g id="minute">
							<path class="minute-arm" d="M300.5 298V67"/>
							<circle class="sizing-box" cx="300" cy="300" r="253.9"/>
						</g>
						<g id="second">
							<path class="second-arm" d="M300.5 350V55"/>
							<circle class="sizing-box" cx="300" cy="300" r="253.9"/>
						</g>
					</svg>
				</div><!-- .clockbox -->
			</div>
			<div class="col-md-2">
			<br><br><br><br><br><br><br><br><br><br><br><br>
				<button id="btnStop" class="btn btn-rounded btn-lg btn-primary"><i class="icon icon-left s7-power"></i> Stop</button>
				<br><br><br>
				<div class="panel panel-full-alt3" style="width:150px;">
					<div class="panel-heading">
						<h3>Derajat</h3>
					</div>
					<div class="panel-body text-center">
						<h4 id="deg_jam">Jam 	= </h4>
						<h4 id="deg_menit">Menit 	= </h4>
						<h4 id="deg_detik">Detik 	= </h4>
					</div>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	<div>
		<br><br>
		<h3 class="text-left">2. Ukuran Radian </h3>
		<img src="<?php echo base_url();?>assets/img/sudut2.jpg" class="img-rounded" width="400px" height="400px">
		<br>
		<p class="text-left">
			Perhatikan gambar lingkaran diatas. Satu Radian adalah ukuran sudut pusat lingkaran yang memotong
			busur yang panjagnnya sama dengan radius lingkaran. Karena radian diukur dalam satuan radius (r)
			pada busur suatu lingkaran dan satu lingkaran penuh adalah 2 π r, maka dalam satu lingkaran terdapat
			2 π radian.
			<br><br>
		</p>
		<div class="panel panel-full-alt3" style="display:inline-block;">
			<div class="panel-heading">
				<h4>Harap diingat</h4>
			</div>
			<div class="panel-body">
				<p class="text-left">
					1 radian &emsp; = &emsp; (busur r / keliling lingkaran) x 360°
					<br>
					1 radian &emsp; = &emsp; ( r / 2π r) x 360°
					<br  id="hubungan">
					1 radian &emsp; = &emsp; 180° / π
				</p>
			</div>
		</div>
	</div>
	<br><br>
	<div>
		
		<h3 class="text-left">3. Hubungan Derajat dengan Radian </h3>
		<img src="<?php echo base_url();?>assets/img/sudut3.jpg" class="img-rounded" width="400px" height="400px">
		<p class="text-left">
			Perhatikan gambar diatas. Ukuran sudut 1 putaran penuh dalam derajat adalah
			360°.
			<br>
			Panjang busur 1 lingkaran penuh atau keliling adalah 2 π r.
			<br><br>
		</p>
		<div class="panel panel-full-alt3" style="display:inline-block;">
			<div class="panel-heading">
				<h4>Harap diingat</h4>
			</div>
			<div class="panel-body">
				<p class="text-left">
					Ukuran sudut 1 putaran penuh &emsp; = &emsp; keliling lingkaran / jari jari lingkaran
					<br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; = &emsp; 2π r / r
					<br>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; = &emsp; 2π radian
					<br><br>
					1 radian didefinisikan sama dengan 180° / π &emsp; = &emsp; 57,296°
				</p>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
				<br><br><br><br><br><br><br><br><br>
				<div class="panel panel-full-alt3" style="display:inline-block;">
					<div class="panel-heading">
						<h4>Perhatikan Jam Analog disamping</h4>
					</div>
					<div class="panel-body">
						<p class="text-left">
							Jam Analog disamping berada pada posisi jam 9.00 tepat.
							<br>
							yang berarti jam tersebut berada pada <strong>Sudut 45°</strong>
							<br>
							Seperti rumus diatas, karena 1 Radian   =  57,296°, 
							<br> 
							Maka 45° = <strong>0,785398 Radian</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- gambar jam 9 disini -->
				<img src="<?php echo base_url();?>assets/img/9clock.gif" class="img-rounded" width="400px" height="400px">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

const HOURHAND = document.querySelector('#hour');
const MINUTEHAND = document.querySelector("#minute");
const SECONDHAND = document.querySelector("#second");

var date = new Date();
 let hr = date.getHours();
 let min = date.getMinutes();
 let sec = date.getSeconds();
 var interval;


 //console.log("Hour: "+hr+ " Minute: "+ min + " Second: "+ sec);

let hrPosition = hr*360/12 + ((min * 360/60)/12) ;
let minPosition = (min * 360/60) + (sec* 360/60)/60;
let secPosition = sec * 360/60;

HOURHAND.style.transform = "rotate(" + hrPosition + "deg)";
MINUTEHAND.style.transform = "rotate(" + minPosition + "deg)";
SECONDHAND.style.transform = "rotate(" + secPosition + "deg)";



function run_the_clock(){
 var date = new Date();
 let hr = date.getHours();
 let min = date.getMinutes();
 let sec = date.getSeconds();
 //console.log("Hour: "+hr+ " Minute: "+ min + " Second: "+ sec);

 hrPosition = hr*360/12 + ((min * 360/60)/12) ;
 minPosition = (min * 360/60) + (sec* 360/60)/60;
 secPosition = sec * 360/60;

 //Then we need to apply these numbers as degrees in the inline   styles for transform on each of the objects.
 HOURHAND.style.transform = "rotate(" + hrPosition + "deg)";
 MINUTEHAND.style.transform = "rotate(" + minPosition + "deg)";
 SECONDHAND.style.transform = "rotate(" + secPosition + "deg)";
}

$("#btnStart").on("click",function(){
	interval = setInterval(run_the_clock, 1000);
});
$("#btnStop").on("click",function(){
	console.log("stop di klik");
	//interval = setInterval(run_the_clock, 0);
	var date = new Date();
 	let hr = date.getHours();
	let min = date.getMinutes();
 	let sec = date.getSeconds();

	let stopHr = hrPosition;
	let stopMin = minPosition;
	let stopSec = secPosition;

	HOURHAND.style.transform = "rotate(" + stopHr + "deg)";
	MINUTEHAND.style.transform = "rotate(" + stopMin + "deg)";
 	SECONDHAND.style.transform = "rotate(" + stopSec + "deg)";

	 console.log("Hour: "+hr+ " Minute: "+ min + " Second: "+ sec);
	 console.log("Derajat Hour: "+stopHr+ "derajat Minute: "+ stopMin + "derajat Second: "+ stopSec);

	 $("#jam").text("Jam 	= "+hr);
	 $("#menit").text("Menit 	= "+min);
	 $("#detik").text("Detik 	= "+sec);

	 $("#deg_jam").text("Jam 	= "+stopHr+"°");
	 $("#deg_menit").text("Menit 	= "+stopMin+"°");
	 $("#deg_detik").text("Detik 	= "+stopSec+"°");

	 clearInterval(interval); 
	
	
});

function stop(){
	
}

</script>
