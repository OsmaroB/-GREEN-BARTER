$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 4000
	  });   
	  var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: ' yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
			startDate: '-88y',
			endDate: '-18y'
		})
		var date_input=$('input[name="date1"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})  
		var date_input=$('input[name="fecha"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd', 
			container: container,
			todayHighlight: true,
			autoclose: true,
		})  
});    
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
$("#mybtn").click(function(){
	$("#exampleModal").modal("hide");
});

function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
} 
$(function() {
	bs_input_file();
});  
function soloLetras(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "abcdefghijklmnopqrstuvwxyñz ";
	especiales = "46";

	tecla_especial = false;
	for(var i in especiales){
		 if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		 }
	 }

	 if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	 }
 }
 function soloFechas(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "";
	especiales = ""; 
	tecla_especial = false;
	for(var i in especiales){
		 if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		 }
	 }

	 if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	 }
 }
 function solonumeros(e)
 {
	 key=e.keyCode || e.which;
	 teclado=String.fromCharCode(key);
	 numeros="0123456789";
	 teclado_especial=false;
	 especiales="8-37-38-46";
	 for(var i in especiales)
	 {
		 if(key==especiales[i])
		 {
			 teclado_especial=true;
		 }
	 }
	 if(numeros.indexOf(teclado)==-1 && !teclado_especial)
	 {
	 return false;
	 }
 }
 
 $('.input-group.date').datepicker({format: "yyyy.mm.dd"}); 
$('.input-group.date1').datepicker({format: "yyyy.mm.dd"}); 

$('.nav-tabs a').click(function(){
	$(this).tab('show');
  })
  
  // Select tab by name
  $('.nav-tabs a[href="#home"]').tab('show')
  
  // Select first tab
  $('.nav-tabs a:first').tab('show')
  
  // Select last tab
  $('.nav-tabs a:last').tab('show')
  
  // Select fourth tab (zero-based)
  $('.nav-tabs li:eq(3) a').tab('show')