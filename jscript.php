$(document).ready(function(){
	var error_email = false;
	$(document).on('submit', '#saveForm', function(event){
		event.preventDefault();
		$form = $(this);
		

 // Validation checker.   
 if (validation()==false || check_email()==false || check_phone()==false) {
 	var x = $form.serializeArray();	
 	$.each(x, function(i, field){
 		if($.trim(field.value) == ''){
 			$('#input-'+field.name).addClass('bcolor');
 			$('.label-'+field.name).addClass('label_val');
 			$('#input-'+field.name).removeClass('green_bcolor');
 			$('.label-'+field.name).removeClass('green_label_val');
 		}
 	});
 }
 else{
  // Ajax calling.  	
  $.ajax({
  	url: $form.attr('action'),
  	method: $form.attr('method'),
  	contentType: false,
  	processData: false,
  	cache: false,
  	data: new FormData(this),
  	success:function(response){
  		console.log(response);
  		$('#result').html(response);
  	}
  });
} 


// Check required fields and set focus.
function validation(){
	var fname = $('#input-fname').val();
	var firstname = $.trim(fname);
	if (firstname=='' || firstname==null) {
		$('#input-fname').focus();
		return false;
	}


	var lname = $('#input-lname').val();
	var lastname = $.trim(lname);
	if (lastname=='' || lastname==null) {
		$('#input-lname').focus();
		return false;
	}



	var email = $('#input-email').val().toLowerCase();
	var email = $.trim(email);
	if (email=='' || email==null) {
		$('#input-email').focus();
		return false;
	}



	var phone = $('#input-phone').val();
	var phone = $.trim(phone);
	if (phone=='' || phone==null) {
		$('#input-phone').focus();
		return false;
	}

}
});



// Dynamic display Email Validation error.
$(document).on('keyup', '#input-email', function(){
	var data = this.value.toLowerCase();
	console.log(data);
	$('#input-email').val(data);
	check_email();
});

// Dynamic display Phone Validation error.
$(document).on('keyup', '#input-phone', function(){
	check_phone();	
});


// remove validation css class
$(document).on('keydown', 'input:text', function(){
	$form = $(this);
	var x = $form.serializeArray();
	$.each(x, function(i, field){
		if(field.value != '' && $("#input-email").val()=="" &&  $("#input-phone").val()==""){
			$('#input-'+field.name).removeClass('bcolor');
			$('.label-'+field.name).removeClass('label_val');
			$('#input-'+field.name).addClass('green_bcolor');
 			$('.label-'+field.name).addClass('green_label_val');
		}

			// if(check_email()==false || check_phone()==false){
 		// 		$('#input-'+field.name).removeClass('green_bcolor');
			// $('.label-'+field.name).removeClass('green_label_val');
 		// 	}
	});
});


$(document).on('keyup', '#input-fname', function(){
	if($('#input-fname').val()!=""){
		$('#input-fname').addClass('green_bcolor');
 		$('.label-fname').addClass('green_label_val');
	}
});

$(document).on('keyup', '#input-lname', function(){
	if($('#input-lname').val()!=""){
		$('#input-lname').addClass('green_bcolor');
 		$('.label-lname').addClass('green_label_val');
	}
});

// $(document).on('keyup', '#input-email', function(){
// 	if($('#input-email').val()!="" && check_email()==false){
// 		$('#input-email').addClass('green_bcolor');
//  		$('.label-email').addClass('green_label_val');
// 	}
// });

// $(document).on('keyup', '#input-phone', function(){
// 	if($('#input-phone').val()!="" && check_phone()==false){
// 		$('#input-phone').addClass('green_bcolor');
//  		$('.label-phone').addClass('green_label_val');
// 	}
// });


// Check Email Validation.
function check_email(){
	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if(pattern.test($("#input-email").val())) {
		$('#input-email').removeClass('bcolor');
		$('.label-email').removeClass('label_val');
		$('#input-email').addClass('green_bcolor');
		$('.label-email').addClass('green_label_val');
		$('.label-email').html('Email');
		return true;
	} else {
		$('#input-email').removeClass('green_bcolor');
		$('.label-email').removeClass('green_label_val');
		$('#input-email').addClass('bcolor');
		$('.label-email').addClass('label_val');
		$('.label-email').html('Enter valid email id');
		return false;
	}	
}


// check phone number length (phone validation).
function check_phone(){
	var phone = $("#input-phone").val();
	if (phone.length!=10) {
		$('#input-phone').removeClass('green_bcolor');
		$('.label-phone').removeClass('green_label_val');
		$('#input-phone').addClass('bcolor');
		$('.label-phone').addClass('label_val');
		$('.label-phone').html('Enter valid phone number');
		return false;
	}
	else{
		$('#input-phone').removeClass('bcolor');
		$('.label-phone').removeClass('label_val');
		$('#input-phone').addClass('green_bcolor');
		$('.label-phone').addClass('green_label_val');
		$('.label-phone').html('Phone');
		return true;
	}
}

});

// Nuber Validation.
$(document).ready(function () {
	$("#input-phone").keypress(function (e) {
  	// allow numbers only.
  	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
  		return false;
  	}
  });
});

// Alphabets validation.
$(document).ready(function(){
	$("#input-fname").keypress(function(event){
		var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
        	event.preventDefault(); 
        }
    });
});

// Alphabets validation.
$(document).ready(function(){
	$("#input-lname").keypress(function(event){
		var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
        	event.preventDefault(); 
        }
    });
});