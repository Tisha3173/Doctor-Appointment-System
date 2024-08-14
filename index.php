<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital appointment booking system</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><i class="fa fa-plus-square"></i> MedCare</a>

        <nav class="navbar">
            <ul>
                <li><a href="#home" class="active">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#service">service</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="index1.php">Doctor/Admin</a></li>
            </ul>
        </nav>

        <div class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->


    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h1>Stay Happy, Stay Healthy</h1>
            <p>We Are determined for your better life </p>
            <a href="form.html"><button>register/login</button></a>
        </div>

        <div class="box-container">

            <div class="box">
                <i class="far fa-clock fa-5x"></i>
                <h3>24/7 Avaibility</h3>
                <p>Our heathcare service can be available round the clock with a website.</p>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>Total Care</h3>
                <p>We provide total care Doctors, that focus on health care instead of sick care. </p>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>Best Doctors</h3>
                <p>We have the best Doctors for general,Neurologist,Cardiologist,
                    Pediatrician. </p>
            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->


    <section class="about" id="about">

        <h1 class="heading">about us</h1>

        <div class="row">

            <div class="content">
                <h3>We treat and care for patients like our family!</h3>
                <p>Looking To Ask A Doctor Questions About Your Health Online? Hospital Management System Offers A Fast, Easy And Friendly Way To Gain Access To General Practitioners, Dieticians, Nutritionists, Gynaecologists, Psychologist, Dermatologist, Ayurveda, Homeopathy And More. You Can Get In Touch With Online Doctors 24 Hours A Day, 7 Days A Week With This Simple Application. No Matter What Your Condition, Lybrate Can Get You In Touch With A Doctor Online Straight Away. To Find Out More, Subscribe To Our Ask A Doctor Service Online Or Download The App And Get Access To Doctors On The Go!</p>
                <a href="https://www.apollohospitals.com/"><button>learn more</button></a>
            </div>

            <div class="image">
                <img src="images/national-doctors-day.webp" alt="">
            </div>

        </div>

    </section>


    <!-- about section ends -->


    <!--service section starts  -->
    <div class="sbody">
        <h1>Our Service</h1>
        <section class="service" id="service">
            <div class="row1">
                <div class="box">
                    <img src="images/Neurologist.png">
                    <h3>Neurologist</h3>
                    <p>The Neurologist Treats Disorders That Affect The Brain, Spinal Cord, And Nerves, Such As: Cerebrovascular Disease, Such As Stroke Demyelinating Diseases Of The Central Nervous System, Such As Multiple Sclerosis Headache Disorders Infections Of The Brain And Peripheral Nervous System</p>
                    <a href="https://www.urmc.rochester.edu/highland/departments-centers/neurology/what-is-a-neurologist.aspx"><button class="btn">see more</button></a>
                </div>

                <div class="box">
                    <img src="images/Cardiologist.png">
                    <h3>Cardiologist</h3>
                    <p>The Neurologist Treats Disorders That Affect The Brain, Spinal Cord, And Nerves, Such As: Cerebrovascular Disease, Such As Stroke Demyelinating Diseases Of The Central Nervous System, Such As Multiple Sclerosis Headache Disorders Infections Of The Brain And Peripheral Nervous System</p>
                    <a href="https://www.healio.com/news/cardiology/20120629/what-is-cardiology#:~:text=Cardiology%20is%20a%20medical%20specialty,failure%20and%20valvular%20heart%20disease."><button class="btn">see more</button></a>
                </div>

                <div class="box">
                    <img src="images/general.png">
                    <h3>General Doctor</h3>
                    <p>The Neurologist Treats Disorders That Affect The Brain, Spinal Cord, And Nerves, Such As: Cerebrovascular Disease, Such As Stroke Demyelinating Diseases Of The Central Nervous System, Such As Multiple Sclerosis Headache Disorders Infections Of The Brain And Peripheral Nervous System</p>
                    <a href="https://www.imsanz.org.au/about-us/what-is-a-general-physician"><button class="btn">see more</button></a>
                </div>

                <div class="box">
                    <img src="images/Pediatrician.png">
                    <h3>Pediatrician</h3>
                    <p>The Neurologist Treats Disorders That Affect The Brain, Spinal Cord, And Nerves, Such As: Cerebrovascular Disease, Such As Stroke Demyelinating Diseases Of The Central Nervous System, Such As Multiple Sclerosis Headache Disorders Infections Of The Brain And Peripheral Nervous System</p>
                    <a href="https://www.webmd.com/baby/pediatricians-role-twins"><button class="btn">see more</button></a>
                </div>
            </div>
    </div>
    </section>


    <!--service section starts  -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">contact us</h1>
        <h3 class="title">we love conversatios, lets talk.</h3>

        <div class="row">

            <div class="image">
                <img src="images/Mention-rafiki.svg" alt="">
            </div>

            <div class="form-container">
                <form method="post" action="contact.php">
                    <input type="text" name="firstname" placeholder="first name" required>
                    <input type="text" name="lastname" placeholder="last name" required>
                    <input type="email" name="email" placeholder="enter your email" required>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="message" required></textarea>
                    <input type="submit" name="btnSubmit" value="send">
                </form>
            </div>

        </div>

    </section>

    <!-- contact section ends -->



    <section class="footer">

        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

    </section>














    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/main.js"></script>


</body>

</html>