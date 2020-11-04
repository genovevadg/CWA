$(function() {
    $('#contact-form').on('submit', function (event) {
        event.preventDefault();
        validateAndSend();
    });
  });


  function validateAndSend(){
    var name = 'martin';
    var email = 'ruffamartin@gmail.com';
    var phone = '142364';
    var message = 'lalal';
    console.log('llegue');

    $('.sumbit-form').click();
  }
