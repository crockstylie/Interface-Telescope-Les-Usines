(function( $ ) {
  'use strict';

  $(document).ready(function () {
    interfaceTelescopeLesUsinesSubmit();
  });

  function interfaceTelescopeLesUsinesSubmit() {
    $('#interfaceTelescopeLesUsinesForm').on('submit', function(e) {
      e.preventDefault();

      var interfaceTelescopeLesUsinesSubmit = ajax_interface_telescope_les_usines_submit.url;
      var interfaceTelescopeLesUsinesSubmitNonce = ajax_interface_telescope_les_usines_submit.nonce;
      var data = $(this).serialize();

      $.ajax({
        type: 'post',
        url: interfaceTelescopeLesUsinesSubmit,
        data: "action=interface_telescope_les_usines_submit&nonce=" + interfaceTelescopeLesUsinesSubmitNonce + "&" + data,
        dataType: 'JSON',
        success: function(data) {
          console.log('success');
        },
        error: function(){
          alert('un problème est survenu lors de la soumission du formulaire');
        }
      });
    });
  }

})( jQuery );