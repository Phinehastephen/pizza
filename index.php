

<title>pizza</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
            color: black;
        }
        .brand-text{
            color:#cbb09c !important ;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza{
            width: 100px;
            /* margin: 40px auto -30px ; */
            margin-top: 10px;
            margin-left: 38%;
            padding-top: 50px;
            position: relative;
            top: -30px;
            display: block;
        }
    </style>
<!DOCTYPE html>
<html lang="en">

    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text" style="text-align: center;"><img src="emoji1.jfif" alt="emoji" style="width: 60px;"> Martyr's PIZZA</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li ><a href="contact.php" class="btn brand z-depth-0" style="text-decoration: none; color:white;">More info</a></li>
            </ul>
        </div>
    </nav>
    <section class="container grey-text" >
    <h4 class="center"> Place an order </h4>
    <form class="form-group white" action="add.php" method="POST">
        <label for="email" class="form-group"><b style="color: black;">Your Email:</b></label>
        <input type="text" name="email" placeholder="filling in your valid email" value="<?php $email?>"  >
        <div class="red-text" style="color: red;"><?php echo $errors['email']; ?> </div><br>
        <label for="title"><b style="color: black;">Pizza Title:</b></label>
        <input type="text" name="title"  placeholder="title"  value="<?php $title?>">
        <div class="red-text" style="color: red;"><?php echo $errors['title']; ?></div><br>
        <label for="ingredients"><b style="color: black;">Ingredient (comma separated):</b></label>
        <input type="text" name="ingredients" placeholder="Desired toppings" value="<?php $ingredients ?>">
        <div class="text-red" style="color: red;"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
           <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
           <div class="green-text"><?php echo $success; ?></div>
         </div><br>
         <div class="center">
         <a href="special.php"><input type="post" value="Today's Specials" name="get" style="background-color:limegreen;" class="btn btn-success"></a>
         </div>
    </form>
    </section>
    <footer class="section">
    <div class=" center grey-text">copyright Martyr's pizzas</div>
</footer>
</html>
        