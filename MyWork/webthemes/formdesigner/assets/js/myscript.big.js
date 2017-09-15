$(document).ready(function(){



	function show()
		      {
		          var block = document.getElementById('popupform');
		          block.style.left = parseInt(document.documentElement.clientWidth)/2 - parseInt(block.offsetWidth)/2 + "px";
		          block.style.top = parseInt(document.documentElement.clientHeight)/2 - parseInt(block.offsetHeight)/2 + "px";
		      }
	  
			$(".download2").click(function(){
				$('#popupform .inner h5').html("Заполните форму и скачайте презентацию");
				$('#popupform .inner form .more').val("Скачать");
				$('#popupform .inner form span').html("PDF, 18 Mb");
				$('#popupform .inner form .formfrom').val("Хотели скачать презентацию");
				$("#popup").fadeIn( "slow").css("display","block");
				$("#popupform").fadeToggle("slow").css("display","block");
				show();

			});
			
			$(".know-more").click(function(){
				$('#popupform .inner h5').html("Скачайте презентацию, чтобы узнать больше");
				$('#popupform .inner form .more').val("Скачать");
				$('#popupform .inner form span').html("PDF, 18 Mb");
				$('#popupform .inner form .formfrom').val("Хотели узнать больше");
				$("#popup").fadeIn( "slow").css("display","block");
				$("#popupform").fadeToggle("slow").css("display","block");
				show();

			});
			$(".callback").click(function(){
				$('#popupform .inner h5').html("Заказажите обратный звонок");
				$('#popupform .inner form .more').val("Заказать звонок");
				$('#popupform .inner form span').html("");
				$('#popupform .inner form .formfrom').val("Заказ звонка");
				$("#popup").fadeIn( "slow").css("display","block");
				$("#popupform").fadeToggle("slow").css("display","block");
				show();

			});
			$(".six .opens .more").click(function(){
				$('#popupform .inner h5').html("Получите расчёт инвестиций");
				$('#popupform .inner form .more').val("Получить");
				$('#popupform .inner form span').html("");
				$('#popupform .inner form .formfrom').val("Хотят получить расчёт инвестиций");
				$("#popup").fadeIn( "slow").css("display","block");
				$("#popupform").fadeToggle("slow").css("display","block");
				show();

			});

			$(".overlay,#close").click(function(){
				$("#popup").css("display","none");
				$("#popupform").css("display","none");
				$("#popupform2").css("display","none");
			});

			


			$("#phone").mask("+7 (999) 999-99-99");
			$("#phone2").mask("+7 (999) 999-99-99");
			var validCity = false;
			var validPhone = false;
			var validName = false;
			var validPhone2 = false;
			$("#form").submit(function(event){ 
				event.preventDefault();
				var city = $("#city").val();
				var phone = $("#phone").val();
				if (city == "") {
					$("#city").addClass("has-error");
					validCity = false;
				} else{
					$("#city").removeClass("has-error");
					validCity = true;
				}
				if (phone == "") {
					$("#phone").addClass("has-error");
					validPhone = false;
				} else{
					validPhone = true;
					$("#phone").removeClass("has-error");
				}
				
				if (validCity && validPhone) {
					$(".form").unbind("submit").submit();
				}
			});

			$("#form2").submit(function(event){ 
				event.preventDefault();
				var name = $("#name").val();
				var phone2 = $("#phone2").val();
				if (name == "") {
					$("#name").addClass("has-error");
					validName = false;
				} else{
					$("#name").removeClass("has-error");
					validName = true;
				}
				if (phone2 == "") {
					$("#phone2").addClass("has-error");
					validPhone2 = false;
				} else{
					validPhone2 = true;
					$("#phone2").removeClass("has-error");
				}
				
				if (validName && validPhone2) {
					$(".form").unbind("submit").submit();
				}
			});
		});