
$(function () {
  $('#datetimepicker1').datetimepicker({
    format: 'MM/DD/YYYY',
    allowInputToggle: true
  });

  $('#datetimepicker2').datetimepicker({
    format: 'MM/DD/YYYY',
    allowInputToggle: true
  });

  $('#formUpdateCapitaine').one('submit', function (e) {
    e.preventDefault();

    if ($('#selectCapitaine').val() === '')
    {
      alert('Vous devez sélectionner un joueur pour le désigner capitaine');
      return false;
    }
    else
    {
      $(this).submit();
    }
  });

  // profil modal
  var $playerInfos = $('.wrap-player-infos'),
    $playerform = $('.wrap-player-form');

  // toggle edit infos form user
  $('#toggle-edit-profile').on('click', function() {
    if ($playerform.is(':visible') === false) {
      $playerInfos.hide();
      $playerform.fadeIn();
    } else {
      $playerform.hide();
      $playerInfos.fadeIn();
    }
  });

  $('#profilJoueur').on('hidden.bs.modal', function() {
    $playerform.hide();
    $playerInfos.fadeIn();
  });
});
