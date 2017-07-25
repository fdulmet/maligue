(function($) {

	$(function() {
		$('#toggle-edit-profile')
			.on('click', function() {
				var $playerInfos = $('.wrap-player-infos'),
				$playerform = $('.wrap-player-form');

				if( $playerform.is(':visible') == false ) {
					$playerInfos
						.hide();
					$playerform
						.fadeIn();
				}
				else {
					$playerform
						.hide();
					$playerInfos
						.fadeIn();
				}
			});
	});

})(jQuery);
