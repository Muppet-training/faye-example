<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Xenus</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css" type="text/css">
  <script src="scripts.js"></script>
</head>

<body>
  <header class="header">
    <ul class="navbar" role="navigation">
      <li><img class="logo" src="./images/50.png" /></li>
      <li class="business_name">
        <h2>Xenus</h2>
      </li>
      <li class="main">
        <div class="tab_header">
          <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
        </div>
      </li>
    </ul>
  </header>
  <div class="one toggle" id="one" onClick="getId(this.id)">
    <div class="icon">
      <svg class="svg_icon">
        <use xlink:href="images/icons.svg#megaphone" />
      </svg>
    </div>
    <span>Media</span>
  </div>
  <div class="two toggle" id="two" onClick="getId(this.id)">
    <div class="icon">
      <svg class="svg_icon">
          <use xlink:href="images/icons.svg#monitor" />
      </svg>
    </div>
    <span>Web Dev</span>
  </div>
  <div class="three toggle" id="three" onClick="getId(this.id)">
    <div class="icon">
      <svg class="svg_icon">
            <use xlink:href="images/icons.svg#wheel" />
        </svg>
    </div>
    <span>Design</span></div>
  <div class="four toggle" id="four" onClick="getId(this.id)">
    <div class="icon">
      <svg class="svg_icon">
            <use xlink:href="images/icons.svg#handshake" />
        </svg>
    </div>
    <span>Partners</span>
  </div>
  <div class="five toggle" id="five" onClick="getId(this.id)">
    <div class="icon">
      <svg class="svg_icon">
            <use xlink:href="images/icons.svg#notebook" />
        </svg>
    </div>
    <span>Articles</span>
  </div>
  <div class="six toggle" id="six" onClick="getId(this.id)">
    <div class="icon">
      <svg class="svg_icon">
            <use xlink:href="images/icons.svg#foot-print" />
        </svg>
    </div>
    <span>About</span>
  </div>

  <div class="p1 toogle-content" id="p1">
    <div class="tab_header">
      <p class="top_left_link back" id="back1">Go Back</p>
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    <div class="toggle-header media-header">
      <div class="icon">
        <svg class="header_icon">
              <use xlink:href="images/icons.svg#megaphone" />
            </svg>
      </div>
    </div>

    <h2>Media</h2>
    <p class="sub_title">services</p>
    <p class="sub_description">Marketing, Branding & Advertising are all different tactics we use to communicate a message to our customers. The strategy we use depends on the specific results you want to achieve within a given time period.</p>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                  <use xlink:href="images/icons.svg#headphones" />
              </svg>
      </div>
      <h3 class="service_heading">Research</h3>
      <p class="service_description"> Figure out who the customer market is and get insights into how we should best communicate a message</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                    <use xlink:href="images/icons.svg#panorama" />
                </svg>
      </div>
      <h3 class="service_heading">Creative</h3>
      <p class="service_description">Explain that we don’t offer this service however we are happy to help point the customer in the right direction</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                      <use xlink:href="images/icons.svg#knight" />
                  </svg>
      </div>
      <h3 class="service_heading">Strategy</h3>
      <p class="service_description">Work from research to develop a marketing strategy over a given time period</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                        <use xlink:href="images/icons.svg#root" />
                    </svg>
      </div>
      <h3 class="service_heading">Engagement</h3>
      <p class="service_description">Manage the engagement & implementation of the marketing strategy using the creative provided</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                          <use xlink:href="images/icons.svg#goal" />
                      </svg>
      </div>
      <h3 class="service_heading">Paid Media</h3>
      <p class="service_description">Using paid media to drive sales on the platforms of your choice</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                            <use xlink:href="images/icons.svg#report" />
                        </svg>
      </div>
      <h3 class="service_heading">Analyze</h3>
      <p class="service_description">Analyze your prior and current methods to further improve the execution of your marketing strategy</p>
    </section>

  </div>
  <div class="p2 toogle-content" id="p2">
    <div class="tab_header">
      <p class="top_left_link back" id="back2">back</p>
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    <div class="toggle-header dev-header">
      <div class="icon">
        <svg class="header_icon">
                  <use xlink:href="images/icons.svg#monitor" />
                </svg>
      </div>
    </div>

    <h2>Web Dev</h2>
    <p class="sub_title">services</p>
    <p class="sub_description">A website is only built if you want scale your ability to convert sales! We understand underlying truth and build your website around the key performance indicators you desire.</p>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#coding" />
        </svg>
      </div>
      <h3 class="service_heading">Fullstack</h3>
      <p class="service_description">This is a fancy way of saying that a person can build a complete project from scratch. The major benefit of this is 100% customization of your web app or website without the need to bounce between developers.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#devices" />
        </svg>
      </div>
      <h3 class="service_heading">Frontend</h3>
      <p class="service_description">Everything you see, touch & interact with is the frontend of your web app or website. In short this controls how your content with be displayed to optimize user experience and sales conversions.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#server" />
        </svg>
      </div>
      <h3 class="service_heading">Backend</h3>
      <p class="service_description">This can make or break your project from loading times to relational databases. In short the backend is what connects your content the frontend of your web app or website.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#unlink" />
        </svg>
      </div>
      <h3 class="service_heading">SEO</h3>
      <p class="service_description">
        SEO: Search Engine Optimization - Is a technique used to rank your website higher organically on search engines.<br/><br/> SEM: Search Engine Marketing - Is promoting your website when specific search queries are typed in.
      </p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#shopping-bag" />
        </svg>
      </div>
      <h3 class="service_heading">Shopify</h3>
      <p class="service_description">If you want to sell items online with a professional looking website this is a great place to start!</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#drag" />
        </svg>
      </div>
      <h3 class="service_heading">Wordpress</h3>
      <p class="service_description">25% of the web is made with wordpress!! If you want to display content or drive traffic to your business, without needing a shopping cart, then this is exactly where you should to start.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
              <use xlink:href="images/icons.svg#search" />
          </svg>
      </div>
      <h3 class="service_heading">Consulting</h3>
      <p class="service_description">If you are need help understanding the direction you should go in or have a website that needs updating. Contact us as a 15 minute convo could save you months in planning what to do next.</p>
    </section>
  </div>
  <div class="p3 toogle-content" id="p3">
    <div class="tab_header">
      <p class="top_left_link back" id="back3">back</p>
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    <div class="toggle-header design-header">
      <div class="icon">
        <svg class="header_icon">
          <use xlink:href="images/icons.svg#wheel" />
        </svg>
      </div>
    </div>

    <h2>Design</h2>
    <p class="sub_title">services</p>
    <p class="sub_description">Frictionless experience!<br/> How can we use design to communicate your key brand messages without friction during the experience? Ensuring the customers understands the value we provide</p>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                  <use xlink:href="images/icons.svg#devices" />
              </svg>
      </div>
      <h3 class="service_heading">Website</h3>
      <p class="service_description">Using adobe suite to design your website prior to coding the frontend dramatically saves time! It also leads to a smoother development experience as the developer can easily plan ahead using dry code techniques. ( less doubling up of code )</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                    <use xlink:href="images/icons.svg#files-and-folders" />
                </svg>
      </div>
      <h3 class="service_heading">Print</h3>
      <p class="service_description">This is obvious however when designing content for offline use the designer must be very aware of the eye flow of the content as this influences heavily the conversion rates of that creative.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                      <use xlink:href="images/icons.svg#map" />
                  </svg>
      </div>
      <h3 class="service_heading">Interior</h3>
      <p class="service_description">Designing a room can increase the potential sales price of a property by 10%. Clearly people are influenced by their environment. This is why it’s important design your work environment as it is key to staff performance & focus.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                        <use xlink:href="images/icons.svg#ipad" />
                    </svg>
      </div>
      <h3 class="service_heading">Touch Point</h3>
      <p class="service_description">This is like user experience design but in the real world. It takes into account your 6 senses.. Vision, Sound, Smell, Taste, Touch & Vibe of a place to create the best experience for your customers. Touch point design is how businesses maximise
        the remarkability of their customers experience.</p>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                          <use xlink:href="images/icons.svg#search" />
                      </svg>
      </div>
      <h3 class="service_heading">Consulting</h3>
      <p class="service_description">If you are need help understanding the design direction you should go in or need to refresh your creative suite. Contact us as a 15 minute convo could save you months in planning what to do next.</p>
    </section>
  </div>
  <div class="p4 toogle-content" id="p4">
    <div class="tab_header">
      <p class="top_left_link back" id="back4">back</p>
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    <div class="toggle-header partner-header">
      <div class="icon">
        <svg class="header_icon">
              <use xlink:href="images/icons.svg#handshake" />
            </svg>
      </div>
    </div>

    <h2>Partners</h2>
    <p class="sub_title">teamwork!</p>
    <p class="sub_description">We partner with remarkable individuals & businesses to provide you with a seamless experience ensuring that if we cannot provide the results you desire, we can at least recommend you to someone who can.</p>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#chef-hat" />
        </svg>
      </div>
      <h3 class="service_heading">Food & Retail</h3>
      <ul class="service_description">
        <li class="partners_list">
          <p>Recipe Revenue</p>
        </li>
      </ul>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#photo-camera" />
        </svg>
      </div>
      <h3 class="service_heading">Creative</h3>
      <ul class="service_description">
        <li class="partners_list">
          <p>Photography?</p>
        </li>
        <li class="partners_list">
          <p>Video Editors?</p>
        </li>
      </ul>
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#placeholder" />
        </svg>
      </div>
      <h3 class="service_heading">Experience</h3>
      <ul class="service_description">
        <li class="partners_list">
          <p>Interior Design - Bree Curphey?</p>
        </li>
        <li class="partners_list">
          <p>Touch Point Design?</p>
        </li>
      </ul>
    </section>
  </div>
  <div class="p5 toogle-content" id="p5">
    <div class="tab_header">
      <p class="top_left_link back" id="back5">back</p>
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    <div class="toggle-header articles-header">
      <div class="icon">
        <svg class="header_icon">
              <use xlink:href="images/icons.svg#notebook" />
            </svg>
      </div>
    </div>

    <h2>Articles</h2>
    <p class="sub_title">platforms</p>
    <p class="sub_description">Tom Curphey the founder of Xenus writes articles of his perspective about the industry and the lessons learnt while building businesses.</p>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
            <use xlink:href="images/icons.svg#domain-registration" />
        </svg>
      </div>
      <div class="service_heading"><a href="#">Tomcurphey.com</a></div>
      <!-- <p class="service_description"></p> -->
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
              <use xlink:href="images/icons.svg#linkedin" />
          </svg>
      </div>
      <div class="service_heading"><a href="#">Linkedin</a></div>
      <!-- <p class="service_description"></p> -->
    </section>
    <section class="toggle">
      <div class="service_icon">
        <svg class="svg_icon">
                <use xlink:href="images/icons.svg#medium" />
            </svg>
      </div>
      <div class="service_heading"><a href="#">Medium</a></div>
      <!-- <p class="service_description"></p> -->
    </section>
  </div>
  <div class="p6 toogle-content" id="p6">
    <div class="tab_header">
      <p class="top_left_link back" id="back6">back</p>
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    <div class="toggle-header about-header">
      <div class="icon">
        <svg class="header_icon">
                <use xlink:href="images/icons.svg#foot-print" />
              </svg>
      </div>
    </div>

    <h2>About Us</h2>
    <p class="sub_title">thank you for reading this</p>
    <p class="sub_description about">
      The only thing that separates our services from the competition is HEART. After spending so much time in the industry you start to see a pattern. That is every business is trying to grow their profit by spending as little as possible and demanding the
      desired result is achieved in the shortest period of time. This often leads to short term behaviour which often put holes in the fabric of how that business was woven together.
    </p>
    <p class="sub_description about">
      This is where we provide the most amount of value for businesses.
    </p>
    <p class="sub_description about">
      All we care about is that your sales funnel is running as optimally as possible. We take the time to step back and observe missed opportunities with you. We try to understand your current situation and have empathy towards the best approach moving forward.
    </p>
    <p class="sub_description about">
      Yes this approach costs us more as we heavily invest our time into understanding your business. However during these times we need to focus on the end result you desire, ensuring we fix the holes in your sales funnel to maximise your sales conversions.
    </p>
    <p class="sub_description about">
      Tom Curphey is the owner of Xenus and if you would like to know more about his story please click here
    </p>
    </section>
  </div>

  <div class="pitch active" id="pitch">
    <?php 
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if(strpos($fullUrl, "contact=mailsent")){
        echo "<div class='tab_header'>
                <p class='contact_feedback'><b>Email Sent:</b> We will contact your in the next 24 hours</p>
              </div>";
      }elseif(strpos($fullUrl, "contact=invalidurl")){
        echo "<div class='tab_header'>
                <p class='contact_feedback contact_error'><b>Email Sent:</b> The URL you typed in is not a valid URL address</p>
              </div>";
      }elseif(strpos($fullUrl, "contact=invalidemail")){
        echo "<div class='tab_header'>
                <p class='contact_feedback contact_error'><b>Email Sent:</b> The Email you typed in is not a valid Email address</p>
              </div>";
      }elseif(strpos($fullUrl, "contact=empty")){
        echo "<div class='tab_header'>
                <p class='contact_feedback contact_error'><b>Email Sent:</b> Unfortunately you missed a mandatory field.. Can you please fill in the form again? We are currentlt working on the site to ensure you don't loose your form input.</p>
              </div>";
      }
    ?>
    
    <div class="tab_header">
      <p class="top_right_link"><a class="contact" href="#work-with-us">Become A Client</a></p>
    </div>
    
    <section class="the_pitch">
      <h1>We are practitioners in business development optimising your sales conversion strategies.</h1>
      <h3>
        We partner with clients to achieve their business results through media planning & distribution, engagement driven design, fluid web development and everything in between.
      </h3>
    </section>
    <section class="our_clients">
      <h4>Some of our clients</h4>
      <div class="client_logos">
        <ul>
          <li>
            <div class="client_logo">
              <img class="why_icon" src="./images/bcb_black.png" />
            </div>
            <h5>Bay City Burrito</h5>
          </li>
          <li>
            <div class="client_logo">
              <img class="why_icon" src="./images/firstaid.png" />
            </div>
            <h5>First Aid Management</h5>
          </li>
          <li>
            <div class="client_logo">
              <img class="why_icon" src="./images/kara_tri.png" />
            </div>
            <h5>Bass Coast Fitness</h5>
          </li>
          <li>
            <div class="client_logo">
              <img class="why_icon" src="./images/wheelheat.png" />
            </div>
            <h5>Wheel Heat</h5>
          </li>
        </ul>
      </div>
    </section>
    <secton class="why_xenus">
      <h4>..why Xenus?</h4>
      <h5>We are practitioners in our craft creating a seamless experience delivered with empath & heart.</h5>
      <div class="why_points">
        <ul>
          <li>
            <img class="why_icon" src="./images/heart.png" />
            <h5 class="business_name">Empathy & Heart</h5>
          </li>
          <li>
            <img class="why_icon" src="./images/funnel.png" />
            <h5 class="business_name">Frictionless Experience</h5>
          </li>
          <li>
            <img class="why_icon" src="./images/settings.png" />
            <h5 class="business_name">We Are Practitioners</h5>
          </li>
        </ul>
      </div>
    </secton>
  </div>

  <div class="work_form" id="work-with-us">
    <h2>Work With Us</h2>
    <form action="../includes/contactForm.php" method="POST">
      <div class="form_interest">
        <Label>What service are you interested in?</Label>
        <div class="radio_options">
          <input type="radio" name="interest" value="market" class="radio" ><span>Marketing & Advertising</span><br>
          <input type="radio" name="interest" value="dev" class="radio"><span>Web Development</span><br>
          <input type="radio" name="interest" value="design" class="radio"><span>Design</span><br>
          <input type="radio" name="interest" value="full" class="radio"><span>Full service</span><br>
          <input type="radio" name="interest" value="none" class="radio"><span>None I just want to chat</span>
        </div>
      </div>
      <div class="form_name">
        <Label>Your Name<span>*</span></Label>
        <input id="name" name="name" type="text" onBlur="checkInput(this)" required/> 
      </div>
      <div class="form_company">
        <Label>Company Name<span>*</span></Label>
        <input id="company" name="company" type="text" onBlur="checkInput(this)" required/>
      </div>
      <div class="form_email">
        <Label>Contact email<span>*</span></Label>
        <input id="email" name="email" type="text" onBlur="checkInput(this)" required/> 
      </div>
      <div class="form_phone">
        <Label>Contact Phone Number<span>*</span></Label>
        <input id="phone" name="phone" type="number" onBlur="checkInput(this)" required/>
      </div>
      <div class="form_desire">
        <Label>What business problem are you currently facing that keeps you up at night?<span>*</span></Label>
        <textarea id="desire" rows="8" name="desire" onBlur="checkInput(this)"required></textarea>
      </div>
      <div class="form_objective">
        <Label>What short & long term objectives, are you using to measure your success?<span>*</span></Label>
        <textarea id="objective" rows="8" name="objective" onBlur="checkInput(this)" required></textarea>
      </div>
      <div class="form_url">
        <Label>What URL provides us with the best context to understand the problem you are trying to solve?</Label>
        <input id="url" name="url" type="text" onBlur="checkInput(this)"/>
      </div>
      <div class="form_optin">
        <Label>Consistent value builds trust.</Label>
        <div class="checkbox_options">
          <div class="checkbox">
            <input type="checkbox" name="optin" class="radio" >
          </div>
          <div class="optin">
            <span>Yes, I would like to recieve information that you believe would be of value to me. I expect that this information includes Articles, Videos & Services to help us grow our business</span>
          </div>
        </div>
      </div>
      <div class="form_button">
        <button type="submit" name="submit" >Send Enquiry</button>
      </div>
    </form>
  </div>
  <footer class="footer">
    <h4>Thank you for taking the time to look over our services</h4>
    <div class="footer-menu">
      <div class="f1">
        <div class="contact_box">
          <h3>Media</h3>
          <ul>
            <li>Research</li>    
            <li>Creative</li>    
            <li>Strategy</li>    
            <li>Engagement</li>    
            <li>Paid Media</li>    
            <li>Analyze</li>    
          </ul>
        </div>
      </div>
      <div class="f2">
        <div class="contact_box">
        <h3>Web Development</h3>
          <ul>
            <li>Fullstack</li>    
            <li>Frontend</li>    
            <li>Backend</li>    
            <li>SEO</li>    
            <li>Shopify</li>    
            <li>Wordpress</li>    
            <li>Consulting</li>    
          </ul>
        </div>
      </div>
      <div class="f3">
        <div class="contact_box">
          <h3>Design</h3>
          <ul>
            <li>Website</li>    
            <li>Print</li>    
            <li>Interior</li>    
            <li>Touch Point</li>    
            <li>Consulting</li>      
          </ul>
        </div>
      </div>
      <div class="f4">
        <div class="contact_box">
          <h3>Contact</h3>
          <ul>
            <li>Phone: 0428 438 348</li>    
            <li>tom @ xenus.com.au</li>        
          </ul>
        </div>
      </div>
    </div>
    <p>Built By Tom From Xenus 2018</p>
  </footer>

</body>
</html>