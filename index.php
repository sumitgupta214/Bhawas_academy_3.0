<?php include "connection.php"; 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>BHAWAS AN INSPIRATION</title>
    <link rel="icon" href="./Assets/actual-logo-BA-noBg.png">
</head>

<body>
<script src="viewport.js"></script>

    <span class="loader"></span>
    <?php include "header.html"; ?>

    <?php include "./banner.html"; ?>

    <div class="bottom-page" style="overflow-x: hidden;">
        <div class="msg-info" data-aos="fade-right" data-aos-offset="350" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="false">
            <h1>FROM THE CHAIRMAN'S DESK </h1>

            <p>
                A child is a unique gift of God to humanity with a bundle of talents hidden inside. A teacher as a mentor, nurturer and an inspirer polishes the various talents and virtues of the child to make him or her, a responsible citizen of the society. Children are the future of the nation. So they should be taught the right values in life to develop the feeling of brotherhood and nationalism. <br><br>
                I always ask myself, "What should be the first priority in a student's life?" The answer which I find is nothing but 'time'.
                There are many factors which are responsible for one's success depends on how meticulously he or she plants the little time at his or her disposal to complete the plan of
                students. Hundred percent devotion within a stipulated time limit results in success. <br><br>
                Success however, should always be combined with strong moral and ethical values.
                The focus should lie in preparing students to think reflectively and develop their own enhanced capacity for ethical reasoning with a correct code of conduct.
                This will develop good moral judgment in students and it will help to promote social values both within the classroom and beyond. <br><br>
                Money can never buy what I have wished for my students so, let education be an all-round development with social, ethical and moral values inculcated in teaching.
                Let me students be a part whatever noble we do and our good teachings would still be around, long after we have gone, making our country a 'dream-country' for all.
                All the best for the future.. <br><br>

                <b>Mr. Shakti Singh (Our Motivator)</b>
            </p>
        </div>
        <div class="notices" data-aos="fade-left" data-aos-offset="400" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="false">

            <h1>Notice</h1>
            <hr>
            <div class="notice-box">
                <ul>
                    <?php
                    $query = "SELECT * FROM `link set`;";

                    // FETCHING DATA FROM DATABASE 
                    $result = $db->query($query);

                    if ($result->num_rows > 0) {
                        // OUTPUT DATA OF EACH ROW 
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <li><?php echo $row['Date']; ?> &nbsp; <?php echo "<a href='" . $row['Link'] . "'>" . $row['Title'] . "</a>"; ?> </li>
                    <?php

                        }
                    } else {
                        echo "0 results";
                    }

                    $db->close();
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="mts">
        <h1>
            List of Meritorious Students
        </h1>
    </div>
    <div class="alignment-box" style="overflow-x: hidden;">
        <div class="bw-top-ls" style="overflow: hidden;">
            <div class="class-tops" data-aos="fade-up-right" data-aos-offset="350" data-aos-delay="7" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="false">
                <h2>TOPPERS LIST : 2022-23 </h2>

                <div class="for-xii">
                    <h3>Class XII:</h3>
                    <div class="grid-box">
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt="">
                            <p>Tanishka <br>Namdeo<br>(Grade - 92.60%)</p>
                        </div>
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/CHANDRAPRAKASH PATEL.jpg" alt="">
                            <p>Chandraprakash <br>Patel<br>(Grade - 90.60%)</p>
                        </div>
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/SATENDRA SHIVHARE.jpg" alt="">
                            <p>Satendra <br>Shivhare<br>(Grade - 89.00%)</p>
                        </div>
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/UDIT RAWAT.jpg" alt="">
                            <p>Udit <br>Rawat<br>(Grade - 89.00%)</p>
                        </div>
                    </div>
                </div>



                <div class="for-x">
                    <h3>Class X:</h3>
                    <div class="grid-box">
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/SHREYA AGRAWAL.jpg" alt="">
                            <p>Shreya <br>Agrawal<br>(Grade - 97.80%)</p>
                        </div>
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/RANI KUSHWAHA.jpg" alt="">
                            <p>Rani <br>Kushwaha<br>(Grade - 96.80%)</p>
                        </div>
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/ABHISHEK RAI.jpg" alt="">
                            <p>Abhishek <br>Rai<br>(Grade - 94.42%)</p>
                        </div>
                        <div class="stu-grid">
                            <img src="./Assets/Toppers/ADARSH RAJ NEMA.jpg" alt="">
                            <p>Adarsh <br>Raj Nema<br>(Grade - 94.42%)</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>





        
        <div class="topper-sports">
            <div class="sports-top" data-aos="fade-up-left" data-aos-offset="400" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="false" style="overflow-x: hidden;">
                <h2>SPORTS : 2022-23 </h2>
                <div class="sports-box">
                    <div class="for-xii ">
                        <div class="for-sports-stu">
                            <div class="stu-grid sports-grid">
                                <img src="./Assets/Toppers/OM SHARMA.jpg" alt="">
                                <p>Om Sharma<br>(Class - XII)</p>
                            </div>
                            <div class="stu-grid sports-grid">
                                <img src="./Assets/Toppers/BASU DEV THAKUR.jpg" alt="">
                                <p>Basu Dev Thakur<br>(Class - XII)</p>
                            </div>
                            <div class="stu-grid sports-grid">
                                <img src="./Assets/Toppers/SHREYANSH AGRAWAL.jpg" alt="">
                                <p>Shreyansh Agrawal<br>(Class - XI)</p>
                            </div>
                            <div class="stu-grid sports-grid">
                                <img src="./Assets/Toppers/SANATAN LAKHERA.jpg" alt="">
                                <p>Sanatan Lakhera<br>(Class - XI)</p>
                            </div>
                            <div class="stu-grid sports-grid">
                                <img src="./Assets/Toppers/KAJAL KURVETI.jpg" alt="">
                                <p>Kajal Kurveti<br>(Class - VIII)</p>
                            </div>
                            <div class="stu-grid sports-grid">
                                <img src="./Assets/Toppers/SIDDHI BOPCHE.jpg" alt="">
                                <p>Siddhi Bopche<br>(Class - VIII)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.html" ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            disable: function() {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            }
        });
    </script>
</body>

</html>