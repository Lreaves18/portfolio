<?php
  include('layout/header.php');
  ?>
      <div id="heroArea">
          <div id="heroText">
            <h1>Hey! My name is Lauren, and I'm a Full Stack Web Developer.</h1>
            <h3 style="color: yellow;"><?php date_default_timezone_set('America/Chicago'); echo date('h:i'); ?></h3> 
          </div>
      </div>
      <div id="aboutMeWrapper">
        <div id="aboutImgWrapper">
          <img src="img/image0.jpeg" alt="portrait" id="aboutMeImg" />
          <div id="aboutMeImgBorder"></div>
        </div>
        <div id="aboutMeContent">
          <h1>About Me:</h1>
          <p>
            My name is Lauren Reaves and I'm a <span id="age"></span> year old
            Full Stack Web Developer based in central Alabama with one year experience with HTML5, CSS3, JavaScript, JQuery, PHP, MySQL, WordPress and APIs. I'm a hardworker
            who is very passionate about technology and web development. I love
            leaning new things and exploring new ideas. I'm a very quick learner
            with exceptional problem solving skills and an expert level eye for
            detail, and I would love to help you create the website of your dreams!
          </p>
        </div>
      </div>
    <div id="quoteBanner">
        <h3>
          “Digital design is like painting, except the paint never dries." -&nbsp;Neville Brody
        </h3>
      </div>
     <h1 id="cardTitle">My Work</h1>
      <div id="cardWrapper">
        <div class="card">
          <h2>Latest Project</h2>
          <a href="http://localhost/theofficegroup/" target="_blank"><img src="img/laptop2.png" alt="" /></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nam, voluptatibus dolor neque est dolorem suscipit cupiditate corrupti praesentium officiis voluptates consequatur voluptas sunt inventore consequuntur autem aspernatur modi iusto.
          </p>
        </div>
        <div class="card">
          <h2>All Projects</h2>
          <a href="http://localhost/" target="_blank"><img src="img/laptop3.png" alt="" /></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nam, voluptatibus dolor neque est dolorem suscipit cupiditate corrupti praesentium officiis voluptates consequatur voluptas sunt inventore consequuntur autem aspernatur modi iusto.
          </p>
        </div>
      </div>
      <div id="testimonialHeading">
      <h1>Testimonials</h1>
      <p>(Powered by an API)</p>
    </div>
      <div id="testimonialWrapper">
      </div>
      </div>
      <div id="callToAction">
        <h1 id="formHeader">Have an idea? Contact me today!</h1>
        <form action="./scripts/contactsubmission.php" method="POST">      
          <input type="text" name="fullName" class="feedback-input" placeholder="Name" />   
          <input type="email" name="email" class="feedback-input" placeholder="Email" />
          <textarea name="message" class="feedback-input" placeholder="Comment"></textarea>
          <input type="submit" id="trigger" value="SUBMIT"/>
        </form>
    </div>
    <?php
    include('layout/footer.php');
    ?>