$(document).ready(function(){
	$(".goindexbtn").click(function(e){
		$("#connect").removeClass("d-block");
		$("#connect").addClass("d-none");
		$("#signup").removeClass("d-block");
		$("#signup").addClass("d-none");
		$("#connZone").css("height","13em");

		$("#connChoice").removeClass("d-none");
		$("#connChoice").addClass("d-inline");
	});
	
	$("#showLog").click(function(e){
		$("#connect").removeClass("d-none");
		$("#connect").addClass("d-block");
		$("#connZone").css("height","20em");
		
		$("#connChoice").removeClass("d-inline");
		$("#connChoice").addClass("d-none");
	});

	$("#showSign").click(function(e){
		$("#signup").removeClass("d-none");
		$("#signup").addClass("d-block");
		$("#connZone").css("height","25em");

		$("#connChoice").removeClass("d-inline");
		$("#connChoice").addClass("d-none");
	});
	
	$(".dayOn").click(function(e){
		let jour = $(this);
		if (jour.hasClass("selected"))
		{
			jour.removeClass("selected");
		}
		else
		{
			jour.addClass("selected");
		}

	});
	
	$('#resetReserv').click(function(){
		reserv = $('#addReserv').children();
		
		$(reserv).each(function( index, item){
			$(item).remove();
		})
		$(".dayOn").removeClass("selected");
	});

	function CheckDate()
	{
		$(".dayOn").click(function(e){
			date = $(this).attr("id");
			date = new Date (Date.parse(date));
			date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
			
			if($(this).hasClass("selected"))
			{
				reservBox = $("#addReserv");
				reservBox.append("<div class=' rounded bg-light text-black col-3 text-center m-1 p-0' id='"+date+"' style='max-height:1.5em;max-width:8em;'>"+date+"</div>");
			}
			else
			{
				$("#"+date).remove();
			}
		});
	}
	
		

	$.ajax({
		url:"user_handler.php",
		type:"post",
		data:{ "function":"is_logged" },
		success: function(data) {
			data = JSON.parse(data);
			if(data["res"])
			{
				$("#connZone").css("height","25em");
				CheckDate();

			}
		}
	});


	$("#sendReserv").click(function(){
		commentaire = $("#reservCommentaire").val();

		$($("#addReserv").children()).each(function(index,value){
			reservations = [$(value).attr("id"), commentaire];

			$.ajax({
				url:"reservation_handler.php",
				type:"post",
				data:{"function":"add_reserv", "reserv":reservations},
				success: function(data){
					data = JSON.parse(data);
					console.log(data);

					if(data["res"])
					{
						$($("#addReserv").children()).each(function(index,value){
							$(value).remove();
							$(".dayOn").removeClass("selected");
						});
					}
				}
			});
		});
	});

});
