@extends('layouts.app')
@include('layouts.extra')

@section('ContactArea')
 <!--================Contact Area =================-->
 <section class="contact_area p_120">
            <div class="container">
                <!-- <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div> -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>California, United States</h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">{{ env('CONTACT', '+9100000') }}</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@hoststudioz.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-9">
                    <form method="POST" class="row contact_form" action="{{ route('enquiry') }}">     
                     @csrf
                            <div class="col-md-6">
                           
                            <label for="name">Name <span class="text-muted"></span></label>
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                            @error('name')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
           
                                <div class="form-group">
                                    <label for="mobile">Mobile <span class="text-muted"></span></label>
                                    <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                                    @error('mobile')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email <span class="text-muted"></span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                               
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="query">Your Query / Message <span class="text-muted"></span></label>
                                    <textarea id="query" class="form-control @error('query') is-invalid @enderror" name="query" value="{{ old('query') }}" ></textarea>
                                    @error('query')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" name="submit-form" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
  
@endsection

@section('content')
    @if(isset($sentQuery) && $sentQuery==true)
    <div id="myModal" class="modal fade ">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title">Thankyou!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Our Team Will Contact You Soon. Check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>        
    @endif
   
    @yield('ContactArea')
@endsection