
function openCart(event) {
  event.preventDefault();

  $.ajax({
    url: '/yshop/cart/open',
    type: 'GET',
    success: function(res) {
      // alert(res);
      $('#cart .modal-content').html(res);
      $('#cart').modal('show');
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });

}

// $('.cart').on('click',function () {
//   $('#cart').modal('show');
// });

$('.product-button__add').on('click', function (event) {
  event.preventDefault();
  let name = $(this).data('name');
//
  console.log(name);
//
  $.ajax({
    url: '/yshop/cart/add',
    data: {name: name},
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#cart .modal-content').html(res);
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status +" "+thrownError);

    }
  });
} );