<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elections :) </h1>
    <form action="quiz" method="POST">
    {{csrf_field()}}

    
    <label for="textSeat">1. How many seats are in Parliament?</label>
    <br>
    <input type="text" id="textSeat">
    <br>

    <br>
    <p>2. The election is in what month?</p>
    <input type="radio" id="radioText" name="radioT">
    <label for="radioText">August</label>
    <br>
    <input type="radio" id="radioText" name="radioT">
    <label for="radioText">September</label>
    <br>
    <input type="radio" id="radioText" name="radioT">
    <label for="radioText">October</label>
    <br>
    <input type="radio" id="radioText" name="radioT">
    <label for="radioText">November</label>
    <br>

    <br>
    <p>3. Who is the current champion?</p>

    <input type="radio" id="radioImage1" name="radioI">
    <label for="radioImage1"><image src="{{asset('images/ardern.jpg')}}" style="width:300px; height:300px"></label>
    <input type="radio" id="radioImage2" name="radioI">
    <label for="radioImage2"><image src="{{asset('images/collins.jpg')}}" style="width:30px; height:30px"></label>
    <input type="radio" id="radioImage3" name="radioI">
    <label for="radioImage3"><image src="{{asset('images/fitzsimons.jpg')}}" style="width:30px; height:30px"></label>
    <input type="radio" id="radioImage4" name="radioI">
    <label for="radioImage4"><image src="{{asset('images/peters.jpg')}}" style="width:30px; height:30px"></label>
    <input type="radio" id="radioImage5" name="radioI">
    <label for="radioImage5"><image src="{{asset('images/seymour.jpg')}}" style="width:30px; height:30px"></label>
    
    <br>

    <br>
    <p>4. Which parties are currently in parliament?</p>
    <input type="checkbox" id="boxParties" name="boxP1">
    <label for="boxParties">Act</label>
    <br>
    <input type="checkbox" id="boxParties" name="boxP2">
    <label for="boxParties">Greens</label>
    <br>
    <input type="checkbox" id="boxParties" name="boxP3">
    <label for="boxParties">Labour</label>
    <br>
    <input type="checkbox" id="boxParties" name="boxP4">
    <label for="boxParties">Mana</label>
    <br>
    <input type="checkbox" id="boxParties" name="boxP5">
    <label for="boxParties">National</label>
    <br>
    <input type="checkbox" id="boxParties" name="boxP6">
    <label for="boxParties">Maori</label>
    <br>
    
    <br>
    <p>5. New Zealand once postponed an election for two years, when was this?</p>
    <select name="option">
    <option value="NoSelection">Blease Pick An Answer Blease Thanks :)</option>
    <option value="1918 flu pandemic">1918 flu pandemic</option>
    <option value="WW1">WW1</option>
    <option value="WW2">WW2</option>
    <option value="Global Finacial Crash">Global Finacial Crash</option>  
    </select>
    <br>

    <br>
    <button type="submit">submit</button>
    </form>
</body>
</html>