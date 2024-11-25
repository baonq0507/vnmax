/* 06-19 check */
$(document).ready(function(){
	$.datepicker.regional['ko'] = {
		closeText: "닫기",
		prevText: "이전달",
		nextText: "다음달",
		currentText: "오늘",
		monthNames: ["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"],
		monthNamesShort: ["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"],
		dayNames: ["일","월","화","수","목","금","토"],
		dayNamesShort: ["일","월","화","수","목","금","토"],
		dayNamesMin: ["일","월","화","수","목","금","토"],
		dateFormat: "yy-mm-dd",
		showMonthAfterYear: true,
		yearSuffix: "년"
	};
	$.datepicker.setDefaults($.datepicker.regional['ko']);
	$( ".datepick" ).datepicker();
	$( ".insert_game_cal" ).datepicker();
	$( "a.add_next_insert" ).button();
	//$( "#btn_submit" ).button();
});

function html_auto_br(obj) {
    if (obj.checked) {
        write = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
        if (write)
            obj.value = "html2";
        else
            obj.value = "html1";
    }
    else
        obj.value = "";
}

function check_key() {
 var char_ASCII = event.keyCode;

	//숫자 -+ 없이 숫자만
	if ((char_ASCII >= 48 && char_ASCII <= 57 ) || (char_ASCII == 46) || (char_ASCII == 43) || (char_ASCII == 45))
	   return 1;
	 //영어
	 else if ((char_ASCII>=65 && char_ASCII<=90) || (char_ASCII>=97 && char_ASCII<=122))
		return 2;
	 //특수기호
	 else if ((char_ASCII>=33 && char_ASCII<=47) || (char_ASCII>=58 && char_ASCII<=64)
	   || (char_ASCII>=91 && char_ASCII<=96) || (char_ASCII>=123 && char_ASCII<=126))
		return 4;
	 //한글
	 else if ((char_ASCII >= 12592) || (char_ASCII <= 12687))
		return 3;
	//숫자 -+ 없이 숫자만
	 else if ((char_ASCII >= 48 && char_ASCII <= 57 ) || (char_ASCII == 8))
	   return 5;
		
	 else
		return 0;
}

//텍스트 박스에 숫자와 영문만 입력할수있도록

function nonHangulSpecialKey() {

 if(check_key() != 5 && check_key() != 2) {
  event.returnValue = false;
  alert("숫자나 영문자만 입력하세요!");
  return;
 }
}

//텍스트 박스에 숫자만 입력할수 있도록
function numberKey() {
	 if(check_key() != 1 ) {
	  event.returnValue = false;
	  //alert("숫자만 입력할 수 있습니다.");
	  return;
	 }
}

function pure_numberKey() {
	var char_ASCII = event.keyCode;
	if ((char_ASCII >= 48 && char_ASCII <= 57 ) || (char_ASCII == 8)){
		return true;
	} else {
		alert("숫자만 입력할 수 있습니다.");
		return;		
	}
}

function IsNumber(obj) {
	if (isNaN(obj.value)) {
		alert('숫자만 입력하십시오');
		obj.value = '';
		obj.focus();
		obj.select();
	}
}

function MoneyFormat(str)
{
	var re="";
	str = str + "";
	str=str.replace(/-/gi,"");
	str=str.replace(/ /gi,"");
	
	str2=str.replace(/-/gi,"");
	str2=str2.replace(/,/gi,"");
	str2=str2.replace(/\./gi,"");	
	
	if(isNaN(str2) && str!="-") return "";
	try
	{
		for(var i=0;i<str2.length;i++)
		{
			var c = str2.substring(str2.length-1-i,str2.length-i);
			re = c + re;
			if(i%3==2 && i<str2.length-1) re = "," + re;
		}
		
	}catch(e)
	{
		re="";
	}
	
	if(str.indexOf("-")==0)
	{
		re = "-" + re;
	}

	return re;
}

function hourKey(str) {
    if(Number(str.value) > 23){
    	alert('1 부터 23 이하만 입력할 수 있습니다.');
    	str.value = "";
    	str.focus();
    	return;
    }else if (str.value.length == 1){
		str.value = "0" + str.value +"";
    }
}
function minKey(str) {
    if(Number(str.value) > 60){
    	alert('1 부터 59 이하만 입력할 수 있습니다.');
    	str.value = "";
    	str.focus();
    	return;
    }else if (str.value.length == 1){
		str.value = "0" + str.value +"";
    }
}

function vs(obj, elName){
	if(obj.checked){
		$j('#'+elName).val('-');
	}else{
		$j('#'+elName).val('');
	}
}



// 선물체크
function get_new_gift(mb_id)
{

//	if(get_cookie("ck_alarm") == "off"){
//		return false;
//	}

	$.ajax({
		url: g4_t_user_path + "/ajax/ajax.get_newgift.php",
		data: { mb_id: mb_id, check: true },
		dataType: "json",
		type: "post",
		success: function(data){

			$('span[data="status_data_1"]').text(number_format(data.gift_point));
		
			if(data.gift != 0 ){
				if(data.gift != 0 && data.gift_alarm > 0){	
					gift_sound.play();
					show_new_gift_box(mb_id);	
				}
			}
		},
		error: function(){
			//alert('통신오류 : get_new_article');
		},
		beforeSend: function(){},
		complete: function(){}
	});

}

function check_new_gift(mb_id)
{

	$.ajax({
		url: g4_t_user_path + "/ajax/ajax.check_newgift.php",
		data: { mb_id: mb_id, check: true },
		dataType: "json",
		type: "post",
		success: function(data){

		},
		error: function(){
			//alert('통신오류 : get_new_article');
		},
		beforeSend: function(){},
		complete: function(){}
	});

}

function show_new_gift_box(mb_id)
{
	title = "축하합니다~"; 
	width = "85%"; 
	height = "775"; 
//fadeIn,fadeOut / blind / fadeOut
	show = "explode"; 
	hide = "explode"; 
	$('#new_gift_box').dialog({
		title:title,
		width:width,
		height:height, 
		modal: false,
		show: show,
		hide: hide,
		buttons: {
			"선물받기": function(){
				// 음악소리 끄기
				gift_sound.pause();
				if(gift_sound.currentTime > 0) gift_sound.currentTime = 0;
				
				// 확인 카운트 빼고 창닫기
				check_new_gift(mb_id);
				$(this).dialog("close");
			}
		}
	});
	/*
    $('.ui-dialog-buttonpane')
	    .find('button:contains("받기")')
	    .removeClass('ui-button-text-only')
	    .addClass('popup_btn_remove')
	    .text('받기')
	    .prepend('<img src="/img_p/btn_okay.png" />')
	    .blur();
	*/
}