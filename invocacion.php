<?php 

$errores = '';
echo 'Invoca';
print_r($_POST);
if (isset($_POST['submit'])) {

    print_r($_POST);
}else
{

    echo 'solicito credenciales2';
    print_r($_POST['contenedor']);

}
?>

<script type="text/javascript">
var callback = function(response) {
  if(!response.code){
    console.log(response);
  } else {
    console.error('Error: ',response.error, 'Code: ', response.code, 'Message: ',response.message);
  }
}

kushki.requestToken({
  amount: '49.99',
  months: '12', // Required only for deferred transactions in Chile
  currency: "USD",
  card: {
    name: "Juan Guerra",
    number: "4544980425511225",
    cvc: "345",
    expiryMonth: "12",
    expiryYear: "28"
},
}, callback); // Also you can set the function directly

alert(callback);
</script>