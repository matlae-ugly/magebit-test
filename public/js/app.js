//Landing
$('.input-mask').click(function(){
  if (check() === true) {
    $.ajax({
      url: location.protocol + '//' + location.host + '?url=email/create',
      method: 'post',
      data: {email : $('#email').val()}
    }).done(function(data) {
      if (data == 'true') {
        $('.error').html('');
        $('.union-image').css('display', 'inline-block');
        $('.heading').html('Thanks for subscribing!');
        $('.main-text').html('You have successfully subscribed to our email listing. Check your email for the discount code.');
        $('.input-wrapper').css('display', 'none');
        $('.terms-block').css('display', 'none');
      } else {
        $('.error').html(data);
      }
    });
  } else {
    $('.error').html(check());
  }
})

function check() {
  if ($('#email').val() === '') {
    return 'Email address is required';
  }
  if (!testValidEmail($('#email').val())) {
    return 'Please provide a valid e-mail address';
  }
  if (!$('#terms').is(':checked')) {
    return 'You must accept the terms and conditions';
  }
  if ($('#email').val().endsWith('.co')) {
    return 'We are not accepting subscriptions from Colombia emails';
  }
  return true;
}

function testValidEmail (email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

//Admin page
$('#delete').click(function() {
  $('input[type=checkbox]:checked').each(function() {
    $.ajax({
      type: 'post',
      data: {id: parseInt($(this).parent().parent().data('id'))},
      url: location.protocol + '//' + location.host + '?url=email/delete',
    }).done(function() {
      location.reload();
    });
  });
});

$('#filter').change(function() {
  applyFilters('', $(this).val());
});

function applyFilters(filter, provider) {
  let searchParams = new URLSearchParams(window.location.search);
  if (searchParams.has('filter')) {
    if (filter == '') {
      filter = searchParams.get('filter');
    }
  }
  if (searchParams.has('provider')) {
    if (provider == '') {
      provider = searchParams.get('provider');
    }
  }
  let url = location.protocol + '//' + location.host +
   '?url=email/list&filter=' + filter + '&provider=' + provider;
   window.location.href = url;
}
