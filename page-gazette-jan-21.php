<?php
/*
Template Name: Gazette Jan 21
*/
global $included;
if (!$included) get_header();

//if (have_posts()) : while (have_posts()) :
//  the_post();
//the_title();
?>


<style>
    html body {
        margin: 0;
        padding: 0;
        font-family: 'Baskervville', serif;
        color: #010200;
        background-image: url('bg1.jpg');
        background-attachment: fixed;
    }

    h3 {
        font-size: 42px;
    }

    .break {
        height: 50px;
    }

    .mainTitle {
        font-family: 'Alfa Slab One', cursive;
        font-weight: normal !important;
        font-size: 49px !important;
        margin-bottom: 0px;
        text-transform: uppercase;
        font-weight: normal;
        opacity: 0.95;
        font-size: 200px;
        text-transform: uppercase;
        text-align: center;
    }

    .grunge {
        background: url('txtgrunge.jpg');
        background-repeat: repeat-x;
        background-position: 0 0;
        color: transparent;
        -webkit-font-smoothing: antialiased;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: 0;
    }

    hr {
        border: 0;
        border-bottom: 2px dashed #ccc;
        background: transparent;
    }

    .grid-layout {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        grid-gap: 0px;
        grid-auto-rows: minmax(180px, auto);
        grid-auto-flow: dense;
        padding: 0px;
    }

    .grid-item {
        padding: 10px;
        border-radius: 0px;
    }

    .grid-item h1 {
        font-family: 'Alfa Slab One', cursive;
        font-size: 1.7rem;
        font-weight: lighter !important;
        text-transform: uppercase;
        margin-top: 0px;
    }

    p {
        text-align: justify;
        text-justify: inter-word;
        font-family: 'Baskervville', serif;
        font-size: unset;
    }

    .dropCap:first-letter {
        float: left;
        color: #160600;
        font-family: 'Rye', cursive;
        text-shadow: 1px 1px 15px rgba(44, 18, 18, 0.2);
        font-size: 75px;
        line-height: 60px;
        padding-top: 4px;
        padding-right: 8px;
        padding-left: 3px;
    }

    .span-2 {
        grid-column-end: span 2;
        grid-row-end: span 2;
    }

    .span-3 {
        grid-column-end: span 3;
        grid-row-end: span 1;
    }

    .news {
        background-image: url('bg.jpg');
        background-size: cover;
        padding: 25px;
        max-width: 940px;
        margin: 0 auto;
        height: 1625;
        box-shadow: 0px 20px 30px 0px #00000090;
    }

    .headerInfo {
        max-width: 400px;
        margin: 0 auto;
        margin-bottom: 20px;
        border-style: solid;
        border: 2px solid black;
        border-left: 0px;
        border-right: 0px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.781);
        color: antiquewhite;
    }

    .newsHeader {}

    .newsHeader h1 {
        margin-top: 0px;
        font-size: 80px;
        text-align: center;
        text-transform: uppercase;
        font-weight: lighter !important;
        margin-bottom: 0px;
        font-family: 'Eczar', serif;
        background-image: url("plane.png");
        background-size: 160px;
        background-repeat: no-repeat;
        background-position: right;
    }

    .newsHeader h2 {
        text-align: center;
        font-weight: normal;
        font-family: 'Abril Fatface', cursive;
        margin-top: 0px;
        margin-bottom: 30px;
    }

    .newsBody {}

    .newsBodyContainer {
        border: 2px solid #000000;
        border-radius: 5px;
        padding: 20px;
    }

    .newsBodyContainer img {
        filter: saturate(20%) sepia(0.7);
        width: 100%;
        transition: 0.6s ease-in-out;
        transition-delay: 0.2s;

    }

    .newsBodyContainer img:hover {
        filter: unset;
        transition: 0.15s ease-in-out;

    }

    .quote {
        text-align: left !important;
        font-size: 22px !important;
    }

    /* Create two unequal columns that floats next to each other */

    .column {
        float: left;
        padding: 10px;
    }

    /* Clear floats after the columns */

    .row:after {
        content: "";
        display: table;
        clear: both;
    }


    .wrap {
        margin: auto;
        overflow: hidden;
        border-spacing: 10px;
        position: relative;
        display: flex;
    }

    .col1,
    .col2 {
        padding: 10px;
        text-align: justify;
        width: calc(50% + 320px);
    }


    .col1:before,
    .col2:before {
        float: right;
        width: 1px;
        height: 90px;
        content: " ";
    }

    .col2:before {
        float: left;
    }

    .circleIMG {
        width: unset !important;
        float: right;
        clear: right;
        margin: 20px 0 20px 20px;
        border-radius: 50%;
        border: 10px solid #fff;
        shape-outside: circle(50%);
    }

    .col2 img {
        float: left;
        margin: 20px 20px 20px 0;
        clear: left;
    }

    .col1 .inner {
        margin-right: 220px;
    }

    .col2 .inner {
        margin-left: 220px;
    }

    .col2 {
        margin-left: -440px;
    }
</style>

<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Eczar:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">

<br><br>

<div class="news">
    <h1 style="transform: rotate(-90deg); position: relative; left: -51.5%; top: 535px; font-size: 12px; opacity: 0.5;">
        The Huntsman Gazette - Monthly Exclusive Gazette for the discerning individual
    </h1>
    <div class="newsHeader">
        <h1><span style="font-family: 'Euphoria Script', cursive; text-transform: capitalize; line-height: 0.1;">The
            </span><br>Huntsman Gazette</h1>
        <div class="headerInfo" style="margin-top: -20px;">
            Published: 06 January 2021 - 21st Edition - Exclusive
        </div>
    </div>
    <div class="newsBodyContainer">
        <div class="newsBody">
            <p class="dropCap">
                <img src="exc.png" style="float:left; width: 320px;margin-right: 20px; opacity:0.9">
                Welcome back to the Huntsman Gazette, bringing you all of the latest news and developments from 11
                Savile Row
                and W57th Street.Whilst many of you have been unable to make your regular visits tous this year, we’re
                sharing with you all of the new ways it’s easierthan ever to connect with us, and enjoy uninterrupted
                service.
                <br>You’ll also discover what our team got upto over lockdown, fromsewing scrubs to support the NHS and
                working to maintain businessas usual for your bespoke orders! Plus, all of our winners from
                ourcompetitions
            </p>
            <hr>
            <h1 class="mainTitle grunge">Huntsman Tailors Carry On</h1>
            <div class="grid-layout">
                <div class="grid-item span-3">
                    <p>
                        <img src="home.png">
                    </p>
                </div>
                <div class="grid-item span-2">
                    <h1 class="grunge">Huntsman Face Masks</h1>
                    <p class="dropCap">
                        <img src="mask.png" style="float:left; width: 140px;margin-right: 20px;">

                        With face coverings becoming the new-normal, thedemand for a more
                        permanent and stylish alternativeto the blue disposable options became obvious.
                        <br><br>
                        Made from the
                        finest
                        swiss cotton and cashmerillo,Huntsman launched our first range of face-masks, forthe sartorially
                        discerning social-distancer! <br><br>Available in both box-pleat and wrap designs, thesemasks
                        have been
                        designed using the best qualityfabric, for a mask that provides the softest and most
                        comfortable wear. Huntsman face masks are machine washable, with comfortable elasticated straps.
                    </p> <img src="nhs.png" style="float:left; width: 100%;margin-right: 20px;">

                </div>

                <div class="grid-item span-2">
                    <h1 class="grunge">Huntsman Sews Scrubs</h1>
                    <p>
                        <img src="scrubs.png" style="float:left; width: 240px;margin-right: 20px;">
                        Whilst regular business was halted, our ​team borrowed their skills to sew medical scrubs for
                        NHS
                        healthcare workers.​ Joining forces with The Scrub Club and fellow tailoring house Cadand the
                        Dandy, we were grateful to play our partto show our appreciation and lend our bespoke services
                        to
                        a good cause. The team worked to produce 50 sets of scrubs in the time it would usually take to
                        create a single bespoke garment,using the combined skill of the individuals to produce workwear
                        that could withstand the demands.
                    </p>
                    <hr>
                    <p class="">
                        “We came up with new ways to make the scrubs even better, perhaps something nobody’s thought
                        about before. We weren’t just making these quickly, we were making them really durable as well.”
                        <br>
                        <b>
                            ~ Francesca Lee Kerwin, Huntsman Trouser Maker
                        </b>
                    </p>
                </div>
                <div class="grid-item">
                    <p class="dropCap">
                        Whilst we had to close our doors at 11 Savile Row and W57th Street to help beat
                        COVID-19, from
                        the confines of their homes our Tailors diligently kept working, ensuring that our client’s
                        orders
                        were delivered on time. Being both resourceful and ingenious, lounges, bedrooms, and even
                        terraces
                        (weather permitting!) were transformed into makeshift workshops and Cutting Theatres, to ensure
                        that everybody could work safely and comfortably, without compromising on quality!
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="break">
</div>
<div class="news">
    <div class="newsBodyContainer">
        <div class="newsBody">
            <div>
                <h1 class="mainTitle grunge">Letters From Confinement</h1>
                <p class="dropCap">
                    Whilst many of the Huntsman team kept busy in Lockdown, for many the frustrations of
                    isolation and confinement understandably put a strain on everybody. Inspired by Nick
                    Farriella’s satirical fake letter from F. Scott Fitzgerald whilst quarantined in the South of
                    France, Huntsman’s owner Pierre Lagrange, came up with a novel idea to help alleviate the
                    onset of isolation boredom and break the rhythm of confinement with a unique competition.
                    Huntsman’s ‘Letters From Confinement’ invited you to share your words with us, whether
                    you were an already commended penman or a budding wordsmith in search of a new
                    creative outlet, we accepted hundreds of submissions from around the world.</p>
                <img src="kids.png">
                <p style="text-align: center; font-style: italic;">Senior Client Manager David takes a
                    quiet moment to pen his letter from
                    confinement</p>
            </div>
            <hr>

            <div class="row">
                <div class="column" style="width: 28%;">
                    <p>
                        With entries from the hysterical to the sober, thought-provoking, and downright wacky, Pierre
                        assembled a panel of literary titans to judge submissions, before we turned the vote to you!
                        You can now enjoy the work of all of our finalists but it was two entries that stood out in
                        particular.

                    </p>
                </div>
                <div class="column" style="width: 67%; text-align: center;">
                    <p>The winner of Letters From Confinement is Mr. Shoaib Sumar, whose satirical take on
                        Huntsman during the Spanish Flu of 1919 entertained us with it’s historical accuracy. His
                        very worthy runner up, Mr Justin Li, came in a close second place, with his Ode To The
                        Lavatory, which we found to be very sophisticated toilet humour indeed.
                        Visit the Journal where you can read these letters, and the letters from all of our finalists at
                        your leisure.</p>
                    <img src="winningletter.png" style="width: 250px;">

                </div>
            </div>
            <div class="row">
                <div class="column" style="width: 27%;">
                    <img src="edturco.png" style="width: 235px;">
                </div>
                <div class="column" style="width: 68%;">
                    <p class="dropCap">
                        Huntsman’s own Ed Turco revealed himself to be a top
                        penman, drafting his own letter to inspire other entrants ,
                        however, this was not Ed’s first foray into creative writing,
                        having won first place in the Good Writers Club annual
                        contest of 1966!
                    </p>
                    <p>
                        “I was actually writing a letter to JD Salinger. Hey, I was No.
                        1 among 50,000 entrants anyway!”
                        <br>
                        Huntsman’s Ed Turco in 1966
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="break">
</div>
<div class="news">
    <div class="newsBodyContainer">
        <div class="newsBody">
            <div class="row">
                <div class="column" style="width: 68%;">
                    <h1 class="mainTitle grunge" style="font-size: 46px!important; text-align: left;">
                        The Huntsman Tweed Competition
                    </h1>
                    <hr>
                    <p class="dropCap">
                        To the delight of many, the much loved Huntsman Tweed
                        Competition was back, but this year it looked a little different. From
                        lockdown we invited you to create your own tweed designs, and
                        submit them to us using the hashtag <b>#HuntsmanTweed2020</b>,
                        turning our social media into a vibrant blanket of tweed
                        submissions!
                        <br><br>
                        From the confines of isolation, many found solace in
                        taking time to create their own tweed, or in some cases several
                        tweeds. Our distinguished panel of judges, votes from the public,
                        and with the approval of Huntsman Creative Director Campbell
                        Carey, our finalists were decided, and one clear standout winner.
                    </p>
                </div>
                <div class="column" style="width: 27%;">
                    <video style="transform:rotateZ(-90deg); width: 470px;position: relative; top: 105px; left: -105;" autoplay loop muted>
                        <source src="tweedcomp.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="column" style="width: 27%;">
                    <img src="tweedwinner.png" style="width: 235px;">

                </div>
                <div class="column" style="width: 68%;">
                    <h1 class="mainTitle grunge" style="font-size: 38px!important; text-align: left;">
                        The Winner
                    </h1>

                    <p class="dropCap">
                        Mrs. Miller, who whilst in Lockdown welcomed
                        the arrival of her firstborn daughter stole some
                        time while she was napping to get creative.
                        Based in Mississippi, U.S.A Amy had admired
                        Huntsman tweeds, from afar for quite a while.
                        Like all good tweed designs, Amy took inspiration
                        from that which she knew and loved in nature, to
                        create a tweed evocative of country pursuits from
                        her natural surroundings.
                        <br>
                        <b>
                            Amy Miller’s winning tweed design, featuring hues of pine green, cardinal red and duck egg
                            blue.
                        </b>
                    </p>
                </div>

            </div>
            <p>As our winner, Amy has already started enjoying her Tweed Experience , and will receive a
                pair of bespoke slippers, in her twinning tweed design.</p>
        </div>
        <hr>
        <h2>
            Up Next
        </h2>
        <h1 class="mainTitle grunge" style="text-align: left; font-size: 64px!important;">
            Huntsman Shooting & Sport
        </h1>
        <video style=" width: 100%;" autoplay loop muted>
            <source src="shootingvid.mp4" type="video/mp4">
        </video>
        <img src="readmore.png" style="    width: 475px;
                    position: relative;
                    left: -20px;
                    top: 15px;">
    </div>
</div>
<div class="break">
</div>
<div class="news">
    <div class="newsBodyContainer">
        <div class="newsBody">
            <h1 class="mainTitle" style="font-size: 63px!important; text-align: center; background-image: url('highlight.png'); background-size: cover;color: rgb(255, 246, 235); margin-top: 0px;">
                Ron Arad x Huntsman x Morgan
            </h1>
            <h1 style="text-align: center; margin-bottom: 0;">Morgan Undercover: The Art Of Bespoke in 11 Savile Row
            </h1>
            <div class="wrap">
                <div class="col1">
                    <img class="circleIMG" src="cutter.png" width="400" height="400" alt="Centred Image">
                    <div class="inner">
                        <p class="">Unable to resist a challenge, Huntsman’s Co Head Cutter, Dario Carnera, turned his
                            bespoke skills to Huntsman’s largest challenge to date! The cutting and stitching of a
                            bespoke car suit, designed by internationally renowned artist and designer Ron Arad,
                            which took centre stage on display in the window of 11 Savile Row.<br> <br>
                            Inspired by the protection blankets covering cars in the street, Ron began sketching
                            what he imagined to be the cars under cover, these sketches then woven into car
                            covers. Arad collaborated with renowned car manufacturer Morgan about creating an art
                            piece to cover one of their models. <br>
                            <br>Thinking of the cover as a bespoke garment in this
                            respect, Arad approached Huntsman, as the most innovative tailor on Savile Row, to
                            stitch the cover.
                        </p>
                    </div>
                </div>
                <div class="col2">
                    <img class="circleIMG" src="cutter.png" width="400" height="400" alt="Centred Image">
                    <div class="inner">
                        <p>Masterfully cut and hand-stitched by Dario, it was by far his largest and most unusual
                            undertaking with Huntsman. Taking over 72 hours of skilled handwork, the size and
                            weight of the fabric required a special kind of thread- traditional cotton stitching just
                            wouldn’t support. Using leather thread, Dario applied the same style of baste stitching
                            you’d expect to find on a bespoke garment, but on a much larger scale!<br><br>
                            “Of all the projects I’ve worked on, this has been by far the most challenging, but also
                            most rewarding! It was fascinating to see how translating Rons initial design into canvas
                            and then into a pattern to be cut and stitched as you would a garment really brought it to
                            life. Just as putting pattern to cloth requires a certain rock of eye, so too did creating
                            this
                            car cover, albeit with a completely different framework! ”
                            Dario Carnera, Co-Head Cutter</p>
                    </div>
                </div>
            </div>
            <img src="carDivider.png">
            <br>
            <br>
            <img src="cardisplay.png">
            <br> <br>
            <div class="row">
                <div class="column" style="width: 52%; padding-left: 0;">
                    <img src="car2.jpg" style="width: 100%;">

                </div>
                <div class="column" style="width: 38%;">
                    <h1 class="" style="font-size: 38px!important; text-align: left; margin-top: 0px;">
                        FREE PARKING
                    </h1>

                    <p>
                        Dario stands with the
                        finished cover.
                        <br>
                        The installation in 11
                        Savile Row filled the entire front of the
                        shop.

                    </p>
                    <p>
                        For all of you that were unable to come visit 11 Savile Row in person, the installation can
                        now viewed directly opposite Huntsman at number 34 Savile Row. For all of you in
                        Mayfair, take a stroll down the street to see this unique collaboration, which is on display
                        until January 2021.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="break">
</div>
<div class="news">
    <div class="newsBodyContainer">
        <div class="newsBody">
            <div class="row">
                <div class="column" style="width: 68%;">
                    <h1 class="mainTitle grunge" style="font-size: 46px!important; text-align: left;">
                        TODO Rest of content
                    </h1>
                    <hr>
                    <p class="dropCap">
                        To the delight of many, the much loved Huntsman Tweed
                        Competition was back, but this year it looked a little different. From
                        lockdown we invited you to create your own tweed designs, and
                        submit them to us using the hashtag <b>#HuntsmanTweed2020</b>,
                        turning our social media into a vibrant blanket of tweed
                        submissions!
                        <br><br>
                        From the confines of isolation, many found solace in
                        taking time to create their own tweed, or in some cases several
                        tweeds. Our distinguished panel of judges, votes from the public,
                        and with the approval of Huntsman Creative Director Campbell
                        Carey, our finalists were decided, and one clear standout winner.
                    </p>
                </div>
                <div class="column" style="width: 27%;">


                </div>
            </div>
        </div>
    </div>
</div>
<?php
//endwhile; endif;
if (!$included) get_footer();

?>