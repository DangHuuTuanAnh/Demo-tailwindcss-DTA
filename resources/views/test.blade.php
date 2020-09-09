<!DOCTYPE html>
<html>
<head>
	<text-colortitle></text-colortitle>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
		.resume:before {
			content: "";
			position: absolute;
			bottom: -10px;
			left: 48.5%;
			border-top: 10px solid #eee;
			border-right: 20px solid transparent;
			border-left: 20px solid transparent;
		}
	</style>

</head>
<body>
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators flex flex-col flex-wrap-reverse">
			<li style='border-radius:100%!important;' class="w-2 h-2 bg-white rounded-full" data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li style='border-radius:100%!important;' class="w-2 h-2 bg-white rounded-full" data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li style='border-radius:100%!important;' class="w-2 h-2 bg-white rounded-full" data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/banner.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<div class="jumbotron  bg-transparent mb-26 p-28">
						<div class="word-banner">
							<hr class='border-solid border-2 border-white'>
							<h1 class="display-4 font-semibold">WEB & GRAPHIC DISGNER</h1>
							<hr class='border-solid border-2 border-white'>
						</div>
						<button class="bg-transparent  border-solid border-2 border-colorwhite p-2 mt-10 px-5 text-colorwhite">LEARN MORE</button>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/banner.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<div class="jumbotron  bg-transparent mb-26 p-28">
						<div class="word-banner">
							<hr class='border-solid border-2 border-white'>
							<h1 class="display-4 font-semibold">WEB & GRAPHIC DISGNER</h1>
							<hr class='border-solid border-2 border-white'>
						</div>	
						<button class="bg-transparent border-solid border-2 border-colorwhite p-2 mt-10 px-5 text-colorwhite">LEARN MORE</button>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/banner.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<div class="jumbotron  bg-transparent mb-26 p-28">
						<div class="word-banner">
							<hr  class='border-solid border-2 border-white'>
							<h1 class="display-4 font-semibold">WEB & GRAPHIC DISGNER</h1>
							<hr class='border-solid border-2 border-white'>
						</div>
						<button class=" bg-transparent border-solid border-2 border-colorwhite p-2 mt-10 px-5 text-colorwhite">LEARN MORE</button>
					</div>
				</div>
			</div>
		</div>
		<!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" arihidden="true"></span>
			<span class="sr-only">Next</span>
		</a> -->
	</div>
	<div class="container-fluid bg-bgcolormenu">
		<div class="container px-32 pb-3">
			<div class="row pt-4">
				<div class="col-3">
					<!-- <p>LOGO</p> -->
					<img class='w-2/5' src="img/logo.png">
				</div>
				<!-- list-menu -->
				<div class="float-right col-9 font-bold">
					<ul class="flex space-x-5 text-white" style="
					justify-content: flex-end;">
					<li class="ml-5 hover:text-green-600">HOME</li>
					<li class="ml-5 hover:text-green-600">ABOUT ME</li>
					<li class="ml-5 hover:text-green-600">SKILLS</li>
					<li class="ml-5 hover:text-green-600">RESUME</li>
					<li class="ml-5 hover:text-green-600">TESTIMONIALS</li>
					<li class="ml-5 hover:text-green-600">PORTFOLIO</li>
					<li class="ml-5 hover:text-green-600">CONTACT ME</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid p-12">
	<div class="container  px-32 pb-3">
		<div class="flex">
			<div>
				<h4 class="text-colortitle font-bold text-2xl">VALUES</h4>
				<br>
				<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei
				tempor incididunt ut labore et dolore</p>
			</div>
			<div class="mx-10" >
				<h4 class="text-colortitle font-bold text-2xl">GOALS</h4>
				<br>
				<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei
				tempor incididunt ut labore et dolore </p>
			</div>
			<div>
				<h4 class="text-colortitle font-bold text-2xl">HOBBIES</h4>
				<br>
				<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod
				tempor incididunt ut labore et dolore </p>
			</div>
		</div>

	</div>
</div>
<div class="container-fluid bg-gray-200">
	<div class="row">
		<div class="col-5">
			<img src="img/1.png">
		</div> 
		<div class="col-7 p-12">
			<h4 class="text-colortitle font-bold text-2xl mb-2">ABOUT ME</h4>
			<p class="text-colorcontent pb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam illo laboriosam, quis asperiores vitae. Numquam unde magnam, vero ullam eligendi. Fugit tempore tenetur iusto officiis magni. Repellat ullam eaque atque.</p>
			<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum distinctio quo, consectetur fuga ipsa nulla maxime iure.</p>
			<div class="row mt-24">
				<div class="col-6">
					<div class="row">
						<div class="col-3">
							<i class="fa fa-opera  text-green-500 text-4xl"></i>
						</div>
						<div class="col-9">
							<h5 class="text-colortitle font-bold text-xl mb-2">WEB DESIGN</h5>
							<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, neque.</p>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-3">
							<i class="fa fa-pencil text-green-500 text-4xl"></i>
						</div>
						<div class="col-9">
							<h5 class="text-colortitle font-bold text-xl mb-2">GRAPHIC DESIGN</h5>
							<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, neque.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-10">
				<div class="col-6">
					<div class="row">
						<div class="col-3">
							<i class="fa fa-users text-green-500 text-4xl"></i>
						</div>
						<div class="col-9">
							<h5 class="text-colortitle font-bold text-xl mb-2">ONLINE MARKETING</h5>
							<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, neque.</p>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-3">
							<i class="fa fa-at text-green-500 text-4xl"></i>
						</div>
						<div class="col-9">
							<h5 class="text-colortitle font-bold text-xl mb-2">SEO</h5>
							<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, neque.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container px-32 pb-3 p-12">
		<h4 class="text-colortitle font-bold text-2xl">MY SKILLS</h4>
		<div class="row">
			<div class="col-6">
				<p class="text-colorcontent mb-4 pt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci mollitia voluptas aperiam nulla eum, nesciunt ea at repellat temporibus distinctio!</p>
				<p class="text-colorcontent mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dicta quisquam reprehenderit, sunt natus a.</p>
				<!-- <button type="button" class="btn btn-outline-success">CONTACT</button> -->

				<button class="px-4 py-2 border border-colorborder bg-white text-green-500 hover:bg-green-500 hover:text-white font-bold">CONTACT</button>
			</div>
			<div class="col-6">
				<label class="text-colortitle font-bold"><b>PHOTOSHOP</b></label>
				<div class="progress h-6 rounded-none">
					<div class="text-right font-bold pr-2 progress-bar bg-green-500" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
				</div>
				<br>
				<label class="text-colortitle font-bold"><b>ILLUSTRATOR</b></label>
				<div class="progress h-6 rounded-none">
					<div class="text-right font-bold pr-2 progress-bar bg-green-500" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
				</div>
				<br>
				<label class="text-colortitle font-bold"><b>HTML/CSS</b></label>
				<div class="progress h-6 rounded-none">
					<div class="text-right font-bold pr-2 progress-bar bg-green-500" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
				</div>
				<br>
				<label class="text-colortitle font-bold"><b>PHP/MYSQL</b></label>
				<div class="progress h-6 rounded-none">
					<div class="text-right font-bold pr-2 progress-bar bg-green-500" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
				</div>
				<br>

			</div>
		</div>
	</div>
</div>
<div class="container-fluid text-center">
	<div class="jumbotron resume  bg-bgcolorResume relative">
		<div class="container px-32 pb-3">
			<h4 class="text-colortitle font-bold text-2xl mb-2">RESUME</h4>
			<p class="text-colorcontent mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium vitae culpa, id, debitis sunt ratione magnam perferendis nemo fugiat ipsam laborum recusandae commodi in voluptatibus eos quos explicabo, nisi laboriosam.</p>
			<!-- <button type="button" class="btn btn-outline-success">DOWNLOAD RESUME</button> -->
			<button class="px-4 py-2 border border-colorborder bg-bgcolorResume text-green-500 hover:bg-green-500 hover:text-white font-bold">DOWNLOAD RESUME</button>

		</div>
	</div>

</div>
<div class="container-fluid">
	<div class="container px-32 pb-3 p-12">
		<h4 class="text-colortitle font-bold text-2xl pb-5">MY EDUCATION</h4>
		<div class="row mb-24">
			<div class="col-6">
				<p class="text-colorcontent mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quibusdam? Culpa, impedit, qui? Corrupti fugit sint numquam mollitia, omnis dolorum.</p>
				<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis eum alias deserunt eaque laborum id.</p>
			</div>
			<div class="col-6">
				<div>
					<h5 class="text-colortitle font-bold text-xl">GRAPHIC DESIGN DIPLOMA</h5>
					<p class="text-colorcontent mb-2">Reeves College / June 2008 - May 2010</p>
					<div class=" w-1/6 text-center bg-green-500 px-2 text-colorwhite mb-4">4.0 GPA</div>
					<hr>
					<p class="text-colorcontent mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam maxime accusamus sit, minus et provident.</p>
				</div>
				<br>
				<div>
					<h5 class="text-colortitle font-bold text-xl">CIT DIPLOMA</h5>
					<p class="text-colorcontent mb-2">Reeves College / June 2008 - May 2010</p>
					<div class=" w-1/6 text-center bg-green-500 px-2 text-colorwhite mb-4 ">4.0 GPA</div>
					<hr>
					<p class="text-colorcontent mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam maxime accusamus sit, minus et provident.</p>
				</div>
			</div>
		</div>
		<hr>
	</div>
</div>
<div class="container-fluid">
	<div class="container px-32 pb-3 p-12">
		<h4 class="text-colortitle font-bold text-2xl">WORK EXPERIENCE</h4>
		<div class="row pt-8">
			<div class="col-6">
				<p class="text-colorcontent mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, tempore dicta odit sapiente vel! Dolorem ut tempora, dolore tenetur dignissimos maiores consequatur nemo, adipisci maxime delectus deleniti? Rerum, aliquid, veritatis.</p>
				<p class="text-colorcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis eum alias deserunt eaque laborum id.</p>
			</div>
			<div class="col-6">
				<div>
					<h5 class="text-colortitle font-bold text-xl">LEAD WEB DESIGNER</h5>
					<p class="text-colorcontent mb-2">Reeves College / June 2008 - May 2010</p>
					<div class=" w-1/6 text-center bg-green-500 px-2 text-colorwhite mb-4">4.0 GPA</div>
					<hr>
					<p class="text-colorcontent mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam maxime accusamus sit, minus et provident.</p>
				</div>
				<br>
				<div>
					<h5 class="text-colortitle font-bold text-xl">JUNIOR DESIGNER</h5>
					<p class="text-colorcontent mb-2">Reeves College / June 2008 - May 2010</p>
					<div class=" w-1/6 text-center bg-green-500 px-2 text-colorwhite mb-4">4.0 GPA</div>
					<hr>
					<p class="text-colorcontent mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam maxime accusamus sit, minus et provident.</p>
				</div>
				<div>
					<h5 class="text-colortitle font-bold text-xl">WEB DEVELOPER</h5>
					<p class="text-colorcontent mb-2">Reeves College / June 2008 - May 2010</p>
					<div class=" w-1/6 text-center bg-green-500 px-2 text-colorwhite mb-4">4.0 GPA</div>
					<hr>
					<p class="text-colorcontent mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam maxime accusamus sit, minus et provident.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid text-center bg-bgcolorResume">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li style='border-radius:100%!important;' class="rounded-full h-2 w-2 bg-green-600" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li style='border-radius:100%!important;' class="rounded-full h-2 w-2 bg-green-600" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li style='border-radius:100%!important;' class="rounded-full h-2 w-2 bg-green-600" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="jumbotron bg-bgcolorResume">
					<div class="container px-32 pb-3">
						<p class="text-colorcontent"><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt qui mollitia magni explicabo hic ipsa saepe assumenda. Earum provident commodi adipisci delectus expedita laboriosam perferendis vel nesciunt natus quae rem laudantium distinctio veritatis, laborum deleniti praesentium iure sed sapiente repellendus similique eos corrupti! Repudiandae, eligendi?"</i></p>
						<h5 class="text-colortitle font-bold text-xl">JOIN STONE</h5>
					</div>

				</div>
			</div>
			<div class="carousel-item">
				<div class="jumbotron bg-bgcolorResume">
					<div class="container px-32 pb-3">
						<p class="text-colorcontent"><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt qui mollitia magni explicabo hic ipsa saepe assumenda. Earum provident commodi adipisci delectus expedita laboriosam perferendis vel nesciunt natus quae rem laudantium distinctio veritatis, laborum deleniti praesentium iure sed sapiente repellendus similique eos corrupti! Repudiandae, eligendi?"</i></p>
						<h5 class="text-colortitle font-bold text-xl">JOIN STONE</h5>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="jumbotron bg-bgcolorResume">
					<div class="container px-32 pb-3">
						<p class="text-colorcontent"><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt qui mollitia magni explicabo hic ipsa saepe assumenda. Earum provident commodi adipisci delectus expedita laboriosam perferendis vel nesciunt natus quae rem laudantium distinctio veritatis, laborum deleniti praesentium iure sed sapiente repellendus similique eos corrupti! Repudiandae, eligendi?"</i></p>
						<h5 class="text-colortitle  font-bold text-xl">JOIN STONE</h5>
					</div>
				</div>
			</div>
		</div>
			<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a> -->
		</div>
	</div>
	<div class="container-fluid">
		<div class="container px-32 pb-3 p-12">
			<div class='text-center'>
				<h4 class="text-colortitle font-bold text-2xl">PORTFOLIO</h4>
				<p class="text-colorcontent p-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A sunt similique, minima maiores consequuntur incidunt, ipsa perspiciatis deleniti provident voluptate perferendis aspernatur necessitatibus! Repudiandae obcaecati illo distinctio</p>
			</div>
			<div class="row">
				<div class="col-4">
					<img class="w-full" src="img/fo1.jpg">
				</div>
				<div class="col-4">
					<img class="w-full" src="img/fo2.jpg">
				</div>
				<div class="col-4 relative">
					<img class="w-full absolute pr-1875" src="img/fo3-1.jpg">
					<div class='absolute pr-1875 bg-transparent opacity-50 h-full hover:bg-green-400 w-11/12'>
						<!-- <i class="fa fa-search color-hover"></i> -->
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-4">
					<img class="w-full" src="img/fo4.jpg">
				</div>
				<div class="col-4">
					<img class="w-full" src="img/f5.jpg" >
				</div>
				<div class="col-4">
					<img class="w-full" src="img/fo6.jpg" >
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-4">
					<img class="w-full" src="img/fo7.jpg" >
				</div>
				<div class="col-4">
					<img class="w-full" src="img/fo8.jpg" >
				</div>
				<div class="col-4">
					<img class="w-full" src="img/fo9.jpg" >
				</div>
			</div>
			<br>
		</div>
	</div>
	<footer class='bg-bgcolorfooter'>
		<div class="container px-32 pb-3 p-12">
			<h4 class="font-bold text-2xl text-colorwhite">CONTACT ME</h4>
			<div class="row">
				<div class="col-6">
					<div>
						<p class="text-colorcontent mb-4 mt-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ipsa quo illum temporibus fuga, porro dicta quia delectus! Error, quidem.</p>
					</div>
					<div>
						<p class="text-colorcontent" style="margin-bottom: 1px;">122 33rd Street East</p>
						<p class="text-colorcontent"  style="margin-bottom: 1px;">Saskatoon,SK</p>
						<p class="text-colorcontent"  style="margin-bottom: 1px;">SK179</p>
					</div>
					<br>
					<div>
						<div class='flex' style="color: #c5c7c8;">
							<span>Email:</span>
							<p style="margin-bottom: 1px;" class="text-colorcontent ml-8">info@focal.com</p>
						</div>
						<div class='flex' style="color: #c5c7c8;">
							<span>Phone:</span>
							<p class="text-colorcontent ml-8">123456789</p>
						</div>
					</div>
					
				</div>
				<div class="col-6">
					<p class="text-gray-300">Name *</p>
					<input class=" bg-bgcolorinput w-full border-none mb-3" type="text" name="">
					<p class="text-gray-300">Email address *</p>
					<input class=" bg-bgcolorinput w-full border-none mb-3" type="text" name="">
					<p class="text-gray-300">Address *</p>
					<textarea  class=" bg-bgcolorinput w-full border-none mb-3" rows="10" cols="40"></textarea>
					<button class=" bg-bgbtncontact text-colorwhite border-none font-bold px-8 p-3">CONTACT ME</button>
				</div>

			</div>
		</div>
		<div class="p-12 text-center bg-colorfooter">
			<p class="text-colortitle font-bold mb-4">COPYRIGHT 2014 FOCAL - BUILT WITH PASSION</p>
			<div  class="flex justify-center">
				<div class=" mx-1 bg-bgcolorinput w-6 rounded-full">
					<i class="fa fa-twitter  text-color hover:text-white"></i>
				</div>
				<div class=" mx-1 bg-bgcolorinput w-6 rounded-full">
					<i class="fa fa-facebook-official text-color hover:text-white"></i>
				</div>
				<div class=" mx-1 bg-bgcolorinput w-6 rounded-full">
					<i class="fa fa-pinterest-p text-color hover:text-white"></i>
				</div>
				<div class=" mx-1 bg-bgcolorinput w-6 rounded-full">
					<i class="fa fa-twitter text-color hover:text-white"></i>
				</div>
				<div class=" mx-1 bg-bgcolorinput w-6 rounded-full">
					<i class="fa fa-dribbble text-color hover:text-white"></i>
				</div>
				<div class=" mx-1 bg-bgcolorinput w-6 rounded-full">
					<i class="fa fa-linkedin-square text-color hover:text-white"></i>
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>