<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ url('assets/style/common.css') }}">
  <title>Tribhuwan Park</title>
  <style>
    /* CSS for the company name and slogan */
    .navbar {
      display: flex;
      align-items: center;
    }

    .logo {
      width: 100px;
      height: auto;
      margin-right: 10px;
    }

    .company-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
    }

    .company-name {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      white-space: nowrap;
    }

    .company-slogan {
      font-size: 14px;
      color: #777;
    }

    .login-btn {
      margin-left: auto;
      padding: 8px 15px;
      border: none;
      background-color: #007bff;
      color: #fff;
      font-size: 14px;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    .login-btn:hover {
      background-color: #0056b3;
    }
    .intro__buy-btn {
      padding: 12px 24px; /* Adjust the padding to make the button bigger */
      font-size: 30px; /* Adjust the font size to make the text larger */
    }

    /* Rest of your existing CSS styles */
    /* ... */
  </style>
</head>

<body>
  <div class="body-wrapper">
    <header class="header">
      <div class="container">
        <nav class="navbar">
          <img src="{{ url('dist/img/logo.png') }}" class="logo" alt="logo">

          <!-- Add the company name and slogan here -->
          <div class="company-info">
            <span class="company-name">&nbsp &nbspशाहिद स्मारक प्रकृति प्रतिष्ठान <br></span>
            <span class="company-slogan">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspचन्द्रागिरी नगरपालिका-0४</span>
          </div>

          <ul class="nav-links">
            <li class="hide-menu">Menu</li>
            <li class="home"><a href="#">Home</a></li>
            <li class="visit"><a href="#">Visit</a></li>
            <li class="exhibitions"><a href="#">Exhibitions</a></li>
            <li class="programs"><a href="#">Programs & Events</a></li>
            <li class="store"><a href="#">Store</a></li>
            <li class="membership-li"><button class="membership">Membership</button></li>
          </ul>

          <!-- Login button -->
          <a href="/login" class="login-btn">Login</a>

          <div class="brgr-btn" id="burger">
            <svg>
              <defs>
                <filter id="gooeyness">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="2.2" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10"
                    result="gooeyness" />
                  <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
                </filter>
              </defs>
            </svg>
            <div class="plate plate5" onclick="this.classList.toggle('active')">
              <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                <path class="line line1" d="M 30,35 H 70 " />
                <path class="line line2" d="M 50,50 H 30 L 34,32" />
                <path class="line line3" d="M 50,50 H 70 L 66,68" />
                <path class="line line4" d="M 30,65 H 70 " />
              </svg>
              <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                <path class="line" d="M 34,32 L 66,68" />
                <path class="line" d="M 66,32 L 34,68" />
              </svg>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main class="main" id="main">
        <section class="intro">
            <div class="info-wrap">
              <h1 class="intro__h1">A beautiful adventure awaits</h1>
              <span class="intro__span">Tribhuvan Park is a picturesque public park located at the South-West corner of Kathmandu in Thankot. Situated about 3.3 km from the Ring Road of Kathmandu, this park boasts an exact area of 1.3 sq km, extending to a large area of Thankot.  Park offers you a beautiful view with the angelic green sod and picnic spot. It is the best place to enjoy the serene environment with greenery beauty. It lies in the shade of the Chandragiri Hills.It is the first most developed picnic and tourism spot for domestic tourists.</span>
              <div class="intro__btn-wrap">
                <a href="/ticketlist" class="intro__buy-btn">Buy Tickets</a>
                <button class="intro__info-btn">Learn More</button>
              </div>
            </div>
            <div class="image-wrap">
              <img class="intro__image" src="{{ url('dist/img/t2.jpeg') }}" alt="garden">
            </div>
          </section>
          <section class="discover">
            <div class="discover-wrap">
              <div class="pots-image">
                <img class="pots" src="{{ url('dist/img/t3.jpeg') }}" alt="pots">
              </div>
              <div class="chairs-image">
                <img src="{{ url('dist/img/t1.jpeg') }}" alt="chairs" class="chairs">
              </div>
              <div class="info-block">
                <h2 class="info-h2">Discover yourself with nature</h2>
                <p class="info-p">Tribhuvan Park provides a perfect opportunity to reconnect with nature and find inner peace. The park's landscape is adorned with a variety of trees, plants, and colorful flowers, offering a delightful experience for nature enthusiasts. The well-designed walking paths across the hilly terrain make it a joy for visitors to explore. Photography enthusiasts will also be delighted by the picturesque scenery found within the park. Moreover, Tribhuvan Park features designated picnic spots and playgrounds, making it an ideal destination for educational tours, school picnics, corporate outings, and family gatherings.</p>
                <button class="info-btn">Learn More</button>
              </div>
            </div>
          </section>
          <section class="news">
            <div class="news-wrap">
              <div class="news-title">
                <h2 class="title-h2">News & Updates</h2>
                <div class="title-all-post">
                  <div class="hr-line"></div>
                  <span class="view">View all posts</span>
                  <img src="{{ url('dist/img/t1.jpeg') }}" alt="arrow" class="arrow">
                </div>
              </div>
              <div class="big-card-wrap">
                <div class="plants">
                  <img src="{{ url('dist/img/t4.jpeg') }}" alt="plants" class="plants-img">
                  <span class="plants-span">Plants Around Us</span>
                  <p class="plants-p">Get mesmerized by the diversity of flora at Tribhuvan Park. The park houses numerous plant species, allowing visitors to appreciate the wonders of nature. The serene environment of the park, coupled with the beautiful plant life, offers a unique experience for everyone. Whether you are a nature lover or just seeking a peaceful retreat, this is the place to be. Tribhuvan Park is a haven for relaxation, and its vibrant aura never fails to leave visitors brimming with joy and happiness.</p>
                  <span class="plants-date">December 23, 2022</span>
                </div>
                <div class="small-card-wrap">
                  <div class="lush">
                    <img src="{{ url('dist/img/t5.jpeg') }}" alt="lush" class="lush-img">
                    <span class="lush-span">Lush Gardens</span>
                    <p class="lush-p">Indulge in the beauty of lush gardens at Tribhuvan Park. The well-maintained gardens and green spaces offer a sense of tranquility amidst the bustling city life. As you meander through the paths lined with foliage, you will feel a sense of harmony and peace. The park's surroundings are thoughtfully designed to enhance your experience with nature. Whether you wish to spend quality time with your loved ones or simply take a leisurely stroll, Tribhuvan Park ensures that every moment spent here is unforgettable.</p>
                    <span class="lush-date">December 16, 2022</span>
                  </div>
                  <div class="exotic">
                    <img src="{{ url('assets/img/exotic.png') }}" alt="exotic-plants" class="exotic-img">
                    <span class="exotic-span">Exotic Nature</span>
                    <p class="exotic-p">Embrace the exotic charm of nature at Tribhuvan Park. The park's diverse collection of exotic plants and unique floral species will captivate your senses. Each step taken within this sanctuary will leave you in awe of nature's wonders. As you explore the park's rich biodiversity, you will find yourself immersed in a world of botanical treasures. A visit to Tribhuvan Park is not only a delightful experience for nature enthusiasts but also an opportunity to learn and appreciate the beauty of Mother Nature's creations.</p>
                    <span class="exotic-date">November 11, 2022</span>
                  </div>
                  <div class="soil">
                    <img src="{{ url('assets/img/soil.png') }}" alt="soil" class="soil-img">
                    <span class="soil-span">It Starts with Soil</span>
                    <p class="soil-p">Discover the significance of soil at Tribhuvan Park. This ecological gem highlights the essential role of soil in supporting a thriving ecosystem. From the microorganisms beneath the surface to the rich soil composition, every aspect contributes to the park's vibrancy. As you delve into the importance of soil, you will gain a deeper understanding of its impact on the environment and our lives. Tribhuvan Park reminds us that every step we take is connected to the very foundation of life – the soil beneath our feet.</p>
                    <span class="soil-date">November 3, 2022</span>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </main>
    <footer class="footer" id="footer">
      <div class="contacts">
        <div class="contacts-logo">
            <img src="{{ url('dist/img/logo.png') }}" class="logo" alt="logo" style="width: 200px; height: 200px;">
            <p class="contacts-p">This park is the perfect escape from the hustle and bustle of the hectic lifestyle, stressed mind and the pollution of the city. We can get to this beautiful park by public bus that runs on the ring road.</p>
        </div>
        <ul class="contacts-nav">
          <li class="nav-item sitemap"><span>Sitemap</span></li>
          <li class="nav-item home"><a href="#">Home</a></li>
          <li class="nav-item visit"><a href="#">Visit</a></li>
          <li class="nav-item exhibitions"><a href="#">Exhibitions</a></li>
          <li class="nav-item programs"><a href="#">Programs & Events</a></li>
          <li class="nav-item store"><a href="#">Store</a></li>
          <li class="nav-item membership"><a href="#">Membership</a></li>
        </ul>
        <div class="socials">
          <span class="social-span">Connect</span>
          <div class="social-container">
            <img src="{{ url('assets/img/twitter.svg') }}" alt="twitter" class="twitter">
            <img src="{{ url('assets/img/facebook.svg') }}" alt="facebook" class="facebook">
            <img src="{{ url('assets/img/linkedin.svg') }}" alt="linkedin" class="linkedin">
            <img src="{{ url('assets/img/mail.svg') }}" alt="mail" class="mail">
          </div>
        </div>
      </div>
      <div class="rights">
        <div class="rights-wrap">
          <span class="rights-text">© 2023 Tribhuwan Park  All rights reserved.</span>
        </div>
      </div>
    </footer>
  </div>
  <script src="{{ url('assets/js/header.js') }}"></script>
</body>

</html>
