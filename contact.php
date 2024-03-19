<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Info</title>
</head>

<body>
    <?php include "header.html"; ?>
    <div class="head-info">
        <h1>Contact Us</h1>
    </div>
    <div class="path-way">
        <p><a href="./index.php">Home</a>><a href="./contact.php">Contact Us</a></p>
    </div>


    <div class="main-page-ct" style="overflow-x: hidden;">
        <div class="left-40per">
            <div class="main-info" style="animation: ease-in 50ms;">
                <h2>CONTACT INFORMATION:</h2>
                <hr>
                <h4>Bhawa's Academy (Higher Secondary), Ghansore</h4>
                <hr>
                <p><b>Address:</b> Ram Chhaya Badi Bakhri, Ghansor, District Seoni, (480997)</p>
                <hr>
                <p><b>Email:</b> bhawasacademy9@gmail.com</p>
                <hr>
                <p> <b>Phone Number</b> </p>
                <p><b>Office:</b> +91 62630 58696</p>
                <p><b>Principal:</b> +91 91310 38100 </p>
                <p> <b>President:</b> +91 83195 25239</p>
            </div>
        </div>
        <div class="right-60per">
            <div class="form-ct">
                <h2>FOR ENQUIRIES : </h2>
                <div class="main-frm">
                    <form action="https://formspree.io/f/xqkrbepa" method="POST" name="formide">
                        <div class="name-frm">

                            <input type="text" placeholder="First Name" name="full-name"> <input type="text" placeholder="Last Name" name="full-name">
                        </div>
                        <div class="form-group">

                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="_replyto">
                        </div>
                        <div class="form-group">

                            <input type="text" placeholder="Mobile Number" name="telephone">
                        </div>

                        <div class="form-group">

                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Message" rows="3" name="complaint"></textarea>
                        </div>

                        <button type="submit" value="File Complaint" id="subt-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.html"; ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        let btn = document.querySelector("#subt-btn");
        btn.addEventListener("click", () => {
            document.formide.reset();
            // window.location = "index.php";
        });
    </script>
</body>

</html>