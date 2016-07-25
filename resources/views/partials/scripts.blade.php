<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<script>
function myfuncion1(){
	return confirm("Esta bien");
}
function myfuncion2(){
	return confirm("Esta mal");
}
function validacion(valor){
   if(valor==1){
    var mivarJS=1;
    //document.writeln (mivarJS);
    return 1;
   }else{
     var mivarJS=0;
    return 0;
   }
}
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->