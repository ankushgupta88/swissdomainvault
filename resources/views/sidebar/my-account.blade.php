    <!--my account block-->
    <div class="account-block mt-4 mt-md-0">
    	<h6 class="panel-title fw-bold">
            <i class="fa fa-user pe-2"></i> My Account  
         </h6>
    	<ul class="Categories-link add-link list-unstyled">
    		<li>
    			<a href="{{ url('/clientarea/edit-account') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i>  My Details </a>
    		</li>
    		<li>
    			<a href="{{ url('/clientarea') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Payment Methods </a>
    		</li>
    		<li>
    			<a href="{{ url('/clientarea/sub-account') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Contacts/Sub-Accounts </a>
    		</li>
    		<li>
    			<a href="{{ url('/clientarea/change-password') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Change Password </a>
    		</li>
    		<li>
    			<a href="{{ url('/clientarea/security-setting') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Security Settings </a>
    		</li>
    		<li>
    			<a href="{{ url('/clientarea/email-history') }}"> <i class="fa fa-angle-double-right color-primary pe-2" aria-hidden="true"></i> Email History </a>
    		</li>
    	</ul>
    </div>

