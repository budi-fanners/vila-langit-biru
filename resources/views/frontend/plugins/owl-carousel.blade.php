{!! Html::style('plugins/owl-carousel/owl.carousel.css') !!}
{!! Html::script('plugins/owl-carousel/owl.carousel.js') !!}

<script>
$(document).ready(function() {
 
	$("#slider").owlCarousel({
		autoPlay : 5000,
		// navigation:true,
		paginationSpeed : 1500,
		goToFirstSpeed : 4000,
		singleItem : true,
		autoHeight : true,
		pagination : true,
	});
 
});
</script>