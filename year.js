$(function(){
var yearOptions;
var semesterOptions;
	$.getJSON('year.json',function(result){
		$.each(result, function(i,year) {
			yearOptions+="<option value='"
			+year.code+
			"'>"
			+year.name+
			"</option>";
			 });
			 $('#year').html(yearOptions);
	});
	$("#year").change(function(){
	if($(this).val()=="TE"){
			$.getJSON('fe.json',function(result){
			$.each(result, function(semesterCode,semesterName) {
				semesterOptions+="<option value='"
				+semesterCode+
				"'>"
				+semesterName+
				"</option>";
				 });
				 $('#semester').html(semesterOptions);
			});
		}
	});
	
});