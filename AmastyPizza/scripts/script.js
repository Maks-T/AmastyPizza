$(document).ready(function () {
  $('#order').submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'controllers/order.php',
      dataType: 'html',
      data: $(this).serialize(),
      success: function (response) {
        const invoiceElem = document.querySelector('#invoice__wrapper');

        console.log(invoiceElem);

        invoiceElem.innerHTML = response;

        console.log(response);
      },
    });
  });
});
