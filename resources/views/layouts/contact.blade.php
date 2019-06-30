@extends('layouts.footer_of_all_forms')
@section('contentfooter')
@endsection



@extends('layouts.header_of_all_forms')

@section('contentheader')


	<!--/contact-->
	<section class="contact py-lg-5">
		<div class="container py-5">
			<div class="title-section pb-sm-5 pb-3">
				<h2 class="heading-agileinfo text-center pb-4">Contact <span> Us</span></h2>
			</div>
			<div class="inner-sec-w3layouts-agileinfo">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d273690.1704056744!2d-74.59673804968976!3d40.72070782081099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1521532554788" class="map" style="border:0" allowfullscreen=""></iframe>
				</div>

				<div class="contact_grid_right mt-5">
					<h6>Please fill this form to contact with us.</h6>
					<form action="#" method="post">
						<div class="contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
							<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit">
							<input type="reset" value="Clear">
							<div class="clearfix"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--//contact-->

@endsection













