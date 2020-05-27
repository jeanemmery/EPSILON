@extends('layouts.master')

@section('content')

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>NOUS CONTACTER</h2>
				<h4>Merci de votre patience.</h4>
			</div>
		</div>
		<div class="col-md-9">
            @if (Session::has('flash_message'))
    <div class="alert alert-success" role="alert">{{Session::get('flash_message')}}</div>
        @endif
        <form class="form" method="POST" action="{{route('contact.store')}}">
            @csrf
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nom">Nom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="message">Message:</label>
				  <div class="col-sm-10">
					<textarea type="textarea" id="message" name="message" class="form-control" required></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
        </form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection