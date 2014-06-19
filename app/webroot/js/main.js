//alert("ABCDE");

//function show_Message() {
//	
//	alert("message");
//	
//	var txt = $('#area').text();
//	alert(txt);
//	
//	
////	$('#area').text("DONE");
////	$('area').text("DONE");
////	$('area').html("DONE");
//	
//}

function specials_text() {
	
//	alert("special: button");
	
	//REF http://stackoverflow.com/questions/2001366/jquery-change-text-color-is-there-a-code-for-this answered Jan 4 '10 at 18:52
//	$("#bt_texts_special_ops").css('color', 'yellow');
	
	//REF http://stackoverflow.com/questions/10314338/get-name-of-object-or-class-in-javascript answered Nov 21 '13 at 13:27
//	alert($("#texts_special_ops").css('display').constructor.name);
//	alert($("#texts_special_ops").css('display'));
//	alert("special: button");
	
	var type = $("#texts_special_ops").css('display');
	
	if (type == 'none') {
		
		$("#texts_special_ops").css('display', 'inline');
		
	} else {
		
		$("#texts_special_ops").css('display', 'none');

	}
}

$(document).ready(function(){
	
//	alert("jquery ready");
	
//	specials_text();
//	$("#texts_special_ops").click(specials_text());
	
	$("#bt_texts_special_ops").click(specials_text);
	
  $("#show_button").click(function(){
	  
	  //debug
	  //REF pathname http://css-tricks.com/snippets/javascript/get-url-and-url-parts-in-javascript/
	  //REF url http://stackoverflow.com/questions/1034621/get-current-url-with-javascript
//	  alert("show");
	  var url_Info = "URL => " + document.URL
	  				+ "||origin => " + window.location.origin
	  				+ "pathname => " + window.location.pathname;
//	  alert(url_Info);
//	  alert(document.URL);
	  
	  $(this).attr("disabled", true);
	  $("#hide_button").removeAttr("disabled");
	  
	  // Set: URL
	  var url;
	  
	if (window.location.origin == "http://localhost") {
		
		url_Log = "http://localhost/PHP_server/CR6_cake/texts/get_Log";
		
	} else {
	
		url_Log = "http://benfranklin.chips.jp/cake_apps/CR6_cake/texts/get_Log";
		
	}
	  
	  //REF http://www.tohoho-web.com/js/jquery/ajax.htm
	  $.ajax({
		  
//		    url: "/genres/show_log",
		    url: url_Log,
//		    url: "http://benfranklin.chips.jp/cake_apps/CR6_cake/texts/get_Log",
//		    url: "/texts/get_Log",
//		    url: "/admin/show_log",
		    type: "GET",
		    timeout: 10000
		    
		}).done(function(data, status, xhr) {
			
//			alert("ajax => done");
			
		    $("#ajax_area").html(data);
//		    $("#show_log").html(data);
		    
		    //REF http://stackoverflow.com/questions/3806685/jquery-add-disabled-attribute-to-input answered Sep 27 '10 at 18:32
//		    document.getElementById("show_log").disabled = true;	//=> Not working
		    
		    $("#hide_button").removeAttr("disabled");
		    
		}).fail(function(xhr, status, error) {
		    $("#show_log").append("xhr.status = " + xhr.status + "<br>");          // 例: 404
		    
		    alert("ajax => failed");
		    
		    $("#show_button").removeAttr("disabled");
		    
		});
	  
  });//$("#show_button").click(function()
  
  $("#hide_button").click(function(){

//	  $("#show_log").html("LOG");
	  
	  $(this).attr("disabled", true);
	  
	  $("#show_button").removeAttr("disabled");
	  
	  $("#ajax_area").html("Log");
	  
//	  $(".log_navigation").hide();
	  
  });//$("#hide_button").click(function(){
  
});