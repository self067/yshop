$('.cart').on('click',function () {
  $('#cart').modal('show');

});

$('.product-button__add').on('click', function (event) {
  event.preventDefault();
  let name = $(this).data('name');
//
  console.log(name);
//
  $.ajax({
    url: 'cart/add',
    data: {name: name},
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#cart .modal-content').html(res);
    },
    error: function () {
      alert('Error');
      
    }
  })
} )