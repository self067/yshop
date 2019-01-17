
$('.modal-content').on('click', '.btn-next', function () {
  $.ajax({
    url: '/yshop/cart/order',
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#order .modal-content').html(res);
      $('#cart').modal('hide');
      $('#order').modal('show');
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });
});


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
      $('.menu-quantity').html('('+$('.total-quantity').html()+')');
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status +" "+thrownError);

    }
  });
} );

$('.modal-content').on('click', '.btn-close', function () {
  $('#cart').modal('hide');
})


$('.modal-content').on('click', '.delete', function () {
  let id = $(this).data('id');
  $.ajax({
    url: '/yshop/cart/delete',
    data: {id: id},
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#cart .modal-content').html(res);
      if($('.total-quantity').html())
        $('.menu-quantity').html('('+$('.total-quantity').html()+')');
      else
        $('.menu-quantity').html('(0)');

    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);

    }
  });

})


function clearCart(event) {
  event.preventDefault();
  if(confirm('Очистить корзину ?')) {

  $.ajax({
    url: '/yshop/cart/clear',
    type: 'GET',
    success: function(res) {
      $('#cart .modal-content').html(res);
      $('.menu-quantity').html('(0)');

    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });

}

}