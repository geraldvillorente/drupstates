(function ($, Drupal) {
  Drupal.behaviors.DMCI = {
    attach: function (context, settings) {

      var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        grabCursor: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
      });

      var swiper2 = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 5000,
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
      });

      var swiper3 = new Swiper('.swiper-container-3', {
        slidesPerView: 4,
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 10,
        grabCursor: true
      });

      $(document).on('click', '.search', function()
      {
        if ($('.form-search').is(':hidden')) {
         $('.form-search').show();
          $('.search-overflow').css({'top': '0px'});
        } else {
         $('.form-search').hide();
          $('.search-overflow').css({'top': '0px'});
        }
      })

      var price = 0;

      // rfo, dp, spread
      $('#rfo-date').html($('#rfo-date-php').val());
      $('#end-of-dp').html($('#end-of-dp-php').val());
      $('#month-spread').html($('#month-spread-php').val());

      // Get the active computation sheet
      var active = $('.select-computation .active').data('select');
      $('#unit-selected').data('reveal-id', 'myModal' + active);

      // Change modal depending on computation sheet selected
      $(document).on('click', '.select-computation .columns', function(){
        $('.select-computation .columns').removeClass('active');
        $(this).addClass('active');
        active = $(this).data('select');
        $('#unit-selected').data('reveal-id', 'myModal' + active);

        $('#select-bldg')[0].selectedIndex = 0;
        $('#unit-selected').html("-- Select Unit--");
        $('#unit-area').html("");
        $('#select-term')[0].selectedIndex = 0;
        $('.calc').hide();
        $('.important').hide();
      });

      // Select a Unit for unit, parking
      $('.bldg .available').click(function()
      {
        var type = $(this).data('type');
        var unit = $(this).data('unit');
        var facing = $(this).data('facing');
        var area = $(this).data('area');
        var balcony = $(this).data('balcony');
        var unit_area = area + balcony;
        price = $(this).data('price');

        if (active == "Unit") {
          var unit_selected = type +" / "+ unit +" "+ facing;
          $('#unit-selected').html(unit_selected);
          $('#unit-area').html(unit_area + " sqm" +" ("+ area +" sqm + "+ balcony +" sqm balcony"+")");
        } else if (active == "Parking") {
          var unit_selected = unit +" "+ facing;
          $('#unit-selected').html(unit_selected + " Number");
          $('#unit-area').html(unit_area + " sqm");
        }
        $('#myModal'+active).foundation('reveal', 'close');
      });

      // Change Tower
      $('#select-bldg').on('change', function()
      {
        var tower = $(this).val();
        $('.tower-label').html(tower);
      });

      // Computation Sheet
      $('#select-term').on('change', function()
      {
        $('.calc').show();
        $('.important').show();

        var option_index = $(this)[0].selectedIndex;
        var downpayment_percentage = $('.term').find('input').eq(option_index-1).data('downpayment');
        var bank_percentage = $('.term').find('input').eq(option_index-1).data('bank');

        // Unit Price
        $('#calc-unit-price-amount').html(accounting.formatNumber(price, 2));

        // Regular Discount
        var reg_discount = $(this).val();
        var decimal_reg_discount = reg_discount / 100;
        var reg_discount_amount = price * decimal_reg_discount;
        $('#calc-reg-discount-label').html(accounting.formatNumber(reg_discount, 2) + "%")
        $('#calc-reg-discount-amount').html(accounting.formatNumber(reg_discount_amount, 2));

        // Net
        var net = price - reg_discount_amount;
        $('#calc-net-amount').html(accounting.formatNumber(net, 2));

        // PDC
        var pdc_discount = 2;
        var decimal_pdc_discount = pdc_discount / 100;
        var pdc_discount_amount = net * decimal_pdc_discount
        $('#calc-pdc-discount-label').html(accounting.formatNumber(pdc_discount, 2) + "%");
        $('#calc-pdc-discount-amount').html(accounting.formatNumber(pdc_discount_amount, 2));

        // Total Price
        var total_price = net - pdc_discount_amount;
        $('#calc-total-price').html(accounting.formatNumber(total_price, 2));

        // Divided in DP Period
        var dp_discount = 10;
        var decimal_dp_discount = dp_discount / 100;
        var dp_discount_amount = total_price * decimal_dp_discount;
        $('#calc-dp-period-label').html(accounting.formatNumber(dp_discount, 2) + "%");
        $('#calc-dp-period-amount').html(accounting.formatNumber(dp_discount_amount, 2));

        //  Downpayment
        var downpayment = downpayment_percentage;
        var decimal_downpayment = downpayment / 10;
        var downpayment_amount = dp_discount_amount * decimal_downpayment;
        $('#calc-downpayment-label').html(accounting.formatNumber(downpayment, 2) + "%");
        $('#calc-downpayment-amount').html(accounting.formatNumber(downpayment_amount, 2));

        // 1st Net Downpayment
        $('#calc-net-downpayment-amount').html(accounting.formatNumber(downpayment_amount, 2));

        // Less: Reservation Fee
        var reservation_fee = 20000;
        $('#reservation-fee').html(accounting.formatNumber(reservation_fee, 2));

        // 2nd Net Downpayment
        var downpayment_amount_2 = downpayment_amount - reservation_fee;
        $('#calc-net-downpayment-amount-2').html(accounting.formatNumber(downpayment_amount_2, 2));

        // Payable In
        var month_spread = $('#month-spread-php').val();
        var payable_in_amount = downpayment_amount_2 / month_spread;
        $('#calc_payable_in_label').html(month_spread);
        $('.calc_payable_in_amount').html(accounting.formatNumber(payable_in_amount, 2));

        // Balance
        var bank = bank_percentage;
        var decimal_bank = bank / 100;
        var balance = total_price * decimal_bank;
        $('#balance_label').html(accounting.formatNumber(bank_percentage, 2) + "%");
        $('#balance_amount').html(accounting.formatNumber(balance, 2));

        // Total Contract Price
        $('.total_contract_price_amount').html(accounting.formatNumber(total_price, 2));
      });

      $('.table-units').click(function()
      {
        $('.available-units').show();
        $('.visual').hide();
      });

      $('.table-back').click(function(){
        $('.available-units').hide();
        $('.visual').show();
      });
    }
  };
})(jQuery, Drupal);
