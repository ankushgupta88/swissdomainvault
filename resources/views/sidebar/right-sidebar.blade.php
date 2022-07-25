<!--categories block-->
<div class="categories-block mt-4 mt-md-0">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-shopping-cart pe-2"></i>Categories
     </h6>
	<ul class="Categories-link add-link list-unstyled">
		<li>
			<a href="{{ url('/hosting-service?slug=cloud-hosting') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Cloud Hosting </a>
		</li>
		<li>
			<a href="{{ url('/hosting-service?slug=wordpress-hosting') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Wordpress Hosting </a>
		</li>
		<li>
			<a href="{{ url('/hosting-service?slug=vps-hosting') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> VPS Hosting </a>
		</li>
		<li>
			<a href="{{ url('/hosting-service?slug=dedicated-servers') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Dedicated Server </a>
		</li>
	</ul>
</div>
<!--Actions block-->
<div class="Actions-block mt-5">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-shopping-cart pe-2"></i>Actions
     </h6>
	<ul class="Actions-link add-link list-unstyled">
		<li>
			<a href="{{ url('/cart?a=add&domain=register') }}"> <i class="fa fa-globe fa-fw color-primary pe-2" aria-hidden="true"></i> Register a New Domain </a>
		</li>
		<li>
			<a href="{{ url('/cart?a=add&domain=transfer') }}"> <i class="fa fa-share fa-fw color-primary pe-2" aria-hidden="true"></i> Transfer in a Domain </a>
		</li>
		<li>
			<a href="{{ url('/cart?a=view') }}"> <i class="fa fa-shopping-cart fa-fw color-primary pe-2" aria-hidden="true"></i> View Cart </a>
		</li>
	</ul>
</div>
<!--Choose Currency block-->
<div class="Choose-Currency-block mt-5">
	<h6 class="panel-title fw-bold">
        <i class="fa fa-shopping-cart pe-2"></i>Actions
     </h6>
	<form class="mt-4">
		<select class="form-select rounded-0 fs-14" aria-label="Default select">
			<option value="1">CHF</option>
			<option value="2">USD</option>
		</select>
	</form>
</div>