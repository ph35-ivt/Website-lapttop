<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>
		<base href="{{asset('')}}">
		<!-- JavaScript -->		
<!-- 
<script src="user/js/alertify.min.js"></script>
<link rel="stylesheet" href="user/css/alertify.min.css"/>
<link rel="stylesheet" href="user/css/themes/default.min.css"/>
<link rel="stylesheet" href="user/css/themes/semantic.min.css"/>
<link rel="stylesheet" href="user/css/themes/bootstrap.min.css"/>
<link rel="stylesheet" href="user/css/alertify.rtl.min.css"/>
<link rel="stylesheet" href="user/css/themes/default.rtl.min.css"/>
<link rel="stylesheet" href="user/css/themes/semantic.rtl.min.css"/>
<link rel="stylesheet" href="user/css/themes/bootstrap.rtl.min.css"/> -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
		<!-- Bootstrap CSS -->
		<script
 		 src="https://code.jquery.com/jquery-2.1.3.js"
 		 integrity="sha256-goy7ystDD5xbXSf+kwL4eV6zOPJCEBD1FBiCElIm+U8="
  		crossorigin="anonymous"></script>
  		<script type="text/javascript">
  			$(function(){
  				// $('.run').click(function(event)){
  				// 	alertify.alert('This is an alert').show();
  				// }
  				$('.run').click(function(event){
  					alertify.confirm('  Bạn có muốn xóa ko', 'Xóa hay không', function(){ alertify.success('Ok') }
                , function(){ alertify.error('Cancel')});
  				    


  				  });
  				$('.run').click(function(event){
  					alertify.alert('Alert Title', 'Alert Message!', function(){ alertify.success('Ok'); });

  				    


  				  });
  				// Alert Modal Type
		$(document).on('click', '#success', function(e) {
			swal(
				'Success',
				'You clicked the <b style="color:green;">Success</b> button!',
				'success'
			)
		});

		$(document).on('click', '#error', function(e) {
			swal(
				'Error!',
				'You clicked the <b style="color:red;">error</b> button!',
				'error'
			)
		});

		$(document).on('click', '#warning', function(e) {
			swal(
				'Warning!',
				'You clicked the <b style="color:coral;">warning</b> button!',
				'warning'
			)
		});

		$(document).on('click', '#info', function(e) {
			swal(
				'Info!',
				'You clicked the <b style="color:cornflowerblue;">info</b> button!',
				'info'
			)
		});

		$(document).on('click', '#question', function(e) {
			swal(
				'Question!',
				'You clicked the <b style="color:grey;">question</b> button!',
				'question'
			)
		});

	// Alert With Custom Icon and Background Image
		$(document).on('click', '#icon', function(event) {
			swal({
				title: 'Custom icon!',
				text: 'Alert with a custom image.',
				imageUrl: 'https://image.shutterstock.com/z/stock-vector--exclamation-mark-exclamation-mark-hazard-warning-symbol-flat-design-style-vector-eps-444778462.jpg',
				imageWidth: 200,
				imageHeight: 200,
				imageAlt: 'Custom image',
				animation: false
			})
		});

		$(document).on('click', '#image', function(event) {
			swal({
				title: 'Custom background image, width and padding.',
				width: 700,
				padding: 150,
				background: '#fff url(https://image.shutterstock.com/z/stock-vector--exclamation-mark-exclamation-mark-hazard-warning-symbol-flat-design-style-vector-eps-444778462.jpg)'
			})
		});

	// Alert With Input Type
		$(document).on('click', '#subscribe', function(e) {
			swal({
			  title: 'Submit email to subscribe',
			  input: 'email',
			  inputPlaceholder: 'Example@email.xxx',
			  showCancelButton: true,
			  confirmButtonText: 'Submit',
			  showLoaderOnConfirm: true,
			  preConfirm: (email) => {
			    return new Promise((resolve) => {
			      setTimeout(() => {
			        if (email === 'example@email.com') {
			          swal.showValidationError(
			            'This email is already taken.'
			          )
			        }
			        resolve()
			      }, 2000)
			    })
			  },
			  allowOutsideClick: false
			}).then((result) => {
			  if (result.value) {
			    swal({
			      type: 'success',
			      title: 'Thank you for subscribe!',
			      html: 'Submitted email: ' + result.value
			    })
			  }
			})
		});

	// Alert Redirect to Another Link
		$(document).on('click', '#link', function(e) {
		    swal({
				title: "Are you sure?", 
				text: "You will be redirected to https://utopian.io", 
				type: "warning",
				confirmButtonText: "Yes, visit link!",
				showCancelButton: true
		    })
		    	.then((result) => {
					if (result.value) {
					    window.location = 'https://utopian.io';
					} else if (result.dismiss === 'cancel') {
					    swal(
					      'Cancelled',
					      'Your stay here :)',
					      'error'
					    )
					}
				})
		});


  			});
  		</script>
  		
	</head>
	<body>
		<h1>Hello, world!</h1>
         <button class="run">run</button>
          <button id="success">Success</button>
      <button id="error">Error</button>
      <button id="warning">Warning</button>
      <button id="info">Info</button>
      <button id="question">Question</button>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>