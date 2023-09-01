//ajax for buttons



$(document).ready(function()
{
	$("#provinces").click(function()
	{
	 $('#view').load("P_crud.php");
	});
});


$(document).ready(function()
{
   $("#categories").click(function()
   {
	$("#view").load("categoryCrud.php");
   });

});

$(document).ready(function()
{
   $("#user").click(function()
   {
   $("#view").load("user_crud.php");
   });

});






/*$("#contact_messages").click(function(){
	alert("hello messages");
	$("#veiw").load("show_contact_messages.php");
});

$("#users").click(function(){
	$("#veiw").load("showusers.php");
});


$("#home").click(function(){
//	alert("hello home");
	$("#veiw").load("org_inactive.php");
});



$("#payments").click(function(){
	$("#veiw").load("transactions.php");
});

$("#cards").click(function(){
	$("#veiw").load("showcards.php");
});

$("#cities").click(function(){
	$("#veiw").load("showcities.php");
});
*/
// $("#provinces").click(function(){
// 	$("#veiw").load("P_crud.php");
// });

// $("#categories").click(function(){
// 	console.log("")
// 	$("#veiw").load("categoryCrud.php");
// });

/*
setTimeout(function(){
  $('.loader_bg').fadeToggle();

}, 1500);
*/