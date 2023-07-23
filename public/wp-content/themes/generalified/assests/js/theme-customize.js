/**
 * Created by test on 3/27/2017.
 */
(function ($) {
  Wp.customize("generalified_header_show_search", function (value) {
    value.bind(function (new_val) {
      if (new_val) {
        $("#top-search").show();
      } else {
        $("#top-search").hide();
      }
    });
  });
})(jQuery);
