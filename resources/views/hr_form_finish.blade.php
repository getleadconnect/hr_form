<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Getlead HR Form">
    <meta name="author" content="Getlead">
    <title>Getlead | HR Form</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Google Web Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Core CSS -->
    <link href="{{asset('form_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('form_assets/css/style_workshop.css')}}" rel="stylesheet">
    <link href="{{asset('form_assets/css/custom.css')}}" rel="stylesheet">

	<link href="{{ asset('assets/intl-tel-input17.0.3/intlTelInput.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('assets/plugins/toastr/css/toastr.min.css')}}" rel="stylesheet" />

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-lg-5 background-image p-0" style="background-color: #235287;" data-background="url('form_assets/img/main_img_4.jpg')">
	            <div class="content-left-wrapper opacity-mask d-flex align-items-center justify-content-center text-left" data-opacity-mask="rgba(0, 0, 0, 0.4)">
	                <a href="#0" id="logo"><img src="{{asset('form_assets/img/getlead_logo.svg')}}" alt="" width="250" ></a>
	                <!-- <div class="social">
	                    <ul>
	                        <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
	                        <li><a href="#0"><i class="bi bi-twitter"></i></a></li>
	                        <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
	                    </ul>
	                </div> -->
	                <!-- /social -->
	                <div>
					
					<h1><em>Getlead HR Form</em></h1>
                        <p style="font-size: 12px;">Submit your details to apply for your desired position. Our HR team will review your application and get in touch with you soon.</p>
                    </div>
	                
	                <a class="smoothscroll btn_scroll_to Bounce infinite" href="#wizard_container"><i class="bi bi-arrow-down-short"></i></a>
	            </div>
	        </div>
			
			<div class="col-lg-7 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-9 col-xxl-9 mx-auto">
						
						<div class="row" style="font-family:Sans Serif">
						<div class="col-lg-12 col-xl-12 col-xxl-12 text-center">
						<img src="{{asset('form_assets/img/finish.png')}}" style="width:150px;" class="mb-3">
						<h2>Success!!!<h2>
						<h3>Your application successfully completed.</h3>
						<h4>Thank You.</h4>
						</div>
						</div>
 
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-4 copy">
				    <span class="float-start"><a href="https://getleadcrm.com/" target="new">© Getlead</a> </span>
				    <!--<a class="btn_help float-end" href="#modal-help" id="modal_h"><i class="bi bi-question-circle"></i> Help</a><br>-->
				</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Privacy data terms</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('form_assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('form_assets/js/common_scripts.js')}}"></script>
	<script src="{{asset('form_assets/js/velocity.min.js')}}"></script>
	<script src="{{asset('form_assets/js/functions.js')}}"></script>
	
	<!--<script src="{{asset('assets/plugins/jquery-form/jquery.form.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validation.min.js')}}"></script>-->
	
	  <script src="{{asset('assets/plugins/toastr/js/toastr.min.js')}}"></script>
	
@if(Session::get('success'))
	<script>
		toastr.success("{{Session::get('success')}}");
	</script>
@endif

@if (Session::get('fail'))
	<script>
		toastr.error("{{Session::get('fail')}}");
	</script>
@endif

	
<script type="text/javascript">

	
photo.onchange = evt => {
  const [file] = photo.files

        var allowedExtensions="";
	    allowedExtensions = /(\.jpg|\.jpeg|\.jpe|\.png)$/i; 
	    var filePath = file.name;
		console.log(file);
	
		if (!allowedExtensions.exec(filePath)) { 
			alert('Invalid file type, to select (jpg,jpeg,jpe,png) only.'); 
			$("#photo").val('');
		}
		
}

cv_file.onchange = evt => {
  const [file] = cv_file.files

        var allowedExtensions="";
	    allowedExtensions = /(\.pdf|\.doc|\.docx)$/i; 
	    var filePath = file.name;
		console.log(file);
	
		if (!allowedExtensions.exec(filePath)) { 
			alert('Invalid file type, To select (pdf,doc,docx) files only.'); 
			$("#cv_file").val('');
		}

}
		
</script>

</body>
</html>