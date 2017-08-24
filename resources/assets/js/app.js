
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

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
});
