    <?php
    $heroImage = 'pix.jpg'; // to change my defult image, change the filename here for myhero section

    // Typed texts and grid data moved to PHP variables so content is editable server-side for section 2 calls here
    $leftText = "At Osafem Engineering, we turn ambitious ideas into resilient reality. Our multidisciplinary team plans, manages, and executes projects with an emphasis on safety, timely delivery, and lasting quality. From initial design and permitting through supervision and commissioning, we deliver clear communication and dependable results for homes, institutions, and commercial builds. We specialise in structural design, site supervision, civil works, and value engineering to help you achieve cost-effective solutions without compromising on strength or aesthetics. Our processes integrate modern materials, sustainability best-practices, and rigorous quality assurance — ensuring every project we deliver stands the test of time and environment. Whether you are starting a small renovation or a complex infrastructure program, we provide bespoke project plans, realistic timelines, and transparent reporting at every milestone. Our teams are certified and trained in modern safety systems, environmental compliance, and project management methodologies. We maintain strong partnerships with local suppliers and subcontractors to secure competitive pricing and timely deliveries. Over the years we have delivered projects ranging from residential developments to institutional facilities and light industrial works — each delivered with a focus on durability, cost control, and client satisfaction. Beyond construction we help clients with lifecycle planning, maintenance scheduling, and performance monitoring so buildings remain safe and efficient long after handover. Our continuous improvement program captures lessons from each project to refine processes, reduce waste, and improve scheduling accuracy.";

    $rightText = "Get in touch with Osafem Engineering to schedule a complementary consultation and receive a tailored project estimate. During the initial consultation we review site constraints, budget targets, and desired timelines — then propose a phased, risk-managed approach to construction that aligns with your priorities. We pride ourselves on transparent pricing, clear milestones, and practical scheduling. Ask for our portfolio and case studies to see recent projects similar to yours and read client testimonials. For quick replies, contact our office phone or WhatsApp number, or email us to request a detailed proposal and preliminary feasibility notes. We also provide options for phased delivery and flexible financing arrangements for qualifying projects. After handover we offer maintenance packages, warranty follow-ups, and optional performance audits to protect your investment. Join our mailing list for project updates, construction insights, and invitations to site-open days where you can see work in progress and meet our teams.";

    // Grid items: image, link, label, price section 3 been call here and also to change link for my grid items
    $gridItems = [
      ['img' => 'hero1.webp', 'href' => 'about.html', 'label' => 'site boot', 'price' => '$250'],
      ['img' => 'hero2.jpg', 'href' => 'services.html', 'label' => 'wheelbarrow', 'price' => '$350'],
      ['img' => 'hero3.webp', 'href' => 'blog.html', 'label' => ' cement-mixer', 'price' => '$199'],
      ['img' => 'hero4.webp', 'href' => 'index.html', 'label' => 'halmet', 'price' => '$499'],
    ];

      // Right-column items for Section4 (click to show detail on the left)
      $rightItems = [
        ['img' => 'pix.jpg', 'title' => 'Project Alpha', 'body' => 'Short write-up about Project Alpha.'],
        ['img' => 'pix3.jpg', 'title' => 'Project Beta', 'body' => 'Short write-up about Project Beta.'],
        ['img' => 'service.jpg', 'title' => 'Project Gamma', 'body' => 'Short write-up about Project Gamma.'],
        ['img' => 'project.jpg', 'title' => 'Project Delta', 'body' => 'Short write-up about Project Delta.'],
        ['img' => 'halmet.jpg', 'title' => 'Project Epsilon', 'body' => 'Short write-up about Project Epsilon.']
      ];
        // Additional editable write-ups
        $leftMore = "Our teams are experienced across residential, institutional, and light industrial projects. We provide detailed project plans, phased delivery options, and post-handover maintenance support. Contact us for site visits and bespoke quotations tailored to your budget and schedule.";

        $rightMore = "Contact & Services\nPhone: +234-810-669-909\nEmail: info@osafem.example\nWe offer consultation, design, supervision, and maintenance packages. Request our portfolio for recent case studies and client testimonials.";

       
    ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <title>Hero animation demo</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="hero.css">
</head>
<body class="preload">
      <!--logo header-->

    <section class="logo">
        <div><img src="logo.jpg" alt="osafem" width="30wv" height="30hv"></div>
        <div class="icon">
            <p class="p1">Have any Questions</p> <a href=""><i class="fa-solid fa-phone-volume"></i>
            <p>+234-810-669-909</p></a></div>
        <div class="icon1">
            <div>
                <p class="p1">our office address</p> <a href="update.html"><i class="fa-solid fa-location-dot"></i><p>plot 4, Ilorin</p></a>

            </div>
        </div>
    </section>







    <!--nav-bar icon ,search button and list-->


    <section class="nav" style="position: fixed; top: 20px; width: 100%; z-index: 1001;">
        <nav>

            <ul class="dropdown-menu">
                <li class="hasdropdown"><a >Home</a>
                    <ul class="dropdown-submenu">
                        <li><a href="index.html">dashboard</a></li>
                        <li><a href="story.html">our story</a></li>
                        <li><a href="testimonial.html">mission and vision</a></li>
                    </ul>
                </li>
                <li class="hasdropdown"><a >About</a>
                    <ul class="dropdown-submenu">
                        <li><a href="about.html">testimonial</a></li>
                        <li><a href="team.html">team profile</a></li>
                        <li><a href="feedback.php">feedback</a></li>
                    </ul>
                </li>
                <li class="hasdropdown"><a >services</a>
                    <ul class="dropdown-submenu">
                        <li><a href="services.html">features and benefit</a></li>
                        <li><a href="plan.html">plan</a></li>
                        <li><a href="case.html">case study</a></li>
                    </ul>
                </li>
                <li class="hasdropdown"><a >blog</a>
                    <ul class="dropdown-submenu">
                        <li><a href="hero.php">blog</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="https://punchng.com/inclusive-innovation-key-to-solving-infrastructure-challenges-engineers">blog</a></li>
                    </ul>
                </li>
                <li class="hasdropdown"><a >support</a>
                    <ul class="dropdown-submenu">
                         <li><a href="feedback.php">feedback</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="support.php"> support center</a></li>
                    </ul>
                </li>
            </ul>

            <div class="nav-icon">
                <a href="https://www.facebook.com/oluwakunmioluwafemi"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://wa.me/+2349066175355"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/osamfem_engineering"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/osam_fem"><i class="fa-brands fa-tiktok"></i></a>
            </div>

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search..." required>
                <div class="search-icon">
                    <svg xmlns="http://www.facebook.com/oluwakunmioluwafemi/" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                </div>
            </div>


            <!--comment for my media que...-->
            <div class="link-container">
                <div class="call"> <a href=""><i class="fa-solid fa-phone-volume"></i></a></div>



                <div class="hamburger" id="hamburger">&#9776;</div>
            </div>
            <ul class="nav-links" id="nav-links">
               <ul class="nav-links" id="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">blog 2</a></li>
                <li><a href="https://punchng.com/inclusive-innovation-key-to-solving-infrastructure-challenges-engineers">blog 3</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="plan.html">plan</a></li>
                <li><a href="hero.php">blog 1</a></li>
                <li><a href="story.html">our story</a></li>
                <li><a href="testimonial.html">mission and vision</a></li>
                <li><a href="team.html">team profile</a></li>
                <li><a href="case.html">case study</a></li>
                <li><a href="support.php">support</a></li>
            <li><a href="contact.php">contact</a></li>
             <li><a href="feedback.php">feedback</a></li>
            </ul>
        </nav>

    </section>
  <main class="hero" data-hero="<?= htmlspecialchars($heroImage) ?>">
    <div class="hero-bg" aria-hidden="true"></div>

    <!-- -->
    <img class="hero-image" alt="Hero" src="" aria-hidden="true">

 <div class="hero-heading">
        <h1 class="title initial-slant">Welcome to Our Site</h1>
        <button class="cta"><span>Get Started </span></button>
      </div>

    <div class="hero-content">
      <div class="hero-body">
        <p class="subtitle">We bring projects  to life — safe, on-time, and beautiful. <br>
        High-quality construction solutions tailored to your needs. Reliable, safe, and timely delivery.</p>
      </div>
    </div>
  </main>
  <script>

    // Small helper to run after DOM ready
    document.addEventListener('DOMContentLoaded', function () {
      const body = document.body;
      const hero = document.querySelector('.hero');
      const heroImageEl = document.querySelector('.hero-image');
      const title = document.querySelector('.title');
      const subtitle = document.querySelector('.subtitle');

    
      // counting image src and display after 1ms delay
      const src = hero.getAttribute('data-hero');
      const img = new Image();

      let imgLoaded = false;
      let showRequested = false;
      const delayMs = 2 * 1000; // 2 second delay for my image to apper

      function reveal() {
        // to make my loadded image apper
        heroImageEl.src = src;
        heroImageEl.classList.add('visible');
        
          // Make the image appear "full-screen" (full height) then settle to 80% after 1s
          // Add `settled` class to change the image height and add `image-settled` to body
          setTimeout(() => {
            heroImageEl.classList.add('settled');
            // add a class so CSS can reposition the content area into the bottom 20%
            body.classList.add('image-settled');
          }, 1000);

        // to make css take the background away when image apper
        body.classList.add('image-loaded');

        // Remove the initial slant and play the slant-to-zero animation so the H1 reaches 0deg in sync
        title.classList.remove('initial-slant');
        title.classList.add('slant-to-zero');

        // small timeout to make the bend animation feel distinct (optional)
        setTimeout(() => {
          title.classList.add('bend-in');
          subtitle.classList.add('bend-in');
        }, 120);
      }

      // Image load handler
      img.onload = function () {
        imgLoaded = true;
        if (showRequested) {
          reveal();
        }
      };

      img.onerror = function () {
        // If the image fails, still reveal after the delay so UI doesn't stay stuck.
        imgLoaded = false;
        if (showRequested) {
          // attempt to reveal (browser will show broken image if src wrong)
          reveal();
        }
      };

      // Begin loading immediately so it's ready when delay finishes
      img.src = src;

      // After the configured delay, reveal (if image already loaded) or wait for load
      setTimeout(() => {
        showRequested = true;
        if (imgLoaded) {
          reveal();
        } else {
          // ensure the image is requested (already set above) and reveal as soon as it finishes
          // also i set a fallback timeout to reveal anyway after a short grace period
          const fallback = setTimeout(() => {
            if (!imgLoaded) reveal();
            clearTimeout(fallback);
          }, 5000);
        }
      }, delayMs);
    });
  </script>


<!--new section , first-->
  <!-- Section 1: 3-image slider with Play/Pause controls -->
  <section class="section1">
    <div class="slider" aria-hidden="false">
      <img class="slide" src="pix.jpg" alt="slide 1">
      <img class="slide" src="pix3.jpg" alt="slide 2">
      <img class="slide" src="project.jpg" alt="slide 3">
      <img class="slide" src="service.jpg" alt="slide 4">
      <img class="slide" src="halmet.jpg" alt="slide 5">
      <div class="slider-controls">
        <button id="slider-play" aria-label="Play"><i class="fa-solid fa-circle-play"></i></button>
        <button id="slider-pause" aria-label="Pause"><i class="fa-solid fa-circle-pause"></i></button>
      </div>
    </div>
  </section>
<script>
    // FOR SECTION 1
    // Simple slider using CSS animation so play/pause is easy (animation-play-state)
    (function(){
      const slides = Array.from(document.querySelectorAll('.section1 .slide'));
      if(!slides.length) return;
      let index = 0;
      let running = false;

      // find controls inside the section to avoid clashes
      const sliderEl = document.querySelector('.section1 .slider');
      const playBtn = sliderEl.querySelector('#slider-play');
      const pauseBtn = sliderEl.querySelector('#slider-pause');

      function show(i){
        slides.forEach((s,si)=>{
          s.classList.remove('active','playing');
          s.style.animationPlayState = 'paused';
          // clear any inline animation to allow CSS animation on class add
          s.style.animation = '';
        });
        const s = slides[i];
        s.classList.add('active');
        // trigger reflow before adding animation
        void s.offsetWidth;
        // ensure no inline 'animation: none' blocks the CSS animation
        s.style.animation = '';
        s.classList.add('playing');
        // apply the current running state
        s.style.animationPlayState = running ? 'running' : 'paused';
      }

      function next(){
        index = (index + 1) % slides.length;
        show(index);
      }

      // when a slide animation finishes we advance
      slides.forEach(s => s.addEventListener('animationend', ()=>{
        // only advance if running
        if(running) next();
      }));

      playBtn.addEventListener('click', ()=>{
        running = true;
        // resume current slide
        slides[index].style.animationPlayState = 'running';
      });
      pauseBtn.addEventListener('click', ()=>{
        running = false;
        slides.forEach(s=>s.style.animationPlayState = 'paused');
      });

      // start with first slide visible but paused
      show(0);
      // optional: auto-start
      //running = true; show(0); slides[0].style.animationPlayState='running';
    })();
  </script>

  

    <!-- Section 2: Blog area with two-column typed write-up -->
    <section class="section2">
      <div class="blog-container">
        <div class="pair">
          <div class="col col-left">
            <div class="typewriter" id="tw-left" data-speed="28">
            </div>
          </div>
          <div class="col col-right">
            <div class="typewriter" id="tw-right" data-speed="30">
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      // Section2 typing: left column (long) types first, then right column (short) types after left finishes.
      (function(){
        const leftText = <?php echo json_encode($leftText, JSON_UNESCAPED_UNICODE); ?>;

        const rightText = <?php echo json_encode($rightText, JSON_UNESCAPED_UNICODE); ?>;

        function typeText(el, text, speed){
          return new Promise((resolve) => {
            el.innerHTML = '';
            const cursor = document.createElement('span');
            cursor.className = 'typing-cursor';
            el.appendChild(cursor);

            let i = 0;
            function step(){
              if(i < text.length){
                // insert before cursor
                cursor.insertAdjacentText('beforebegin', text.charAt(i));
                i++;
                setTimeout(step, speed);
              } else {
                // remove cursor after short delay
                setTimeout(()=>{ cursor.remove(); resolve(); }, 500);
              }
            }
            step();
          });
        }

        document.addEventListener('DOMContentLoaded', ()=>{
          const leftEl = document.getElementById('tw-left');
          const rightEl = document.getElementById('tw-right');
          const leftSpeed = parseInt(leftEl.getAttribute('data-speed') || '28', 10);
          const rightSpeed = parseInt(rightEl.getAttribute('data-speed') || '30', 10);

          // start typing left, then right when finished
          typeText(leftEl, leftText, leftSpeed).then(()=>{
            // small pause before the second column types
            setTimeout(()=> typeText(rightEl, rightText, rightSpeed), 400);
          });
        });
      })();
    </script>

    
<!-- Section 3: clickable grid cards generated from $gridItems -->

<?php /* Rendered server-side so links and images are editable via $gridItems */ ?>
<section class="section3">
  <div class="grid">
    <?php foreach($gridItems as $item): ?>
      <a class="grid-card" href="<?= htmlspecialchars($item['href']) ?>">
        <img class="card-media" src="<?= htmlspecialchars($item['img']) ?>" alt="<?= htmlspecialchars($item['label']) ?>">
        <div class="card-body">
          <div>
            <span class="card-label"><?= htmlspecialchars($item['label']) ?></span>
            <div class="card-price"><?= htmlspecialchars($item['price']) ?></div>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</section>

 <!-- Section 4: two-column interactive area -->
<section class="section4">
  <div class="section4-container">
    <div class="left-panel">
      <div class="detail">
        <h2 class="detail-title">Select an item on the right</h2>
        <img class="detail-image" src="pix.jpg" alt="detail image">
        <div class="detail-body">Click an item on the right to see its write-up here.</div>

        <div class="company-writeup">
          <?php echo nl2br(htmlspecialchars($leftText)); ?>
        </div>
        <div class="company-writeup-more">
          <?php echo nl2br(htmlspecialchars($leftMore)); ?>
        </div>
      </div>
    </div>

    <div class="gutter" aria-hidden="true"></div>

    <div class="right-panel">
      <div class="list">
        <?php foreach($rightItems as $it): ?>
          <div class="list-item" tabindex="0"
               data-title="<?= htmlspecialchars($it['title']) ?>"
               data-img="<?= htmlspecialchars($it['img']) ?>"
               data-body="<?= htmlspecialchars($it['body']) ?>">
            <img src="<?= htmlspecialchars($it['img']) ?>" alt="<?= htmlspecialchars($it['title']) ?>">
            <div class="item-text">
              <strong><?= htmlspecialchars($it['title']) ?></strong>
              <p class="item-summary"><?= htmlspecialchars($it['body']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="right-writeup">
        <?php echo nl2br(htmlspecialchars($rightMore)); ?>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const section = document.querySelector('.section4');
  if(!section) return;
  const leftPanel = section.querySelector('.left-panel');
  const rightPanel = section.querySelector('.right-panel');
  const list = rightPanel.querySelector('.list');
  const gutter = section.querySelector('.gutter');
  const items = list.querySelectorAll('.list-item');

  function showItem(item){
    const title = item.dataset.title || '';
    const img = item.dataset.img || '';
    const body = item.dataset.body || '';
    const titleEl = leftPanel.querySelector('.detail-title');
    const imgEl = leftPanel.querySelector('.detail-image');
    const bodyEl = leftPanel.querySelector('.detail-body');
    titleEl.textContent = title || 'Detail';
    if(img) imgEl.src = img;
    bodyEl.textContent = body || 'No description available.';

    // Also update the company write-up area on the left to reflect the selected item's write-up
    const companyEl = leftPanel.querySelector('.company-writeup');
    const companyMoreEl = leftPanel.querySelector('.company-writeup-more');
    function setSafeTextWithBreaks(el, txt){
      if(!el) return;
      el.innerHTML = '';
      const lines = (txt || '').split(/\r?\n/);
      lines.forEach((ln, i) => {
        el.appendChild(document.createTextNode(ln));
        if(i < lines.length - 1) el.appendChild(document.createElement('br'));
      });
    }
    setSafeTextWithBreaks(companyEl, body || 'No description available.');
    // keep the "more" block as supplementary info; leave it unchanged unless you want it swapped too
    // setSafeTextWithBreaks(companyMoreEl, '');
  }

  items.forEach(it=>{
    it.addEventListener('click', ()=> showItem(it));
    it.addEventListener('keydown', (e)=>{ if(e.key === 'Enter' || e.key === ' ') { e.preventDefault(); showItem(it); } });
  });

  // Scrolling behaviour: when pointer is over left or right, only that pane scrolls.
  // When pointer is over the gutter, scrolls move both panels together.
  let activeArea = '';
  leftPanel.addEventListener('pointerenter', ()=> activeArea = 'left');
  leftPanel.addEventListener('pointerleave', ()=> activeArea = '');
  rightPanel.addEventListener('pointerenter', ()=> activeArea = 'right');
  rightPanel.addEventListener('pointerleave', ()=> activeArea = '');
  gutter.addEventListener('pointerenter', ()=> activeArea = 'both');
  gutter.addEventListener('pointerleave', ()=> activeArea = '');

  // handle wheel on the whole section so we can control simultaneous scrolls
  section.addEventListener('wheel', function(e){
    if(activeArea === 'both'){
      e.preventDefault();
      leftPanel.scrollTop += e.deltaY;
      rightPanel.scrollTop += e.deltaY;
    } else if(activeArea === 'left'){
      // let default scroll leftPanel
      // prevent default and manually scroll to avoid outer page scrolling
      e.preventDefault();
      leftPanel.scrollTop += e.deltaY;
    } else if(activeArea === 'right'){
      e.preventDefault();
      rightPanel.scrollTop += e.deltaY;
    }
    // if activeArea is '' do nothing (allow page scroll)
  }, {passive:false});

});
</script>
<!-- last part -->

    <!-- section 14-->
    <section class="sectionsection">
        <div class="section141">
            <div class="section140-container">
                <h1>
                    About our company
                    <hr>
                </h1>
                <p>folikay hand-coding theem is the last theme you will ever have<br> to buy for your business more powerful and easy to use than <br>any other themes on the market with incredible <br> features and friendly support.</p>

                <div class="section114">
                    <div class="map">
                        <a href="update.html"><i class="fa-solid fa-location-dot"></i> Plot 4, Ilorin</a>
                    </div>
                    <div class="phone">
                        <a href="tel:=2348106699096"><i class="fa-solid fa-phone-volume"></i>phone call</a></div>

                    <div class="mail">
                        <a href="mailto:graceoluwakunmi@gmail.com"><i class="fa-solid fa-envelope"></i>Email me</a>
                    </div>
                </div>
            </div>
            <div class="section141-container">
                <h1>
                    Useful links
                    <hr>
                </h1>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Idustrial</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Our Reviews</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Environment</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Our Project</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> General Enquiries</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Get in Touch</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Support Center</p>
                </a>
            </div>
            <div class="section142-container">
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Equipment </p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Construction</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>About Us</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Contact Us</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Schedule a callback</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i> Reviews</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Privacy Policy</p>
                </a>
            </div>
            <div class="section143-container">
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Engineering </p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Factory Tools</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>News, Update</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Career Tips</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>General FAQ'S</p>
                </a>
                <a href="">
                    <p><i class="fa-solid fa-link"></i>Other Services</p>
                </a>
            </div>
        </div>
    </section>
    <!-- section 15-->
    <footer>
        &copy; copyright <span id="year"></span> .Osamfem Industrial Solution |
        <a href="#">Privacy Policy</a> |
        <a href="#">Terms of Service</a>

        <div class="scroll-to-top">
            <div class="arrow-icon"></div>

        </div>

        <div class="chat-container">
            <div class="chat-button" id="chatButton">
                <i class="fas fa-comment-dots" id="chatIcon"></i>
            </div>
            <div class="chat-form" id="chatForm">
                <div class="chat-header">
                    <h3>Live Support</h3>
                    <div class="typing-indicator">
                        <span>Agent is typing</span>
                        <div class="typing-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="chat-messages" id="chatMessages">
                    <div class="message incoming">
                        <div>Hello! How can we help you today?</div>
                        <div class="timestamp">Just now</div>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" placeholder="Type your message..." id="messageInput">
                    <button class="send-button" id="sendButton">
                    <i class="fas fa-paper-plane"></i>
                </button>
                </div>
            </div>
        </div>

    </footer>

    <section class="lastsection">
        <div class="last1 active" onclick="setActive(this)">
            <a href="#"> <i class="fas fa-home"></i>
                <p>Home</p>
            </a>
        </div>
        <div class="last1" onclick="setActive(this)">
            <a href="#"><i class="fas fa-box"></i><p>Services</p></a>
        </div>
        <div class="last1" onclick="setActive(this)">
            <a href="#"><i class="fas fa-question-circle"></i> <p>FAQ</p></a>
        </div>
        <div class="last1" onclick="setActive(this)">
            <a href="#"> <i class="fas fa-phone-alt"></i>
                <p>Call</p>
            </a>
        </div>
        <div class="last1" onclick="setActive(this)">
            <a href="#"> <i class="fas fa-envelope"></i>
                <p>Contact</p>
            </a>
        </div>

    </section>
</body>
<script >// pick the last part java script fron here
    //last part... active link script
    // copy here

    let isAgentOnline = true;
    const chatButton = document.getElementById('chatButton');
    const chatIcon = document.getElementById('chatIcon');
    const chatForm = document.getElementById('chatForm');
    const messageInput = document.getElementById('messageInput');
    const sendButton = document.getElementById('sendButton');
    const chatMessages = document.getElementById('chatMessages');
    const typingIndicator = document.querySelector('.typing-indicator');
    // Toggle chat form visibility
    chatButton.addEventListener('click', () => {
        chatForm.classList.toggle('active');

        if (chatForm.classList.contains('active')) {
            // Change to close icon when form is open
            chatIcon.classList.remove('fa-comment-dots');
            chatIcon.classList.add('fa-times');

            // Move button slightly when form is open
            chatButton.style.transform = 'translateX(-7px)';
        } else {
            // Change back to chat icon when form is closed
            chatIcon.classList.remove('fa-times');
            chatIcon.classList.add('fa-comment-dots');

            // Return button to original position
            chatButton.style.transform = '';
        }
    }); // Send message functionality
    function sendMessage() {
        const messageText = messageInput.value.trim();
        if (messageText) {
            // Create outgoing message
            const messageElement = document.createElement('div');
            messageElement.className = 'message outgoing';
            messageElement.innerHTML = `
            <div>${messageText}</div>
            <div class="timestamp">Just now</div>
        `;
            chatMessages.appendChild(messageElement);
            // Clear input
            messageInput.value = '';
            // Scroll to bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;
            // Show typing indicator
            typingIndicator.style.display = 'flex';
            // Simulate agent response after delay
            setTimeout(() => {
                typingIndicator.style.display = 'none';
                simulateAgentResponse(messageText); // Call the new function here
            }, 1500);
        }
    }

    // Send message when clicking button
    sendButton.addEventListener('click', sendMessage);

    // Send message when pressing Enter
    messageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
    // Scroll messages to bottom on initial load
    chatMessages.scrollTop = chatMessages.scrollHeight;

    function simulateAgentResponse(messageText) {
        let response = "I'm not sure I understand. Can you please clarify your question?";
        const lowerText = messageText.toLowerCase();

        // Simple keyword-based response logic
        if (lowerText.includes("hello") || lowerText.includes("hi") || lowerText.includes("hey")) {
            response = "Hello! How can I assist you today?";
        } else if (lowerText.includes("yes") || lowerText.includes("ok")) {
            response = "1.about  2. services 3.contact us 4. location 5. price. enter your choice with format (e.g about us...) or type 'no' to exit.";
        } else if (lowerText.includes("company") || lowerText.includes("about")) {
            response = "We are Osamfem Industrial Solutions, specializing in industrial engineering and equipment relocation.";
        } else if (lowerText.includes("price") || lowerText.includes("cost")) {
            response = "Our pricing depends on your project needs. Would you like a quote?";
        } else if (lowerText.includes("hours") || lowerText.includes("working hours")) {
            response = "Our working hours are Monday to Friday, 9 AM to 5 PM.";
        } else if (lowerText.includes("location") || lowerText.includes("address")) {
            response = "Our office is located at Plot 4, Ilorin.";
        } else if (lowerText.includes("services") || lowerText.includes("what do you offer")) {
            response = "We offer industrial engineering, equipment relocation, and more.";
        } else if (lowerText.includes("contact us") || lowerText.includes("get in touch")) {
            response = "You can reach us at +234-810-669-909 or email graceoluwakunmi@gmail.com.";
        } else if (lowerText.includes("no") || lowerText.includes("that's all") || lowerText.includes("nothing") || lowerText.includes("thanks")) {
            response = "Thank you for checking our page.";
        }

        const responseElement = document.createElement('div');
        responseElement.className = 'message incoming';
        responseElement.innerHTML = `
        <div>${response}</div>
        <div class="timestamp">Just now</div>
    `;
        chatMessages.appendChild(responseElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }






    //last section.......
    function setActive(element) {

        const items = document.querySelectorAll('.last1');
        items.forEach(item => {
            item.classList.remove('active');
        });

        element.classList.add('active');
    }

    //footer style....

    document.getElementById('year').innerHTML = new Date().getFullYear();
    //scroll effect
    document.addEventListener('DOMContentLoaded', function() {
        const scrollToTopBtn = document.querySelector('.scroll-to-top');


        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('active');
            } else {
                scrollToTopBtn.classList.remove('active');
            }
        });

        // Scroll to top when clicked
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });


    //Optional: You can add JavaScript to handle the select dropdown change ...section 1...
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    //for my search button

    document.querySelector('.search-input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const query = this.value.trim();
            if (query) {
                console.log('Searching for:', query);
                alert(`Searching for: ${query}`);
            }
        }
    })


    //stop here

</script>
</html>