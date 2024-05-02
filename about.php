<?php 
include 'partials/header.php'
?>

<style>
    
.about{
    display: flex;
    height: 100vh;
}
.texts{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}
.heads{
    margin-top: 100px;
    height: 200px;
    width: 200px;
    border-radius: 50%;
    transition: 0.5s ease;
    margin-bottom: 50px;
}
.heads:hover{
    transform: scale(1.1);
    cursor: pointer;
}

.picture{
padding-top: 20px;
}

.dev{
    font-size: medium;
    padding-bottom: 30px;
}

.aboutProject{
   margin-top: 20px;
   background-color: #374254;
   height: 87vh;
}
.left{
    background-color: #f2f2fe;
}

.right{
    background-color: #adbbc6;

}
p{
    color: #374254;
    padding: 10px;
}
.para{
    color: white;
    padding: 10px;
}
body{
    background-color: #374254;
}
@media screen and (max-width:600px) {
    .about{
        display: flex;
        flex-direction: column;
    }
   
 
}
    </style>
</head>
<body>

<div class="about">
        <div class="texts left">
            <div class="picture">
                <img class="heads" src="images/sugam2.png">

            </div>
            <p>Sugam Rai(Frontend Developer)</p>
            <p class="dev">
            As the frontend developer for our blog project, my main responsibility was to create the parts of the website
             that users interact with directly. Using languages like HTML, CSS, and JavaScript, I designed the layout, 
             colors, and styles to make the website look appealing and easy to use. I focused on making sure that 
             everything on the website is organized and easy to find, so users can navigate around without any confusion.
              I also made sure that the website works well on different devices like phones and computers. Overall, my role was 
              to create a user-friendly and visually pleasing experience for anyone who visits our blog.
            </p>

        </div>
        <div class="texts right">
            <div class="picture">

                <img class="heads" src="images/aayam.jpg">

            </div>
            <p>Aayam Awal(Backend Developer)</p>
            <p class="dev">
                As the backend developer for our blog project, my main job was to work on the behind-the-scenes 
                part of the website that users don't see. I used programming languages like PHP and databases like MySQL to 
                perform things like storing and retrieving data, managing user accounts etc. 
                I focused on making the website efficient, so it can handle lots of users and data without any problems. 
                I also worked closely with the frontend developer to make sure that the website looks good. 
                Overall, my role was to make sure that the technical aspects of the website work well, so users can enjoy a 
                good experience.</p>
        </div>
</div>
<div class="aboutProject">
    <p class="para">About Us</p>
    <p class="para">
    Welcome to our blog project! Here, we've created a space where you can explore a variety of topics, from food and art 
    to music and more. Our goal is to provide a platform for sharing ideas, sparking conversations, and inspiring 
    creativity. Whether you're looking for delicious recipes, interesting art pieces, or new music recommendations, 
    you'll find it all here on our blog. We believe in the power of storytelling and the importance of connecting with 
    others through shared interests. That's why we've gathered a team of passionate individuals who are eager to share 
    their knowledge and experiences with you. So come on in, take a look around, and join us on this exciting journey of 
    discovery and exploration!
    <br>
    Our blog project is all about bringing people together to celebrate the things we love. We've carefully curated content 
    that reflects our diverse interests and passions, with something for everyone to enjoy. From insightful articles and 
    helpful tips to captivating visuals and interactive features, there's always something new to discover on our website. 
    Whether you're a seasoned enthusiast or just curious to learn more, we invite you to join our community and become a part 
    of the conversation. Together, we can create a vibrant and welcoming space where creativity thrives and connections are made. 
    So dive in, explore, and let's make some memories together on our blog!
    </p>
</div>



<?php
include './partials/footer.php';
?>