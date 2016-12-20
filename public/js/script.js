
$(function(){

	var addHourBtn = $('.increaseHour');
	var addMinuteBtn = $('.increaseMinute');
	var minusHourBtn = $('.decreaseHour');
	var minusMinuteBtn = $('.decreaseMinute');
	var timeInput = $('.time-input');

	$(addHourBtn).on('click', increaseHour);
	$(addMinuteBtn).on('click', increaseMinute);
	$(minusHourBtn).on('click', decreaseHour);
	$(minusMinuteBtn).on('click', decreaseMinute);

	$(timeInput).on('change', function(){

	});

	function increaseHour(){
		
		var instance = $(this).parents('.hour').find('.time-input');
		var value = instance.val();
		
		if(!($.isNumeric(value)) || value.length != 2){
			if(!($.isNumeric(value)) && value.length != 2){
				notify('001');
				return;
			}else if(value.length != 2){
				notify('002');
				return;
		}

		value = parseInt(value);
		if(value < 24 && value >=9 ){
			instance.val(parseInt(value + 1));
		}else if(value<9){
			instance.val('0'+ parseInt(value + 1));
		}else{
			instance.val(parseInt('24'));
		}
		
	}

	function increaseMinute(){
		
		var instance = $(this).parents('.minute').find('.time-input');
		var value = parseInt(instance.val());

		if(value < 60 && value >=9 ){
			instance.val(parseInt(value + 1));
		}else if(value<9){
			instance.val('0'+ parseInt(value + 1));
		}else{
			instance.val(parseInt('60'));
		}

	}

	function decreaseHour(){
		
		var instance = $(this).parents('.hour').find('.time-input');
		var value = parseInt(instance.val());

		if(value <= 10 && value >= 1){
			instance.val('0' + parseInt(value - 1));
		}else if(value > 10){
			instance.val(parseInt(value - 1));
		}
		
	}

	function decreaseMinute(){
		
		var instance = $(this).parents('.minute').find('.time-input');
		var value = parseInt(instance.val());

		if(value <= 10 && value >= 1){
			instance.val('0' + parseInt(value - 1));
		}else if(value > 10){
			instance.val(parseInt(value - 1));
		}
		
	}
	

});

var notify = function(code,delay=3000){
	var ele = $('<span></span>');
	ele.addClass('notify');
	var text = "";
	switch(code){
		case '001':
			text = "time must be numeric and max length 2 digit!";
			ele.html(text);
			ele.addClass('error');
			$('body').append(ele);
			$(ele).animate({'top':'+=30px','opacity':'+=0.2'},350, function(){
				
				$(this).animate({'opacity':'1'},delay,function(){
					$(this).animate({'opacity':'-=0.2','top':'-=40px'},500,function(){
						$(this).remove();
					});
				});
						
			});
			break;
		case '002':
			text = "time length must be 2 digit!";
			ele.html(text);
			ele.addClass('error');
			$('body').append(ele);
			$(ele).animate({'top':'+=30px','opacity':'+=0.2'},350, function(){
				
				$(this).animate({'opacity':'1'},delay,function(){
					$(this).animate({'opacity':'-=0.2','top':'-=40px'},500,function(){
						$(this).remove();
					});
				});
						
			});
			break;
		case '003':
			text = "time must be numeric!";
			ele.html(text);
			ele.addClass('error');
			$('body').append(ele);
			$(ele).animate({'top':'+=30px','opacity':'+=0.2'},350, function(){
				
				$(this).animate({'opacity':'1'},delay,function(){
					$(this).animate({'opacity':'-=0.2','top':'-=40px'},500,function(){
						$(this).remove();
					});
				});
						
			});
			break;
		default:
			return;
	}
}

$(function(){
	var inputs = document.querySelectorAll( '.uploadfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
	  var label  = $(input).next(),
	    labelVal = $(label).html();

	  $(input).on( 'change', function( e )
	  {
	    var fileName = '';
	    if( this.files && this.files.length > 1 )
	      fileName = ( $(this).attr('data-multiple-caption') || '' ).replace( '{count}', this.files.length );
	    else
	      fileName = e.target.value.split( '\\' ).pop();

	    if(fileName)
	      $(label).html(fileName);
	    else
	      $(label).html(labelVal);
	  });
	});
});


$(document).ready(function(){
	
});
