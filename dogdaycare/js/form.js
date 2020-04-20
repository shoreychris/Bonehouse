$(function(){
	$('.date-pick').datePicker({clickInput:true});
})
function check(){
	var item = $(":checkbox[name='binglei[]']:checked");
	if($("#name").val()=="" || $("#name").val()=="Please fill in your name")
	{
		alert("Please fill in your name");
		$("#name").focus();
		$("#name").css("background","#ccc");
		return false;
	}
	var partten = /^[\u4e00-\u9fa5_a-zA-Z0-9]+$/;
	
	
	var age = $.trim($("#ageses").val());
      var regAge = /^\d{1,2}$/;
     if(regAge.exec(age)==null)
     {
         alert("The age format is entered incorrectly!");
		 $("#ageses").focus();
		$("#ageses").css("background","#ccc");
		return false;
      }

	
	if($("#tel").val()=="" || $("#tel").val()=="Please fill in you number")
	{
		alert("Please fill in you number");
		$("#tel").focus();
		$("#tel").css("background","#ccc");
		return false;
	}
	var partten3 =/^\+?(?:\d\s?){10,12}$/;
	if(!partten3.test($("#tel").val()))
	{
		alert("Please fill in correct number");
		$("#tel").focus();
		$("#tel").css("background","#ccc");
		return false;
	}
	
}