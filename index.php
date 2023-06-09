<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date) 
    VALUES ('$name', '$email', '$number', '$date')") or die('Query failed: ' . mysqli_error($conn));

    if ($insert) {
        $message []= 'Appointment made successfully';
    } else {
        $message[] = 'Appointment failed';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dentist website</title>
    
    <!--Font aweson Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!--Custom css-->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">dent<span>Art</span></a>

                <nav class="nav">
                    <a href="#home">Inicio</a>
                    <a href="#about">acerca</a>
                    <a href="#services">servicios</a>
                    <a href="#contact">contacto</a>
                </nav>

                <a href="#contact" class="link-btn">make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>
        </div>
    </header>
<!--END OF HEADER-->

<!--Home starts-->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Dejanos Iluminar tu sonrisa!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officia, quis aliquid, consectetur vel iure incidunt corrupti nesciunt accusantium enim cumque veniam aut tempore architecto non. Dolorem veniam inventore illo.</p>
                <a href="#contact" class="link-btn">make appointment</a>
             </div>
        </div>
    </div>

</section>

<!--home section ends-->

<!-- about section start-->

<section class="about" id="about">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image" >
                <img src="images/home-bgG.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>About us</span>
                <h3>True healthcare for your family</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore ab laudantium saepe assumenda nemo debitis hic vero sequi perspiciatis? Aliquam in temporibus provident blanditiis corrupti dignissimos numquam maiores aspernatur nihil?</p>
                <a href="#contact" class="link-btn">make appointment</a>
             </div>

         </div>
    </div>

</section>

<!--About section ends-->

<!--Services section starts-->

<section class="services" id="services">
    <h1 class="heading">Our services</h1>
    <div class="box-container container">

        <div class="box">
            <img src="images/icon-1.svg" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga nemo ad dicta rem placeat modi, asperiores molestias, fugit aliquam quaerat ipsam architecto at illo temporibus libero consequatur provident nisi.</p>
            
        </div>

        <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dignissimos labore accusantium nesciunt et repellendus aspernatur vel optio dolores quidem eius laborum, neque esse atque ex sed mollitia aperiam placeat!</p>

        </div>

        <div class="box">
            <img src="images/icon-3.svg" alt="">
            <h3>Oral hygine experts</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam modi illo ad officia maiores, natus necessitatibus doloribus impedit. Velit tempore delectus maiores sunt qui eveniet quis quisquam hic nobis accusamus.</p>
        </div>

        <div class="box">
            <img src="images/icon-4.svg" alt="">
            <h3>Root canal specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam culpa dolores, alias quis ullam rerum officiis quia deserunt sequi nihil omnis aliquid eligendi vel beatae, soluta expedita laboriosam praesentium iste?</p>
        </div>

        <div class="box">
            <img src="images/icon-5.svg" alt="">
            <h3>Live dental advisory</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur inventore ullam, error aliquam rem temporibus ducimus, nulla fuga a iusto praesentium neque vero, id maxime recusandae debitis nihil suscipit perspiciatis.</p>
        </div>

        <div class="box">
            <img src="images/icon-6.svg" alt="">
            <h3>Cavity Inspection</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab quae sequi, quas numquam laborum quis molestiae odit, dicta culpa a optio consequatur reprehenderit magni enim voluptas porro explicabo fugiat iusto.</p>
        </div>
    </div>
</section>
    
<!--service ends-->

<!--process starts-->

<section class="process">
    <h1 class="heading">work process</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/process-1.png" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe nesciunt, placeat veritatis ab eaque aliquam earum deserunt beatae! Quisquam in, molestias eaque accusantium praesentium accusamus saepe repellendus dolor impedit iusto.</p>
        </div>

    <div class="box">
        <img src="images/process-2.png" alt="">
        <h3>Pediatric Dentestry</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo velit dolorum inventore perferendis veritatis debitis repellendus reiciendis autem, amet enim animi molestias. Blanditiis delectus maxime reiciendis. Commodi enim eveniet distinctio.</p>
    </div>

    <div class="box">
        <img src="images/process-3.png" alt="">
        <h3>Dental Implants</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat voluptatem ipsam necessitatibus rerum aut tenetur temporibus, officiis molestias dicta laboriosam sapiente, suscipit repudiandae, voluptates ipsum non aliquid autem aliquam. Sequi.</p>
    </div>

    </div>

</section>

<!--Process ends-->

<!--Contact section starts-->

<section class="contact" id="contact">
    <h1 class="heading">Make appointment</form>

        <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">

        <form action="?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">' .$message.'</p>';
                    }
                }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
           
        </form>
                  
</section>

<!--Contact section ends-->

<section class="footer">
    <div class="box-container container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Telefono</h3>
            <p>7798-3583</p>  
         </div>

    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Direccion</h3>
        <p>frente gallo mas gallo, Masatepe, Nicaragua</p>
    </div>

    <div class="box">
        <i class="fas fa-clock"></i>
        <h3>9:30am - 5:00pm  Lun-vier</h3>
        <h3>9:30am - 12pm Sabado</h3>

    </div>

    <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>Email</h3>
        <p>xepe199@gmail.com</p>
    </div>
    </div>
</section>


<!--Footer section starts-->

<script src="js/script.js"></script>
</body>
</html>