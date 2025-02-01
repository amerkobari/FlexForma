<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FlexForma</title>
    <link rel="stylesheet" href="css.css" />
    <style>

        /* Style for the modal container */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black background */
            backdrop-filter: blur(10px);
        }

        /* Style for the modal content */
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style to close the modal */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            cursor: pointer;
        }
        .close:hover {
            color: red;
        }
        .closebutton{
            background-color: #bb260d;
            color: white;
            border: #bb260d;
            height: 30px;
            width: 150px;
            font-weight: bolder;
            border-radius: 4px;
        }
        .closebutton:hover{
            background-color: darkred;
        }
    </style>

</head>
<body>
<header>
    <div class="flex-container">
        <img alt="image" src="img/ff.png" onclick="reloadPage()" class="home-image2" id="waleed"/>
        <a id="hexon" class="glow" href="#" onclick="scrollToDiv('first', event)">HOME</a>
        <a class="glow" href="#" onclick="scrollToDiv('features', event)">FEATURES</a>
        <a class="glow" href="#" onclick="scrollToDiv('faqs', event)">FAQ</a>
        <a class="glow" href="#" onclick="scrollToDiv('contact', event)">CONTACT</a>
        <?php
        if (isset($_SESSION['username'])) {
            // User is logged in
            echo '<a style="padding-left: 25%; font-size: 20px;" class="glow" href="logout.php" title="Click To Logout"><u>' . $_SESSION['username'] . '</u></a>';
        } else {
            // User is not logged in
            echo '<a style="padding-left: 25%" class="glow" href="Login.php">SIGN UP/IN</a>';
        }
        ?>
    </div>
</header>
<div class="main" id="first">
    <h2 data-text="FlexForma!">FlexForma!</h2>
    <p  id="introText">Unleash Your Strength, Welcome to
        Flexforma! This is your platform for achieving your fitness goals and discovering a healthier you.</p>

</div>
<div class="features" id="features">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px">FEATURES</div>



    <div class="home-container1" id="radius">
        <span class="topic">
             HUNDRED OF TRAINING VIDEOS
        </span>
        <br>
        <span class="content"> Dive into endless workout options! Our extensive library of
            training videos <br> is here to energize your fitness routine and keep you motivated. </span>

        <div class="cursor"></div>

    </div>


    <div style=" padding-top: 20px; padding-left: 6px" class="home-container6">

        <div class="meals" onclick="redirectToMeals()">
            <table>
                <tr  class="smalltopic">
                    <td style="padding-left: 285px; padding-top: 40px;">MEALS</td>
                </tr>
                <tr>
                    <td style="padding-left: 40px;" class="mealstext">
                        Power your fitness journey with us. <br> Exercise and nutrition unite to propel you towards your goals. From muscle-building proteins
                        to energy-packed carbs, every bite counts. Sculpt your body. Ignite passion. Achieve excellence. </td>
                    <td><img alt="image" src="img/meal1.png" width="280"></td>
                </tr>
            </table>

        </div>


        <div class="home-container9">
            <div class="home-container6">
                <div class="widget" id="radius" onclick="calorieweb()">

                    <div class="fourcontent"><h3>CALORIES</h3></div>
                    <img src="img/calories.jpeg">
                </div>

                <div class="widget" id="radius" >
                    <div class="fourcontent" onclick="redirectToWorkoutPage()"><h3>WORKOUT</h3></div>
                    <img src="img/workout.jpg">
                </div>
            </div>

            <div class="home-container6">
                <div class="widget" id="radius" >
                    <div class="fourcontent"onclick="redirectToSupplements()"><h3>SUPPLEMENTS</h3></div>
                    <img src="img/supplements.jpg">
                </div>
                <div class="widget" id="radius" onclick="redirectToChampions()">
                    <div class="fourcontent"><h3>CHAMPIONS</h3></div>
                    <img src="img/championjpeg.jpeg">
                </div>
            </div>
        </div>
    </div>

</div>

<div class="faqs" id="faqs">
    <div style="font-weight: bolder;text-align: center;font-size: 80px;margin-bottom: 20px">FAQS</div>

    <div class="faq-item" onclick="toggleAnswer(this)">
        <div class="question">Can I eat  immediately after workout?</div>
        <div class="icon">+</div>
        <div class="answer">A wise decision is to wait for at least 15- 30
            minutes after your workout. Include the right amounts of
            carbohydrate
            and protein based foods to replenish your body with energy.</div>
    </div>

    <div class="faq-item" onclick="toggleAnswer(this)">
        <div class="question">Is milk good for building muscle?</div>
        <div class="icon">+</div>
        <div class="answer">Yes, it is an excellent source of calories and
            protein. So, milk can
            support muscle growth and replenish the body with energy. </div>
    </div>

    <div class="faq-item" onclick="toggleAnswer(this)">
        <div class="question">Can we drink cold water after a workout?</div>
        <div class="icon">+</div>
        <div class="answer">Your body generates heat when you workout.
            The purpose is to increase the core body temperature and sweat
            out. After the workout your body might be in a dehydrated state
            and drinking cold/room
            temperature  water  can replenish and hydrate your body quickly. </div>
    </div>

    <div class="faq-item" onclick="toggleAnswer(this)">
        <div class="question">What is a good protein rich breakfast?</div>
        <div class="icon">+</div>
        <div class="answer">A good protein rich breakfast should keep you sat
            iated and regulate your blood sugar levels. Some good protein
            rich breakfasts are oatmeal with nuts and fruits, banana protein
            smoothie, chickpea cheala,
            Scrambled eggs and whole wheat toast etc.</div>
    </div>

    <div class="faq-item" onclick="toggleAnswer(this)">
        <div class="question">What are the 3 foods you should never eat?</div>
        <div class="icon">+</div>
        <div class="answer">The 3 white evils that you should refrain
            from eating are White Sugar, White Flour and White Salt.</div>
    </div>
</div>

<div id="signin-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeSignInModal()">&times;</span>
        <p style="font-size: 30px;font-weight: bolder">You need to sign in to access this feature.</p>
        <button class="closebutton"  onclick="redirectSignIn()">Sign Up/In</button>
    </div>
</div>

<footer class="home-container8">
    <div style="width: 100%" id="contact">
        <table width="100%" style="padding: 20px;padding-top: 40px;padding-bottom: 30px">
            <tr>
                <td width="40%"><img width="120px" alt="image" src="img/ff.png" class="home-image1" /></td>
                <td class="Copyrightclass">Amer Kobari<br>Email: amerkobari22@gmail.com<br>Phone: +970 599 799 230<br>
                    <br>Tariq Marmash<br>Email: tariqmarmash17@gmail.com<br>Phone: +970 592 757 780<br></td>
                <td align="center" width="25%" class="Copyrightclass">©Copyright 2023.<br>All rights reserved. Amer & Tariq.</td>
            </tr>
        </table>
    </div>

</footer>

<script type="text/javascript" src="script.js">
</script>
<script>


    // Function to open the sign-in modal
    function openSignInModal() {
        var modal = document.getElementById('signin-modal');
        modal.style.display = 'block';
    }

    // Function to close the sign-in modal
    function closeSignInModal() {
        var modal = document.getElementById('signin-modal');
        modal.style.display = 'none';
    }

    // Function to redirect to the sign-in page
    function redirectSignIn() {
        // Add the URL to your sign-in page
        window.location.href = 'Login.php';
    }

    function redirectToWorkoutPage() {
        <?php
        if (isset($_SESSION['username'])) {
            // User is logged in, redirect to the workout page
            echo 'window.location.href = "WorkoutPage.php";';
        } else {
            // User is not logged in, show the sign-in modal (replace this with your actual implementation)
            echo 'openSignInModal();';
        }
        ?>
    }
    function redirectToChampions() {
        <?php
        if (isset($_SESSION['username'])) {
            // User is logged in, redirect to the workout page
            echo 'window.location.href = "champions.php";';
        } else {
            // User is not logged in, show the sign-in modal (replace this with your actual implementation)
            echo 'openSignInModal();';
        }
        ?>
    }
    function redirectToSupplements() {
        <?php
        if (isset($_SESSION['username'])) {
            // User is logged in, redirect to the workout page
            echo 'window.location.href = "Supplements.php";';
        } else {
            // User is not logged in, show the sign-in modal (replace this with your actual implementation)
            echo 'openSignInModal();';
        }
        ?>
    }
    function redirectToMeals() {
        <?php
        if (isset($_SESSION['username'])) {
            // User is logged in, redirect to the workout page
            echo 'window.location.href = "meals.php";';
        } else {
            // User is not logged in, show the sign-in modal (replace this with your actual implementation)
            echo 'openSignInModal();';
        }
        ?>
    }
</script>
</body>

</html>