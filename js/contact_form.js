/****
*	Author: Tanvir Shahriar Rifat
*	Email: rifat.csedu20@gmail.com
*****/


$(document).ready(function(){
	
	$("#submit").click(function(){
			
			var name1= $("#name").val();
			var email1= $("#email").val();
			var phone1= $("#phone").val();
			var comment1= $("#comment").val();
			
			if(name1== '' || email1== ''){
				alert("Please fill the required fields");
			}else{
				
				$.post("sendmail.php",{
					
					name: name1,
					email: email1,
					phone: phone1,
					comment: comment1
				},function(data){
					$("#returnmessage").html("");
					$("#returnmessage").append(data);
					
					if(data.includes("Thank you for your valuable feedback")){
						$("#form")[0].reset();
					}
					
				});
				
			}
		
		
	});
	
	
});