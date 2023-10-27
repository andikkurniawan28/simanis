@include("template.landing.header")

<section id="hero" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<h1>KEBUN LAWANG</h1>
				<h2>
					Integrated Accounting System
					<br>
					<a style="width: 150px;" href="{{ route("login") }}" class="btn btn-primary mt-3">Masuk Aplikasi</a>
				</h2>
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
				<img src="https://grahaanggreksimanis.com/assets/bg-icon.jpeg" alt="">
			</div>
		</div>
	</div>
</section>

@include("template.landing.footer")
