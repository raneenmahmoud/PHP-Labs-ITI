<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <style>
        body{
            margin: 0%;
                background: linear-gradient(#2a4f69,
                #d0e4fc,
                #d2def8,
                #d2e8f4) ;
                background-attachment: fixed;">
            }
        p{
            color:red;
            font-weight: 500;
            font-size: 1.5vw;
        }
    </style>
</head>
<body>
    <section class = "container p-3 d-flex justify-content-center">
    <div class="row border border-1 p-4 shadow-lg">
       <h1>Contact Us Form</h1>
        <form  action="index.php" method="post" class="p-3">
            <p class="text-center fs-3"><?php echo $error ?></p>
        <div class="mb-2">
            <label class="form-label">Your Name</label>
            <input type="text" class="form-control" name="username" value="<?php echo remember_input("username")?>" >
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Your Email</label>
            <input type="text" class="form-control" name="Email" value="<?php echo remember_input("Email")?>"> 
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Your Message</label>
            <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" name="message" style="height: 100px" ><?php echo remember_input("message")?></textarea>
        </div>
        <!-- <div class="mb-2 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <div class="d-flex justify-content-center gap-3">
        <button type="submit" class="btn btn-primary">Send</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </form>
</div>
    </section>
</body>
</html>