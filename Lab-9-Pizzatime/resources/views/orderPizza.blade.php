<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div id="wrapper">
  <div id="inputs">
  <div>
    <form action="orderDetails" method="POST">
    {{csrf_field()}}

    <h1>Order</h1>
    First name: <input type="text" name="firstname" placeholder="John"><br/>
    Last name: <input type="text" name="lastname" placeholder="Smith"><br/>
    Address:<input type="email" name="email" placeholder="1234 Street City, ST Zip">
    <br/>
    <p>Pizza toppings (Check all that apply)</p>
    <input type='checkbox' id='toppings' name='cheese'>Cheese
    <input type='checkbox' id='toppings' name='mushrooms'>Mushrooms
    <input type='checkbox' id='toppings' name='pepperoni'>Pepperoni
    <p>Comments:</br></p>
	  <textarea></textarea>
	  <p></p>
    <button type="submit">submit</button>
</form>
</div>
</div>
    
</body>
</html>