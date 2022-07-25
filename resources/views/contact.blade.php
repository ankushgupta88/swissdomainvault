@extends('layouts.master') 
@section('content')
  <!--banner inner section-->
    <section class="inner-banner-image d-flex align-items-center text-center" style="background-image:linear-gradient(0deg, rgb(0 0 0 / 75%), rgb(0 0 0 / 75%)), url('./public/assets/images/register-bg.jpg');">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="banner-title">
    					<h3 class="text-white text-uppercase fw-bold"> 
    					Pre-Sales Contact Us </h3> </div>
    			</div>
    		</div>
    	</div>
    </section>
    

   <!--contact Us section-->
    <section class="contact-us-content-section py-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 py-4">
				<div class="title pb-5 border-bottom">
					<h5 class="mb-0 fw-bold">Contact Us  <i class="fa fa-angle-double-right primary-clr" aria-hidden="true"></i>
					<span class="sub-title fw-light fs-15">  We're ready and waiting for your questions</span> </h5> </div>
			</div> 
			<div class="col-md-12 py-5">
			    <div class="contact-us-form dashed-border w-60">
			        @if(Session::has('success'))
                      <p class="success-msg">{{ Session::get('success') }}</p>
                   @endif
                   @if(Session::has('unsuccess'))
                      <p class="unsuccess-msg">{{ Session::get('unsuccess') }}</p>
                   @endif
			        <form method="POST" action="{{ route('submit.contact.us.email') }}" enctype="multipart/form-data" class="py-4 px-4">
                        @csrf
			            <div class="mb-3">
                            <label for="inputName" class="form-label fw-bold">Name</label>
                             <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror" id="inputName">
                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="inputEmail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                           <div class="mb-3">
                            <label for="inputSubject" class="form-label fw-bold">Subject</label>
                             <input type="subject" name="subject" value="{{ old('subject') }}" class="form-control" id="inputSubject">
                            </div>
                        <div class="mb-3">
                            <label for="inputMessage" class="form-label fw-bold">Message</label>
                            <textarea name="message" rows="10" class="form-control" id="inputMessage">{{ old('message') }}</textarea>
                        </div>
                        <div class="send-btn text-center  mb-4 mt-4">
        			        <button type="submit" class="btn btn-success rounded-0"><i class="fa fa-send pe-3"></i>Send Message</button>
        			    </div>
			        </form>
			   </div>
			</div>
         </div>
        </div>
    </section>
    
    
    
    
@endsection