<?php 
include 'partials/header.php'
?>
    <style>
        * {
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            margin: 0;
        }

        body {
            background: #b7b7b7 none repeat scroll 0 0;
            font-family: 'Open Sans', sans-serif;
        }

        .layout {
            margin: 0 auto;
            max-width: 1170px;
            width: 100%;
            padding: 0 15px;
        }

        /********Grid Widht *******/

        .form-group {
            float: left;
            padding-left: 15px;
            padding-right: 15px;
            width: 50%;
        }

        .grid-8 {
            width: 66.6667%;
        }

        .grid-12 {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            position: relative;
            overflow: hidden;
            
        }


        /***Section Css******/

        section {
            background: #adbbc6;
            color: #000;
            padding: 30px 0;
        }

        .text-center {
            text-align: center;
        }

        .section-title {
            color: #0e1424;
            font-size: 35px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .contact p {
            color: #929292;
            letter-spacing: 1.5px;
            padding-top: 50px;
        }

        .form {
            margin: 0 auto;
        }

        .form form {
            margin-top: 50px;
        }

        input {
            width: 100%;
        }

        .form-control {
            width: 100%;
        }

        .form-control {
            background-color: #374254;
            border: 1px solid #374254;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
            color: #555;
            display: block;
            font-size: 14px;
            line-height: 1.42857;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
            text-transform: capitalize;
        }

        .costom-btn {
            background: #0e1424;
            border: 1px solid #0e1424;
            color: #ffffff;
            font: bold 16px/18px "Open Sans", sans-serif;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            width: 100%;
            padding: 6px 12px;
            cursor: pointer;
        }

        .form-group {
            margin-top: 23px;
        }

        .icon-text {
            color: #ffffff;
            font: 16px/22px "Open Sans", sans-serif;
            text-align: center;
            text-transform: uppercase;
            margin: 25px 0;
        }

        .icon-holder {
            margin: 0 auto;
            width: 265px;
        }

        .icon-holder ul li a {
            color: #ffffff;
            height: 38px;
            width: 38px;
        }

        .icon-holder ul li {
            display: inline;
            padding: 12px;
        }

        @media (max-width:980px) {
            .layout {
                width: 80%px;
            }

            .grid-6 {
                width: 50%;
            }
        }

        @media (max-width:640px) {
            .layout {
                width: 80%;
            }

            .form-group,
            .grid-8 {
                width: 100%;
            }


        }
    </style>
</head>

<body>
    

    <section class="contact">
        <div class="layout">
            <div class="text-center">
                <h1 class="section-title">Contact Us</h1>
            </div>
            <div class="grid-8 form">
                <form action="php/email.php" method="post" id="contact_form" name="contactForm">
                    <div class="form-inline clearfix">
                        <div class="form-group grid-6 ">
                            <input type="text" placeholder="name" id="exampleInputName" name="name"
                                class="form-control">
                        </div>
                        <div class="form-group grid-6">
                            <input type="email" placeholder="email address" id="exampleInputEmail" name="email"
                                class="form-control">
                        </div>
                        <div class="form-group grid-6">
                            <input type="text" placeholder="subject" id="exampleInputSubject" name="subject"
                                class="form-control">
                        </div>
                        <div class="form-group grid-6">
                            <input type="text" placeholder="Number" id="exampleInputCompany" name="company"
                                class="form-control">
                        </div>
                        <div class="form-group grid-12">
                            <textarea placeholder="message" id="exampleInputMessage" rows="3" name="message"
                                class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div style="display:none;" class="success" id="mail_success">Your message has been sent
                            successfully.
                        </div><!-- success message -->
                        <div style="display:none;" class="error" id="mail_fail"> Sorry, error occured this time sending
                            your message.
                        </div><!-- error message -->
                    </div>
                    <div id="submit" class="form-group grid-12">
                        <input type="submit" value="send" class="btn  btn-lg costom-btn" id="send_message">
                    </div>
                </form>
            
    </section>

<?php
include './partials/footer.php';
?>