var PAL;
if (!PAL) PAL = {}; 
if (!PAL.main) PAL.main = {};
(function(){

	var func = PAL.main;

	func.increaseHour = function(){
		var addHourBtn = $('.increaseHour');
		var addMinuteBtn = $('.increaseMinute');
		var minusHourBtn = $('.decreaseHour');
		var minusMinuteBtn = $('.decreaseMinute');
		console.log(addHourBtn);

		$(addHourBtn).on('click', function(){
			var instance = $(this).next('.time-input').val();
			if(instance<24){
				$(this).next('.time-input').val(parseInt(instance) + 1);
			}else{
				$(this).next('.time-input').val('24');
			}
			

		});
	}

	func.increaseMinute = function(){

	}

	func.decreaseHour = function(){

	}

	func.decreaseMinute = function(){

	}

})();


$(document).ready(function(){
	PAL.main.increaseHour();
});

