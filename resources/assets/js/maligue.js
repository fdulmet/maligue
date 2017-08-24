(function($) {

	$(function() {

		// profil modal
		var $playerInfos = $('.wrap-player-infos'),
		$playerform = $('.wrap-player-form');
		// toggle edit infos form user
		$('#toggle-edit-profile')
			.on('click', function() {

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

		$('#profilJoueur')
			.on('hidden.bs.modal', function () {
		    $playerform
					.hide();
				$playerInfos
					.fadeIn();
			});
	});

})(jQuery);
