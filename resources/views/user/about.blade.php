@extends('layouts.templete')

@section('content')

<div class="page-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-4 py-3 wow zoomIn">
				<div class="card-service">
					<div class="circle-shape bg-secondary text-white">
						<span class="mai-chatbubbles-outline"></span>
					</div>
					<p><span>Chat</span> with a doctors</p>
				</div>
			</div>
			<div class="col-md-4 py-3 wow zoomIn">
				<div class="card-service">
					<div class="circle-shape bg-primary text-white">
						<span class="mai-shield-checkmark"></span>
					</div>
					<p><span>One</span>-Health Protection</p>
				</div>
			</div>
			<div class="col-md-4 py-3 wow zoomIn">
				<div class="card-service">
					<div class="circle-shape bg-accent text-white">
						<span class="mai-basket"></span>
					</div>
					<p><span>One</span>-Health Pharmacy</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 wow fadeInUp">
				<h1 class="text-center mb-3">Welcome to Your Health Center</h1>
				<div class="text-lg">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.</p>
					<p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo, incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum nulla voluptatibus vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
				</div>
			</div>
			<div class="col-lg-10 mt-5">
				<h1 class="text-center mb-5 wow fadeInUp">Administration </h1>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4 wow zoomIn">
						<div class="card-doctor">
							<div class="header">
								<img src="{{asset('assets/img/blog/asa-mamun.jpg')}}" alt="">
								<div class="meta">
									<a href="#"><span class="mai-call"></span></a>
									<a href="#"><span class="mai-logo-whatsapp"></span></a>
								</div>
							</div>
							<div class="body">
								<p class="text-xl mb-0">ASA  Al-Mamun</p>
								<span class="text-sm text-grey">Founder of One-Health</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 wow zoomIn">
						<div class="card-doctor">
							<div class="header">
								<img src="{{asset('assets/img/blog/jalal-1.jpg')}}" alt="">
								<div class="meta">
									<a href="#"><span class="mai-call"></span></a>
									<a href="#"><span class="mai-logo-whatsapp"></span></a>
								</div>
							</div>
							<div class="body">
								<p class="text-xl mb-0">MD. JALAL S K </p>
								<span class="text-sm text-grey">Co-Founder of One-Health</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 wow zoomIn">
						<div class="card-doctor">
							<div class="header">
								<img src="{{asset('assets/img/blog/mohim.JPG')}}" alt="">
								<div class="meta">
									<a href="#"><span class="mai-call"></span></a>
									<a href="#"><span class="mai-logo-whatsapp"></span></a>
								</div>
							</div>
							<div class="body">
								<p class="text-xl mb-0">MOHIM MOLLA</p>
								<span class="text-sm text-grey">Co-Founder of One-Health</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection