<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stripe Form</title>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
      // This identifies your website in the createToken call below
      Stripe.setPublishableKey('pk_test_r3kLRWF8AVDMy1HOwdwo5CL8');
      // ...
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#payment-form').submit(function(event) {
          var $form = $(this);

          // Disable the submit button to prevent repeated clicks
          $form.find('button').prop('disabled', true);

          Stripe.card.createToken($form, stripeResponseHandler);

          // Prevent the form from submitting with the default action
          return false;
        });
      })
    </script>
  </head>
  <body>
    <form action="" method="POST" id="payment-form">
      <span class="payment-errors"></span>

      <div class="form-row">
        <label>
          <span>Card Number</span>
          <input type="text" size="20" data-stripe="number"/>
        </label>
      </div>

      <div class="form-row">
        <label>
          <span>CVC</span>
          <input type="text" size="4" data-stripe="cvc"/>
        </label>
      </div>

      <div class="form-row">
        <label>
          <span>Expiration (MM/YYYY)</span>
          <input type="text" size="2" data-stripe="exp-month"/>
        </label>
        <span> / </span>
        <input type="text" size="4" data-stripe="exp-year"/>
      </div>

      <button type="submit">Submit Payment</button>
  </form>
  </body>
</html>
