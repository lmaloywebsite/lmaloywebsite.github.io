;(function($){
	$(document).ready(function(){
		$('.vb-notice .btnend').on('click',function(){
			var url = new URL(location.href);
			url.searchParams.append('vbnotice',1);
			location.href= url;
		});
	});
})(jQuery);