$(document).ready(function(){
		$( "#to_email" ).autocomplete({
			  source: "http://localhost/karan-test-job/contacts/contactlist",
			  minLength: 1
		});
		
		
		
		$('.edittextarea').trumbowyg({
			btns: [['bold','italic','underline','strikethrough']]
		});
		
		$('#emailLink').click(function(){
			$('#contactEmailDiv').show();
		});
		
		$('#temp_email').click(function(){
			alert(tinyMCE.activeEditor.getContent());
		});
});