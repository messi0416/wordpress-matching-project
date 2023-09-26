//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。

$(window).on('load',function(){ 
  // URLの取得
  var url = location.href.replace(/\#.*$/, '').replace(/\?.*$/, '');

  // 前ページの取得
  var ref = document.referrer;

  /* 無料会員での登録 */
  if(ref == "https://xn--6qs34k848a54i.com/registration"){
  
    var chkresult = sessionStorage.getItem('validatechk');

    if(chkresult == 'OK') {
      $('.profilegrid_social_login').css('display','none');
      sessionStorage.setItem('validatechk', 'NG');
    }
  else {
    sessionStorage.setItem('validatechk', 'NG');
  }

};

  /* 有料会員での登録 */
  if(ref == "https://xn--6qs34k848a54i.com/registration?pm_field_21=ABCDE"){

    var chkresult = sessionStorage.getItem('validatechk');

    if(chkresult == 'OK') {
      $('.profilegrid_social_login').css('display','none');
      sessionStorage.setItem('validatechk', 'NG');
    }
  else {

    sessionStorage.setItem('validatechk', 'NG');
  }
  
};
});

/* 会員種別が変更された時の動作 */
$('input[name="pm_field_40"]').change(function() {
  //値が変更されたときの処理
  var form = document.forms.pm_regform_1;

  if(form.pm_field_40[0].checked) {
    /* 有料会員を選択 */
    $('.kaihi_erea_paid').css('display', 'block');  /* 会費を表示 */

    /* 決済が完了している場合 */
    if(form.pm_field_25.checked){
      form.pm_field_42.checked = true; /* 決済判定フラグ */
    } else {
      form.pm_field_42.checked = false; /* 決済判定フラグ */
    }


    
  } else {
    /* 無料会員を選択 */
    $('.kaihi_erea_paid').css('display', 'none'); /* 会費を非表示 */
    form.pm_field_42.checked = true; /* 決済判定フラグ */
  }
  
});

/* メールアドレスで新規会員登録する　をクリック */
$(document).on('click', '.entry_edit_title', function(){  
  $('.pmagic-form').css('display', 'block');
});

/* 会費は初期表示では非表示とする*/
$(window).on('load',function(){ 

  var form = document.forms.pm_regform_1;

  if(form.pm_field_40[0].checked) {
    $('.kaihi_erea_paid').css('display', 'block');
  } else {
    $('.kaihi_erea_paid').css('display', 'none');
  }

 /* $('.pmagic-form').css('display', 'none');*/

});



$(window).on('load',function(){ 
 
  // URLの取得
  var url = location.href.replace(/\#.*$/, '').replace(/\?.*$/, '');
 
  // パスの取得
  var path = location.pathname
 
  // パラメーターの取得
  var param = location.search 
  // ページ内アンカーの取得
  var anc = location.hash
  // 前ページの取得
  var ref = document.referrer;


  if(ref == "https://checkout.stripe.com/"){
    if (url == "https://xn--6qs34k848a54i.com/registration"){
      // URLが http://example.com/ の場合に実行する内容 
      if (param == "?pm_field_21=ABCDE"){
        // パラメーターの値が 123 の場合に実行する内容
        
        var form = document.forms.pm_regform_1;
        $('#checkout-button-price_1JASOSDIahBUuB7U8Dm6E0My').prop('disabled',true);
        target = document.getElementById("#checkout-button-price_1JASOSDIahBUuB7U8Dm6E0My");     
        $('#checkout-button-price_1JASOSDIahBUuB7U8Dm6E0My').css('backgroundColor', 'grey');        
        form.pm_field_21.value = sessionStorage.getItem('UserNameSei');
        form.pm_field_20.value = sessionStorage.getItem('UserNameMei');
        form.user_email.value = sessionStorage.getItem('UserEmail');
        form.user_pass.value = sessionStorage.getItem('UserPass1');
        form.confirm_pass.value = sessionStorage.getItem('UserPass2');
        form.first_name.value = sessionStorage.getItem('UserNick');
        form.description.value = sessionStorage.getItem('Usertext');
        form.pm_field_40[0].checked = true; /* 有料会員 */
        form.pm_field_25.checked = true; /* 決済完了 */
        form.pm_field_42.checked = true; /* 決済判定フラグ */
        form.pm_field_40[1].disabled = true;
        $('.pmagic-form').css('display', 'block');
        $('.kaihi_erea_paid').css('display', 'block');
        
        var hiduke=new Date();
        var year = hiduke.getFullYear() + 1;
        var month = hiduke.getMonth() + 1;
        var day = hiduke.getDate();
        var message = '<span>' + year + '年' + month + '月' + day + '日まで有効</span>';
        document.getElementById('checkout-button-price_1JASOSDIahBUuB7U8Dm6E0My').innerHTML = message;
        

      }
  
    }
  }
});


(function() {
  var stripe = Stripe('pk_test_51JAEwdDIahBUuB7UA3VgRitDuW4Vjz3FXNqNkWLKY8nd2yto0HkWGvw3BkVfEEH5akpbMY2Sb2dv6LeN6QT3Tnq100xNEUYTRw');

  var url = location.href.replace(/\#.*$/, '').replace(/\?.*$/, '');

  if (url == "https://xn--6qs34k848a54i.com/registration"){
    //
 

    

    // ドメイン以下のパス名が /sample/sample.html の場合に実行する内容 
    var checkoutButton = document.getElementById('checkout-button-price_1JASOSDIahBUuB7U8Dm6E0My');
    checkoutButton.addEventListener('click', function () {

      var form = document.forms.pm_regform_1;  
      sessionStorage.setItem('UserNameSei', form.pm_field_21.value);
      sessionStorage.setItem('UserNameMei', form.pm_field_20.value);
      sessionStorage.setItem('UserEmail', form.user_email.value);
      sessionStorage.setItem('UserPass1', form.user_pass.value);
      sessionStorage.setItem('UserPass2', form.confirm_pass.value);
      sessionStorage.setItem('UserNick', form.first_name.value);
      sessionStorage.setItem('Usertext', form.description.value);

      /*
       * When the customer clicks on the button, redirect
       * them to Checkout.
       */
      stripe.redirectToCheckout({
        lineItems: [{price: 'price_1JASOSDIahBUuB7U8Dm6E0My', quantity: 1}],
        mode: 'subscription',
        /*
         * Do not rely on the redirect to the successUrl for fulfilling
         * purchases, customers may not always reach the success_url after
         * a successful payment.
         * Instead use one of the strategies described in
         * https://stripe.com/docs/payments/checkout/fulfill-orders
         */
        successUrl: 'https://xn--6qs34k848a54i.com/registration?pm_field_21=ABCDE',
        cancelUrl: 'https://xn--6qs34k848a54i.com/registration',
      })
      .then(function (result) {
          var displayError = document.getElementById('error-message');
          displayError.textContent = 'test!';
        if (result.error) {
          /*
           * If `redirectToCheckout` fails due to a browser or network
           * error, display the localized error message to your customer.
           */
          var displayError = document.getElementById('error-message');
          displayError.textContent = result.error.message;
        }
      });
    });
  }
})();


jQuery(function ($) {
  
});



