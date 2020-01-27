<!doctype html>
<head>
    <script src="scripts/scripts.js"></script>
    <script src="scripts/font-awesome.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="header">
        <div class="logo"><img src="images/51649.webp"></div>
        <div class="headeralign">
            <div class="top">
                <div class="contrast">
                    Contrast 
                    <div class="button--state-contrast1">
                        A
                    </div>
                    <div class="button--state-contrast2">
                        A
                    </div>
                </div>
                <div class="fontsize">
                    Font Size
                    <div class="button--state-sizedown">
                        A-
                    </div>
                    <div class="button--state-default">
                        A
                    </div>
                    <div class="button--state-sizeup">
                        A+
                    </div>
                </div>
                <div class="download">
                    <a href="#">Download a Brochure</a>
                </div>
                <div class="blog">
                    <a href="#">Blog</a>
                </div>
                <div class="phone">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                        &nbsp; Call us on 0330 042 5909 &nbsp;
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </div>
            </div>
            <div class="bottom">
                <div class="links">
                    <a href="#">New Vehicles</a>
                    <a href="#">Nearly New/Used Vehicles</a>
                    <a href="#">Motability</a>
                    <a href="#">Aftercare</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="homehead">
        <div class="dropdown">
            <a href="#">Versa Connect &nbsp; <i class="fa fa-caret-down"></i></a>
        </div>
        <div class="hhbuttons">
            <a href="#">Overview</a>
            <a href="#">Offers</a>
            <a href="#">Models</a>
            <a href="#">Optional Extras</a>
        </div>
    </div>
    <div class="hero">
        <div class="image">
            <img src="images/51650.jpg">
        </div>
        <div class="content">
            <div class="head">
                Versa Connect
            </div>
            <div class="body">
                "The Ford Tourneo Connect is a relaxing and comfortable place to be. Great to drive, great to sit in, it boasts premium finishes, 
                high quality materials and fuel efficiency without comprimising everyday practicality."
            </div>
            <div class="button button--state-hero">
                Make an Enquiry
            </div>
        </div>
    </div>
    <div class="specs">
        <div class="specbuttons">
            <div id="b1" class="b1" onmousedown="specdim()">
                Dimensions
            </div>
            <div id="b2" class="b2" onmousedown="specveh()">
                Vehicle Layouts
            </div>
            <div id="b3" class="b3" onmousedown="speccol()">
                Colour
            </div>
            <div id="b4" class="b4" onmousedown="specint()">
                Interior Trim
            </div>
        </div>
        <div class="specpages">
            <div id="dimensions" class="specpages specpages--state-dimensions">
               <div class="dimtable">
                   <table>
                       <tr>
                           <th></th>
                           <th>Short</th>
                           <th>Long</th>
                       </tr>
                       <tr>
                           <td>Entry height</td>
                           <td>1,373mm</td>
                           <td>1,373mm</td>
                       </tr>
                       <tr>
                           <td>Ramp length</td>
                           <td>1,010mm</td>
                           <td>1,010mm</td>
                       </tr>
                       <tr>
                           <td>Ramp width</td>
                           <td>755mm</td>
                           <td>755mm</td>
                       </tr>
                       <tr>
                           <td>Channel length</td>
                           <td>1,580mm</td>
                           <td>1,580mm</td>
                       </tr>
                       <tr>
                           <td>External height</td>
                           <td>1,852mm</td>
                           <td>1,845mm</td>
                       </tr>
                       <tr>
                           <td>External length</td>
                           <td>4,418mm</td>
                           <td>4,818mm</td>
                       </tr>
                   </table>
               </div>
               <div class="image">
                   <img src="images/49792.jpg">
                </div>
            </div>
            <div id="layouts" class="specpages specpages--state-layouts">
                <div class="t1">
                    Short (based on Ford Tourneo Connect)
                </div>
                <div class="image1">
                    <img src="images/50422.jpg">
                </div>
                <div class="t2">
                    Long (based on Ford Tourneo Grand Connect)
                </div>
                <div class="image2">
                    <img src="images/50423.jpg">
                </div>
                <div class="note">
                    * Wheelchair user can sit a little further forward (nnot as forward as Row 2 seats)
                </div>
            </div>
            <div id="colours" class="specpages specpages--state-colour">
                <div class="images">
                    <div class="carcolour">
                        <img id="carcolour" src="images/blazerblue.webp">
                    </div>
                </div>
                <div class="selector">
                    <div class="non-metallic">
                        <div class="selbuttons">
                            <div class="blazblue" onmousedown="blazblue()"></div>
                            <div class="red" onmousedown="red()"></div>
                        </div>
                        <div class="nmname">Non metallic</div>
                    </div>
                    <div class="metallic">
                        <div class="selbuttons">
                            <div class="silver" onmousedown="silver()"></div>
                            <div class="metalicious" onmousedown="metalicious()"></div>
                            <div class="solar" onmousedown="solar()"></div>
                            <div class="deepblue" onmousedown="deepblue()"></div>
                            <div class="black" onmousedown="black()"></div>
                            <div class="guard" onmousedown="guard()"></div>
                            <div class="magnetic" onmousedown="magnetic()"></div>
                        </div>
                        <div class="mname">Metallic</div>
                    </div>
                </div>
            </div>
            <div id="trims" class="specpages specpages--state-trim">
                <div class="bigint">
                    <div class="bigintborder"></div>
                    <img src="images/slider1.jpg">
                    <div class="bigintbborder"></div>
                </div>
                <div class="materials">
                    <div class="tit">
                        <img src="images/51652.jpg">
                        <div class="content">
                            <div class="text">
                                <div class="head">
                                    Titanium
                                </div>
                                <div class="body">
                                    <p>
                                        Insert: Chicane in Medium Stone
                                    </p>
                                    <p>
                                        Bolster: Malt in Medium Stone
                                    </p>
                                </div>
                            </div>
                            <div id="tit" class="check" onmousedown="tit()"><i class="fa fa-check"></i></div>
                        </div>
                    </div>
                    <div class="zet">
                        <img src="images/51653.jpg">
                        <div class="content">
                            <div class="text">
                                <div class="head">
                                    Zetec
                                </div>
                                <div class="body">
                                    <p>
                                        Insert: Route in Charcoal Black
                                    </p>
                                    <p>
                                        Bolster: Max in Charcoal Black
                                    </p>
                                </div>
                            </div>
                            <div id="zet" class="check" onmousedown="zet()"><i class="fa fa-check"></i></div>
                        </div>
                    </div>
                    <div class="tit2">                       
                        <img src="images/51654.jpg">
                        <div class="content">
                            <div class="text">
                                <div class="head">
                                    Titanium
                                </div>
                                <div class="body">
                                    <p>
                                        Insert: Chicane in Charcoal Black
                                    </p>
                                    <p>
                                        Bolster: Malt in Charcoal Black
                                    </p>
                                </div>
                            </div>
                            <div id="tit2" class="check" onmousedown="tit2()"><i class="fa fa-check"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button button--state-specs">
            View our Versa Connect offers
        </div>
    </div>
    <div class="slider">
        <div id="hero-slider">
            <?php
                $a = 0;
                while ($a < 1) { $a++;
            ?>
                <div class="slide-image">
                    <img src="images/slider<?php echo $a; ?>.jpg">
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="info">
        <div class="content">
            <p>
                The Versa Connect takes these attributes and focuses on extending them seamlessly into the wheelchair accessible aspects of our vehicle. It is our aim to produce a conversion
                that is both practical and stylish, with an attention to detail that provides the same high quality look and feel throughout the vehicle.
            </p>
            <p>
                The Versa Connect is available in two wheelbases. The Short Versa Connect can accomodate the wheelchair user and up to 3 seated passengers (including the driver) or up to 5
                seated passengers without the wheelchair. The Long Versa Connect can accomodate the wheelchair user and up to 5 seated passengers (including the driver) or up to 7
                seated passengers without the wheelchair.
            </p>
            <p>
                Twin sliding doors allow for ease of passenger access with a lightweight manual ramp to the rear for wheelchair access. As an optional extra, the ramp can have the added
                ability, using a simple lever, to fold into the vehicle so that when the wheelchair user is not travelling, a huge and easily accessible boot space is created making the 
                Versa Connect even more practical.
            </p>
        </div>
        <div class="button button--state-info">
            View our Versa Connect offers
        </div>
    </div>
    <div class="infotwo">
        <div class="image">
            <img src="images/51651.jpg">
        </div>
        <div class="content">
            <div class="head">
                Keeping you going
            </div>
            <div class="body">
                At Bristol Street Versa our priority is to offer so much more than just the sale of a Wheelchair Accessible Vehicle (WAV). We recognise that the lives of the majority of our
                customers aren't always plain sailing - and thats why we are committed to step in to make sure we are #KeepingYouGoing.
            </div>
            <div class="button">
                More Information
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="divider"></div>
        <div class="info">
            If you're looking for a new or used Wheelchair Accessible Vehicle (WAV), then Bristol Street Versa is the best place to start.
        </div>
        <div class="links">
            <div class="links link--state-left">
                <a href="#">Home</a>
                <a href="#">New Vehicles</a>
                <a href="#">Motability</a>
            </div>
            <div class="links link--state-centre">
                <a href="#">Nearly New & Used</a>
                <a href="#">Aftercare</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="links link--state-right">
                <a href="#">Terms</a>
                <a href="#">Blog</a>
            </div>
        </div>
        <div class="copyright">
            Registered office for all group companies: Vertu Motors plc, Show Accessibility Options |Vertu House, Fifth Avenue Business Park, Team Valley, Show Accessibility Options |Gateshead,
            Tyne and Wear, Show Accessibility Options |NE11 0XA
        </div>
    </div>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>