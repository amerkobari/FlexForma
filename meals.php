<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meals</title>
    <link rel="stylesheet" href="css.css" />
</head>
<body>
<header>
    <div class="flex-container">
        <img alt="image" src="img/ff.png" onclick="reloadPage()" class="home-image2" id="waleed"/>
        <a class="glow" href="#" onclick="scrollToDiv('saturday', event)">SATURDAY</a>
        <a class="glow" href="#" onclick="scrollToDiv('sunday', event)">SUNDAY</a>
        <a class="glow" href="#" onclick="scrollToDiv('monday', event)">MONDAY</a>
        <a class="glow" href="#" onclick="scrollToDiv('tuesday', event)">TUESDAY</a>
        <a class="glow" href="#" onclick="scrollToDiv('wednesday', event)">WEDNESDAY</a>
        <a class="glow" href="#" onclick="scrollToDiv('thursday', event)">THURSDAY</a>
        <a class="glow" href="#" onclick="scrollToDiv('friday', event)">FRIDAY</a>
    </div>
</header>


<div id="saturday" style="margin: 8%;margin-top: 5%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">SATURDAY</div>

    <div id="radius" style="height: 270px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 16%">Oats Banana Pancakes with
                    Protein Shake</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 16%">Multigrain roti along with palak chicken and Avocado bell pepper salad</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 16%">Bananas</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 16%">Brown rice, peas paneer curry, sprouts vegetable salad</td>
            </tr>
        </table>
    </div>
</div>

<div id="sunday" style="margin: 8%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">SUNDAY</div>

    <div id="radius" style="height: 270px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 17%">Oatmeal with Greek Yogurt & Seasonal fruits
                    Mango Juice</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 17%">Multigrain roti, fish curry, vegetable salad</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 17%">Toast with Jam</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 17%">Broken wheat khichidi along with carrot raita, egg white, and vegetable salad</td>
            </tr>
        </table>
    </div>
</div>

<div id="monday" style="margin: 8%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">MONDAY</div>

    <div id="radius" style="height: 350px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 15%">Poached Eggs<br>
                    Whole Grain Toast<br>
                    Protein Shake</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 15%">Quinoa upma, chicken and broccoli salad</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 15%">	Mixed Nuts & Dried Fruits</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 15%">Lean Beef and vegetable curry, brown rice, cucumber raita<br>
                    Baby Potatoes<br>
                    Chocolate Milk</td>
            </tr>
        </table>
    </div>
</div>

<div id="tuesday" style="margin: 8%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">TUESDAY</div>

    <div id="radius" style="height: 370px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 2%">Oatmeal with Honey<br>
                    Apple Juice</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 2%">
                    Grilled Chicken<br>
                    Salad<br>
                    Whole Grain Bread</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 2%">Toast with Peanut Butter</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 2%">Methi Chicken<br>
                    Brown Rice<br>
                    Broccoli<br>
                    Protein Shake</td>
            </tr>
        </table>
    </div>
</div>

<div id="wednesday" style="margin: 8%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">WEDNESDAY</div>

    <div id="radius" style="height: 350px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 8%">Scrambled Egg<br>
                    Whole Grain Toast<br>
                    Smoothie</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 8%">
                    Grilled chicken vegetable roti rolls<br>
                    Green Salad</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 8%">Mixed Nuts & Dried Fruits</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 8%">Chicken Stir Fry<br>
                    Spring Onion, Peppers & Broccoli<br>
                    Chocolate Milk</td>
            </tr>
        </table>
    </div>
</div>

<div id="thursday" style="margin: 8%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">THURSDAY</div>

    <div id="radius" style="height: 350px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 15%">Oatmeal<br>
                    Whole Grain Toast<br>
                    Orange Juice</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 15%">Whole Grain Chicken Wrap<br>
                    Black Beans, Peppers & Greek Yogurt</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 15%">Apple with peanut butter</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 15%">Keema bhurji and multigrain rotiLean Beef Mince<br>
                    Sweet Potato<br>
                    Protein Shake</td>
            </tr>
        </table>
    </div>
</div>

<div id="friday" style="margin: 8%;padding-top: 60px">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px;color: #f9f9f9">FRIDAY</div>

    <div id="radius" style="height: 350px" >
        <table width="100%" style="font-size: 20px;padding-left: 10%;padding-top: 2%">
            <tr>
                <td style="font-size: 25px;font-weight: bolder">Breakfast</td>
                <td style="padding-left: 11%">Oatmeal with Nuts<br>
                    Smoothie</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Lunch</td>
                <td style="padding-top: 30px;padding-left: 11%">
                    Whole wheat pasta with chicken and<br>
                    Green Salad</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Snack</td>
                <td style="padding-top: 30px;padding-left: 11%">Granola or Cereal</td>
            </tr>
            <tr>
                <td style="padding-top: 30px;font-size: 25px;font-weight: bolder">Dinner</td>
                <td style="padding-top: 30px;padding-left: 11%">Fish curry, boiled green peas salad<br>
                    Brown Rice<br>
                    Garden Peas<br>
                    Milk</td>
            </tr>
        </table>
    </div>
</div>

<script type="text/javascript" src="script.js">
</script>
</body>

</html>