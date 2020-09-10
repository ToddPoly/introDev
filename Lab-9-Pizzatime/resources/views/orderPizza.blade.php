<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <img alt="pizzatime" src="https://f4.bcbits.com/img/a3267934918_10.jpg" style="width:100%; height:200px">
  <div id="wrapper">
  <div id="inputs">
  <div>
    <form action="pizzaDetails" method="POST">
    {{csrf_field()}}

    <h1>Order</h1>
    First name: <input type="text" name="firstname" placeholder="John"><br/>
    Last name: <input type="text" name="lastname" placeholder="Smith"><br/>
    Address:<input type="email" name="email" placeholder="1234 Street City, ST Zip">
    <br/>
    <p>Pizza toppings (Check all that apply)</p>
    <input type='checkbox' name='toppings1' value='Cheese'>Cheese
    <input type='checkbox' name='toppings2' value='Mushrooms'>Mushrooms
    <input type='checkbox' name='toppings3' value='Pepperoni'>Pepperoni
    <p>Comments:</br></p>
	  <textarea></textarea>
	  <p></p>
    <button type="submit">submit</button>
</form>
</div>
</div>
    
</body>
</html>