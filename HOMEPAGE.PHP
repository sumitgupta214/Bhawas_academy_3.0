<?php include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./HOMETEST.css">
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
    </div>

    <div class="right-con-box">

        <div class="msg-right" data-aos="fade-left" data-aos-offset="400" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-once="false">
            <h1>Director's Message </h1>

            <p>
                Welcome forward to a year filled with fun, frolic and learning experiences that will make preschool really wonderful. Let us be partners in this enriching experience to get the best for your child. Our school motto is Learn, Lead, and Achieve. this is best achieved through students, parents, teachers and communit Working together to deliver the best educational opportunities.

                Bhawa's Academy school is a school with a future focus and a youthful optimism. Our caring relationship with student and partnership with parents provideus with the best opportunity to deliver an education that challenges every student to live our motto "Learn, Lead and Achieve
                <br><br>

                <b>Regards Kuldeep Gumasta Managing Diretor</b>
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



    <div class="hall-of-fame-poster">
        <h1>Hall Of Fame</h1>
        <div class="poster-img">
            <img src="./Assets/HallofFame/hof1.jpg" alt="">
        </div>
    </div>




    <div class="bottom-page">

        <div class="mts">
            <h1>
                List of Meritorious Students
            </h1>
        </div>

        <div class="toppers-list">
            <div class="right-list">
                <div class="toppers-title">
                    <h2>ACADEMIC Toppers : 2022-23</h2>
                </div>

                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>
                    <div class="text">
                        TANISHKA NAMDEO <br>87.55%
                    </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>

            </div>
            <div class="left-list">
                <div class="toppers-title">
                    <h2>SPORTS : 2022-23</h2>
                </div>
                <br>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>

                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
                </div>
                <div class="list-con-seq">
                    <span><img src="./Assets/Toppers/TANISHKA NAMDEO.jpg" alt=""></span>

                    <div class="text">TANISHKA NAMDEO <br>87.55% </div>
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