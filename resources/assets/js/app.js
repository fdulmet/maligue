
$(function () {
  $('#datetimepicker1').datetimepicker({
    format: 'MM/DD/YYYY',
    allowInputToggle: true
  });

  $('#datetimepicker2').datetimepicker({
    format: 'MM/DD/YYYY',
    allowInputToggle: true
  });

  $('#datetimepickermatch').datetimepicker({
    format: 'MM/DD/YYYY HH:mm:ss',
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

  $('#switchTeam').on('change', function(){
    $(this).parents('form').submit();
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

  $("[rel='tooltip']").tooltip();

  $('.thumbnail').hover(
    function(){
      $(this).find('.caption').slideDown(250); //.fadeIn(250)
    },
    function(){
      $(this).find('.caption').slideUp(250); //.fadeOut(205)
    }
  );
});


var file = undefined;
! function(e) {
  var t = function(t, n) {
    this.$element = e(t), this.type = this.$element.data("uploadtype") || (this.$element.find(".thumbnail").length > 0 ? "image" : "file"), this.$input = this.$element.find(":file");
    if (this.$input.length === 0) return;
    this.name = this.$input.attr("name") || n.name, this.$hidden = this.$element.find('input[type=hidden][name="' + this.name + '"]'), this.$hidden.length === 0 && (this.$hidden = e('<input type="hidden" />'), this.$element.prepend(this.$hidden)), this.$preview = this.$element.find(".fileupload-preview");
    var r = this.$preview.css("height");
    this.$preview.css("display") != "inline" && r != "0px" && r != "none" && this.$preview.css("line-height", r), this.original = {
      exists: this.$element.hasClass("fileupload-exists"),
      preview: this.$preview.html(),
      hiddenVal: this.$hidden.val()
    }, this.$remove = this.$element.find('[data-dismiss="fileupload"]'), this.$element.find('[data-trigger="fileupload"]').on("click.fileupload", e.proxy(this.trigger, this)), this.listen()
  };
  t.prototype = {
    listen: function() {
      this.$input.on("change.fileupload", e.proxy(this.change, this)), e(this.$input[0].form).on("reset.fileupload", e.proxy(this.reset, this)), this.$remove && this.$remove.on("click.fileupload", e.proxy(this.clear, this))
    },
    change: function(e, t) {
      if (t === "clear") return;
      var n = e.target.files !== undefined ? e.target.files[0] : e.target.value ? {
        name: e.target.value.replace(/^.+\\/, ""),
        size: e.target.value.size,
      } : null;
      if (!n) {
        this.clear();
        return
      }
      this.$hidden.val(""),
        this.$hidden.attr("name", ""),
        this.$input.attr("name", this.name);
      if (typeof FileReader != "undefined") {
        var r = new FileReader,
            i = this.$preview,
            s = this.$element;
        r.onload = function(e) {
          var result = {
            name: n.name,
            data: e.target.result,
            size: n.size,
          }
          i.text(result.name), s.addClass("fileupload-exists").removeClass("fileupload-new")
        }, r.readAsDataURL(n)
      } else this.$preview.text(n.name), this.$element.addClass("fileupload-exists").removeClass("fileupload-new")
    },
    clear: function(e) {
      this.$hidden.val(""), this.$hidden.attr("name", this.name), this.$input.attr("name", "");
      if (navigator.userAgent.match(/msie/i)) {
        var t = this.$input.clone(!0);
        this.$input.after(t), this.$input.remove(), this.$input = t
      } else this.$input.val("");
      this.$preview.html(""), this.$element.addClass("fileupload-new").removeClass("fileupload-exists"), e && (this.$input.trigger("change", ["clear"]), e.preventDefault())
      file = undefined;
    },
    reset: function(e) {
      this.clear(), this.$hidden.val(this.original.hiddenVal), this.$preview.html(this.original.preview), this.original.exists ? this.$element.addClass("fileupload-exists").removeClass("fileupload-new") : this.$element.addClass("fileupload-new").removeClass("fileupload-exists")
    },
    trigger: function(e) {
      this.$input.trigger("click"), e.preventDefault()
    }
  }, e.fn.fileupload = function(n) {
    return this.each(function() {
      var r = e(this),
          i = r.data("fileupload");
      i || r.data("fileupload", i = new t(this, n)), typeof n == "string" && i[n]()
    })
  }, e.fn.fileupload.Constructor = t, e(document).on("click.fileupload.data-api", '[data-provides="fileupload"]', function(t) {
    var n = e(this);
    if (n.data("fileupload")) return;
    n.fileupload(n.data());
    var r = e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');
    r.length > 0 && (r.trigger("click.fileupload"), t.preventDefault())
  })
}(window.jQuery)