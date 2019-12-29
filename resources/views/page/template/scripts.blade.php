<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>

<script src="https://use.fontawesome.com/c3d13979f5.js"></script>
<script>
  	$(document).ready(function(){  
  		$('.dropdown-trigger').dropdown();
  		$('.slider').slider();
  		$('select').material_select(); 
      $(".button-collapse").sideNav();
  	}); 

  	 $('.dropdown-trigger').click(function(event) {
            {
  				$('#dropdown1').toggle();
            }
        });


</script>