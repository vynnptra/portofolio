<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
</head>
<body class="bg-[#0F0715] text-white overflow-x-hidden"
    <!-- NAV START -->
     <div class="mr-60 ml-60 flex justify-between" id="home" >
        <div class=" relative">
            <img src="assets/logo.png " alt="" class="w-[4.1rem] mt-2 " >
        </div>
        <div class="pt-10">
            <a href="#home" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">home</a>
            <a href="#service" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">Service</a>
            <a href="#skills" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">Skills</a>
            <a href="#experience" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">Experience</a>
            <a href="#portofolio" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">Portofolio</a>
            <a href="#testimoni" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">Testimoni</a>
            <a href="#contact" class="m-8 text-white hover:text-[#654f8b]  hover:font-extrabold ease-in-out duration-150">Contact</a>
        </div>
     </div>

     <div id="navbarKedua" class="bg-black shadow-[0px_0px_40px_2px_rgba(156,98,255,0.5)] sticky top-0 w-screen p-8 transform -translate-y-56  transition-all duration-[750ms] ease-out z-10">
        <div class="mr-56 ml-60">
            <div class="">
            </div>
            <div class="text-right ">
                <a href="#home" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">home</a>
                <a href="#service" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">Service</a>
                <a href="#skills" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">Skills</a>
                <a href="#experience" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">Experience</a>
                <a href="#portofolio" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">Portofolio</a>
                <a href="#testimoni" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">Testimoni</a>
                <a href="#contact" class="m-8 text-white hover:text-[#654f8b] hover:text-xl hover:font-extrabold ease-in-out duration-150">Contact</a>
            </div>
        </div>
    </div>
     <!-- NAV END -->

     <!-- HERO START -->
     <div class=" absolute w-96 z-[-1] h-96 rounded-full bg-purple-900 blur-[170px] animate-pulse"></div>
     <?php
     include 'koneksi.php';
     $home_query = 'SELECT * FROM home';
     $query_sql = mysqli_query($koneksi, $home_query);
     $tampil = mysqli_fetch_assoc($query_sql);
     ?>
     <div class="w-96 z-[-1] h-96 rounded-full bg-purple-900 blur-[170px] animate-pulse float-right mt-48"></div>
         <div class="mt-12 mr-60 ml-60 flex">
             <div class="m-auto">
                 <h2 class="font-bold text-4xl">Hi, I am <?php echo $tampil['name'] ?></h2>
                 <h1 class="font-extrabold text-8xl mt-6 gradient-text-purple"><?php echo $tampil['job'] ?></h1>
                 <p class="w-[35rem] mt-6 text-xl"><?php echo $tampil['bio'] ?></p>
                 <button class="border rounded-3xl w-44 text-xl p-3 mt-6 hover:bg-[#311d55] hover:scale-105  ">hire me</button>
             </div>
             <div>
                 <img src="<?php echo $tampil['photo_profile'] ?>" alt="photo_profile" class="border-4 w-[30rem] rounded-3xl rotate-3 hover:-rotate-0 left-20 relative border-[#6C17FF] transition duration-500 hover:shadow-[0_0px_10px_5px_rgba(200,168,255,0.5)]" >
             </div>
         </div>
    </div>
        <div class="bg-black bg-opacity-10 h-40 w-screen mt-24 center">
            <div class="mr-60 ml-60 pt-12 flex gap-40">
                <div class="flex">
                    <h1 class="text-7xl font-bold">100+</h1>
                    <h2 class="text-xl mt-4">Project <br> Competed </h2>
                </div>
                <div class="flex">
                    <h1 class="text-7xl font-bold">25k+</h1>
                    <h2 class="text-xl mt-4">Happy <br> Client </h2>
                </div>
                <div class="flex">
                    <h1 class="text-7xl font-bold">1.2</h1>
                    <h2 class="text-xl mt-4">Years <br> Experience </h2>
                </div>
                <div class="flex">
                    <h1 class="text-7xl font-bold">90+</h1>
                    <h2 class="text-xl mt-4">client<br> Testimoni </h2>
                </div>
            </div>
        </div>
    <!-- HERO END -->

    <!-- SERVICE START -->
    <div id="service" class="w-screen h-[100vh] bg-black pt-28 mt-10">
        <div class="mr-60 ml-60">
            <h1 class="text-7xl text-center font-extrabold gradient-text-purple-100">Service</h1>
            <h3 class="text-xl text-center mt-5">I can build unique websites from the ground up, leveraging HTML, CSS, and
                JavaScript to match client specifications perfectly.</h3>
            <div class="flex flex-wrap gap-14 mt-20 ml-14">

            <?php
            include "koneksi.php";
            $service_query = "SELECT * FROM `service` ";
            $query_sql = mysqli_query($koneksi, $service_query);
            $data_service = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?>
            
            <?php foreach ($data_service as $service) { ?>
                <div class="bg-[#14041F] h-56 w-[40rem] rounded-3xl hover:bg-[#4B0083] pl-8 pt-8 pr-8 pb-8" data-aos="fade-down-right" data-aos-duration="1500" >
                    <h2 class="text-4xl font-bold"><?php echo $service['service-name'] ?></h2>
                    <p class="text-xl mt-2"><?php echo $service['description'] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- SERVICE END -->

    <!-- SKILLS START -->
    <div class=" absolute w-96 z-[-1] h-96 rounded-full bg-purple-900 blur-[170px] mt-[30rem] "></div>
    <div class="absolute w-96 z-[-1] h-96 rounded-full bg-purple-900 blur-[170px] ml-[80rem]"></div>
     <div id="skills" class="h-screen w-screen pt-32">
        <div class="ml-60 mr-60">
            <h1 class="text-7xl text-center font-extrabold gradient-text-purple-100 h-24">My Skills</h1>
            <h3 class="text-xl text-center ">I can build unique websites from the ground up, leveraging HTML, CSS, and JavaScript to match client specifications perfectly.</h3>

        <div class="flex flex-wrap gap-10 mt-14">

        <?php
            include "koneksi.php";
            $skill_query = "SELECT * FROM `skill` ";
            $query_sql = mysqli_query($koneksi, $skill_query);
            $data_skill = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?>

            <?php foreach ($data_skill as $skill) { ?>
            <div class="flex flex-col mt-12" >
                <div class="flex justify-between h-20 w-[43rem] " >
                    <div class="flex">
                        <i class="<?php echo $skill["logo"] ?> text-white text-5xl"></i>
                        <h1 class="mt-2 ml-1 text-xl font-bold "><?php echo $skill["skill-name"] ?></h1>
                     </div>
                        <p class="text-lg mt-4 font-semibold"><?php echo $skill['persentase'] ?></p>
                </div>
                <div class="bg-white h-2 -mt-7 w-[43rem] rounded-3xl overflow-hidden">
                    <div data-aos="fade-right" data-aos-duration="700"  class="gradient-bar h-2  w-[<?php echo $skill["persentase"] ?>] "></div>
                </div>
            </div>
            
            <?php } ?>
            </div>
        </div>
    </div>
     <!-- SKILLS END -->

     <!-- EXPERIENCE START -->
      <div class="bg-black h-screen w-screen ml-0 pt-24" id="experience">
        <div class="mr-60 ml-60">
            <h1 class="text-7xl text-center font-extrabold gradient-text-purple-100 h-24 " >Experience</h1>
            <h3 class="text-xl text-center -mt-2">I can build unique websites from the ground up, leveraging HTML, CSS, and JavaScript to match client specifications perfectly.</h3>
            <div class="mt-28" data-aos="fade-down" data-aos-duration="1200">

            <?php
            include "koneksi.php";
            $experience_query = "SELECT * FROM `experince` ";
            $query_sql = mysqli_query($koneksi, $experience_query);
            $data_experience = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?>

            <?php foreach ($data_experience as $experience) { ?>

                <div class="flex justify-between hover:bg-[#411b57] ease-in-out duration-300 group h-32 w-[90rem] border-b-2 border-[#602b86]" >
                    <h1 class="basis-1/12 text-center pt-2 ml-2 text-8xl font-extrabold ease-in-out duration-300 group-hover:text-5xl group-hover:text-[#6C17FF] "><?php echo $experience["id_developer"] ?></h1>
                    <div class="basis-11/12 pt-7 pl-5">
                        <h2 class="text-4xl font-bold"> <?php echo $experience["company"] ?></h2>
                        <p class="text-lg"><?php echo $experience["start-end_date"] ?></p>
                    </div>
                    <i class="fa-solid fa-arrow-right basis-1/12 text-center text-8xl font-bold mr-4 mt-4 group-hover:-rotate-90 ease-in-out duration-300"></i>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
     <!-- EXPERIENCE END -->

     <!-- PORTOFOLIO START -->
      <div id="portofolio" class="pt-24">
          <h1  class="text-7xl text-center font-extrabold gradient-text-purple-100 h-24 " >Portofolio</h1>
          <h3 class="text-xl text-center -mt-2">  Here are some of the projects and roles that have shaped my journey as a web developer.</h3>
          <div class="mt-20">
                <div class="mr-80 ml-80">
                    <div class="grid grid-rows-3 grid-flow-col gap-20">
                    <?php
                    include "koneksi.php";
                    $portofolio_query = "SELECT * FROM `portofolio` ";
                    $query_sql = mysqli_query($koneksi, $portofolio_query);
                    $data_portofolio = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
                    ?>

                    <?php foreach ($data_portofolio as $portofolio) { ?>
                        <div class="relative w-[35rem] h-[35rem] bg-[#1a0825] hover:bg-[#240e31] hover:scale-105 ease-in-out duration-500 rounded-3xl overflow-hidden group" data-aos="zoom-in-up">
                            <img src="<?php echo $portofolio['image']; ?>" alt="Portofolio" class="w-[45rem] group-hover:scale-105 ease-in-out duration-500">
                            <div class="absolute bottom-0 w-96 h-24 bg-[#4B0083] rounded-e-full group-hover:translate-x-0 ease-in-out duration-500 -translate-x-64">
                                <h1 class="font-bold text-2xl pt-8 pl-2 text-white"><?php echo $portofolio['portofolio_name']; ?></h1>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div>
      </div>
      <!-- PRTOFOLIO END -->

      <!-- TESTIMONI START -->
       <div class="bg-black h-[110vh] w-screen mt-36 pt-20" id="testimoni">
        <div class="mr-60 ml-60 flex gap-5">
            <div>
                <h1  class="text-6xl font-extrabold gradient-text-purple " >Client's Review</h1>
                <h3 class="text-lg-mt-2">The testimonial given by my client is very positive and reflects their satisfaction.</h3>
            </div>
            <div class="grid grid-cols-2 gap-10">

            <?php
            include "koneksi.php";
            $testimoni_query = "SELECT * FROM `testimoni` ";
            $query_sql = mysqli_query($koneksi, $testimoni_query);
            $data_testimoni = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?>

            <?php foreach ($data_testimoni as $testimoni) { ?>
                <!-- CARD START -->
                <div class="bg-[#14041F] h-[28rem] w-[26rem] rounded-xl grid grid-rows-2 pt-2 pl-2 group hover:scale-105 hover:bg-[#2d133f] ease-in-out duration-500 " data-aos="zoom-in-up" >
                    <div class="grid-cols-2 grid justify-between gap-16">
                        <img src="assets/<?php echo $testimoni["logo"] ?>" alt="" class="w-14 group-hover:scale-105 ease-in-out duration-500 ">
                        <img src="assets/<?php echo $testimoni["profile"] ?>" alt="" class="w-40 rounded-xl mt-4 group-hover:scale-105 ease-in-out duration-500">
                    </div>
                    <div>
                        <div class="-mt-10 ml-8">
                            <i class="fa-solid fa-play text-white text-3xl rotate-180 group-hover:rotate-90 ease-in-out duration-500 "></i>
                            <i class="fa-solid fa-play ml-2 text-white text-3xl relative right-4 group-hover:-rotate-90 ease-in-out duration-500"></i>
                        </div>
                        <p class="ml-7 max-w-80 text-lg"><?php echo $testimoni["message"] ?></p>
                        <h2 class="ml-7 font-semibold mt-20"><?php echo $testimoni["name"] ?></h2>
                        <p class="ml-7"><?php echo $testimoni["company"] ?></p>
                    </div>
                </div>
                <?php } ?>
                <!-- CARD END -->
            </div>
        </div>
       </div>
       <!-- TESTIMONI END -->
        
       <!-- CONTACT START -->
        <div class="h-screen w-screen mt-20 pt-32" id="contact">
            <div class="ml-48 mr-48 grid grid-flow-col" data-aos="fade-down">
                <div class="bg-[#200A31] h-[47rem] w-[55rem] rounded-xl pl-10 pt-5">
                    <h1  class="text-7xl font-extrabold gradient-text-purple h-24" >Let’s work together!</h1>
                    <h3 class="text-2xl ">send me a massage and let's start turning your ideas into an extraordinary project.</h3>
                    <form action="input.php" method="post" >
                        <div class="grid grid-cols-2 gap-8 mt-10 mr-5">
                            <input type="text" name="firstname" class="w-[24rem] h-12 rounded-xl bg-black text-white placeholder:pl-5" placeholder="First Name" required>
                            <input type="text" name="lastname" class="w-[24rem] h-12 rounded-xl bg-black text-white placeholder:pl-5" placeholder="Last Name">
                            <input type="email" name="email" class="w-[24rem] h-12 rounded-xl bg-black text-white placeholder:pl-5" placeholder="Email Address" required>
                            <input type="number" name="number" class="w-[24rem] h-12 rounded-xl bg-black text-white placeholder:pl-5" placeholder="Phone Number" required>
                        </div>
                        <input type="text" name="message" class="w-[50.6rem] h-64 rounded-xl bg-black text-white placeholder:pl-5 placeholder:relative placeholder:bottom-24 mt-5" required placeholder="Message">
                        <div class="inline-block p-[2px] gradient-button rounded-3xl mt-10">
                            <button  name="submit" type="submit" class="bg-[#200A31] text-white px-6 py-2 w-44 rounded-3xl focus:outline-none  hover:bg-opacity-70 ">
                                Send Message
                            </button>
                          </div>
                    </form>
                </div>
                <div class="grid grid-rows-4 mt-52 ">
                    <a href="" class="grid grid-flow-col ml-28">
                        <img src="assets/phone.png" alt="" class="w-16">
                        <div class="-ml-52">
                            <h1 class="text-xl">Phone</h1>
                            <p class="font-bold text-xl">+62 882 3202 4112</p>
                        </div>
                    </a>
                    <a href="" class="grid grid-flow-col ml-28 -mt-8">
                        <img src="assets/email.png" alt="" class="w-16">
                        <div class="-ml-[11.5rem]">
                            <h1 class="text-xl">Email</h1>
                            <p class="font-bold text-xl">kevin.putra@gmail.com</p>
                        </div>
                    </a>
                    <a href="" class="grid grid-flow-col ml-28 -mt-16">
                        <img src="assets/instagram.png" alt="" class="w-16">
                        <div class="-ml-[12.7rem]">
                            <h1 class="text-xl">Instagram</h1>
                            <p class="font-bold text-xl">@kevinn__</p>
                        </div>
                    </a>
                    <a href="" class="grid grid-flow-col ml-28 -mt-24">
                        <img src="assets/location.png" alt="" class="w-16">
                        <div class="ml-[3.3rem]">
                            <h1 class="text-xl">Address</h1>
                            <p class="font-bold text-xl">Tangkisan, Kaligentong, Ampel,
                                Boyolali, Jawa Tewngah</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- CONTACT END -->

        <!-- FOOTER START  -->
        <div class="border-t-[1px] h-20 w-[80vw] ml-44 mt-16">
            <p class="text-xl text-center mt-5">© 2024 Kevin Putra. All rights reserved.</p>
         </div>
         <!-- FOOTER END -->

     <script src="script.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
    AOS.init();
    </script>
</body>
</html>