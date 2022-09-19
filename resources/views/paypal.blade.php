@extends('layouts.app')
 <!-- Replace "test" with your own sandbox Business account app client ID -->
 <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
 <!-- Set up a container element for the button -->

 <script>
   paypal.Buttons({
     // Sets up the transaction when a payment button is clicked
     createOrder: (data, actions) => {
       return actions.order.create({
         purchase_units: [{
           amount: {
             value: '77.44' // Can also reference a variable or function
           }
         }]
       });
     },
     // Finalize the transaction after payer approval
     onApprove: (data, actions) => {
       return actions.order.capture().then(function(orderData) {
         // Successful capture! For dev/demo purposes:
         console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
         const transaction = orderData.purchase_units[0].payments.captures[0];
         alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
         // When ready to go live, remove the alert and show a success message within this page. For example:
         // const element = document.getElementById('paypal-button-container');
         // element.innerHTML = '<h3>Thank you for your payment!</h3>';
         // Or go to another URL:  actions.redirect('thank_you.html');
       });
     }
   }).render('#paypal-button-container');
 </script>


    <style>
        #paypal-button-container{
            display:flex;
            justify-content: center;
            padding-top: 30rem;
            padding-bottom: 30rem;
            
        }
    </style>
    <body>
 @section('content')       
 <div id="paypal-button-container"></div>


 <script type='text/javascript'>
  (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'NnapDrn32MoApNs2t_c', {});
</script>
</body>
@endsection
   