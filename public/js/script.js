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

		$(addHourBtn).on('click', function(){
			var instance = $(this).parents('.hour').find('.time-input');
			var value = parseInt(instance.val());

			if(value < 24){
				if(value>=10){

				}
			}else{
				instance.val(parseInt('24'));
			}

		});
	}

	func.increaseMinute = function(){
		var addMinuteBtn = $('.increaseMinute');
		$(addMinuteBtn).on('click',function(){
			var instance = $(this).parents('.minute').find('.time-input');
			var value = parseInt(instance.val());
			if(value < 60){
				instance.val(parseInt(value + 1));
			}else{
				instance.val(parseInt('60'));
			}
		});
	}

	func.decreaseHour = function(){
		var minusHourBtn = $('.decreaseHour');
		$(minusHourBtn).on('click', function(){
			var instance = $(this).parents('.hour').find('.time-input');
			var value = parseInt(instance.val());

			if(value <= 10 && value >= 1){
				instance.val('0' + parseInt(value - 1));
			}else if(value > 10){
				instance.val(parseInt(value - 1));
			}
		});
	}

	func.decreaseMinute = function(){
		var minusMinuteBtn = $('.decreaseMinute');
		$(minusMinuteBtn).on('click', function(){
			var instance = $(this).parents('.minute').find('.time-input');
			var value = parseInt(instance.val());

			if(value <= 10 && value >= 1){
				instance.val('0' + parseInt(value - 1));
			}else if(value > 10){
				instance.val(parseInt(value - 1));
			}
		});
	}
	

})();


$(document).ready(function(){
	PAL.main.increaseHour();
	PAL.main.increaseMinute();
	PAL.main.decreaseHour();
	PAL.main.decreaseMinute();
});
