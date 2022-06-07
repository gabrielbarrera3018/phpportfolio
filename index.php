<html>
  <head><link href='https://css.gg/arrow-up.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
  <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    crossorigin="anonymous"
    />
  <link rel="stylesheet" href="scss/main.scss">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  <title>PHP Test</title>
curl "$REPLIT_DB_URL?prefix=key"
  </head>
  <body class="body">
  <div class="page container" id="home">
      <header>
        <nav class="navigation" data-navigation>
          <div class="navigation__container">
            <div class="navigation__container-content"><h1 class="navigation__container-content-heading">Szymon Rojek</h1>
          </div>
          </div>
          <ul class="navigation__list" data-navigation-list>
            <li class="navigation__item" data-link="home">
              <a class="navigation__link navigation__link--drawBorders" href="#home" data-link="home">home</a>
            </li>
            <li class="navigation__item">
              <a class="navigation__link navigation__link--drawBorders" href="#intro" data-link="intro">intro</a>
            </li>
            <li class="navigation__item">
              <a class="navigation__link navigation__link--drawBorders" href="#music" data-link="music">music</a>
            </li>
            <li class="navigation__item">
              <a class="navigation__link navigation__link--drawBorders" href="#feedback" data-link="feedback">feedback</a>
            </li>
            <li class="navigation__item">
              <a class="navigation__link navigation__link--drawBorders" href="#contact" data-link="contact">contact</a>
            </li>
          </ul>

          <button class="navigation__hamburgerButton" type="button" aria-expanded="false" data-menu-button>
            <span class="sr-only">Menu</span>
            <div class="navigation__firstLine"></div>
          </button>
        </nav>
      </header>

      <div class="hero-container" data-hero-container>
        <div id="bg-dots"></div>
      </div>

    <main class="main-container">
      <button class="buttonToggle" data-button-toggle></button>

      <section class="intro" id="intro">
        <article class="article">
          <div class="article__text article__text--positioning">
            <h2 class="article__text-heading"><span>great</span> passion</h2>
            <p class="article__text-paragraph">
              Welcome to my music website. I play classical guitar, which is my greatest passion. I fell in love with
              this instrument many years ago. That was also the first time when I heard Baden Powell's and Luiz
              Bonfa's
              compositions. Energetic rhythms of samba and bossa nova captivated me and let me into the musical world
              of
              strings.
            </p>
          </div>
          <img class="article__img" src="../src/images/SR-passion.webp"
            alt="perspective of the guitar and hands while playing by Szymon Rojek">
        </article>
      </section>
      <section class="music" id="music">
        <article class="article">
          <div class="article__text article__text--positioning">
            <h2 class="article__text-heading"><span class="article__special">great</span> music</h2>
            <p class="article__text-paragraph">
              Guitar music can create a <em>great atmosphere</em> anywhere people interact with one another. It has an
              enormous meaning in the process of creating any kind of relations. In my repertoire, people may find
              famous tracks and musical pieces from popular music, especially jazz, as well as my compositions, which
              altogether create a romantic and energetic content.
            </p>
            <p class="article__text-paragraph article__text-paragraph--marginBottom">
              Let me invite you to listen to two well-known tracks which I have adapted as well as two of my own
              compositions: <em>Imagine</em> and <em>Release</em>. You will find them below.
            </p>
          </div>
          <img class="article__img article__img--margin" src="../src/images/min-SR-atm.jpg"
            alt="Szymon Rojek on the stage playing a concert for the people">
        </article>
        <div class="pair-tracks">
          <div class="pair-tracks__track pair-tracks__track--marginTop">
            <iframe class="pair-tracks__track-iframe" scrolling="no" frameborder="no" allow="autoplay" 
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1031696884&color=%23130906&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
              <a href="https://soundcloud.com/simon-royek" title="Szymon Rojek" target="_blank" class="pair-tracks__track-link">
                Szymon Rojek
              </a> ·
              <a href="https://soundcloud.com/simon-royek/szymon-rojek-manha-de-carnaval" title="Manha De Carnaval" target="_blank" class="pair-tracks__track-link">
                Manha De Carnaval
              </a>
          </div>
          <div class="pair-tracks__track">
            <iframe class="pair-tracks__track-iframe" scrolling="no" frameborder="no" allow="autoplay"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1031694856&color=%23130906&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
            <div>
              <a href="https://soundcloud.com/simon-royek" title="Szymon Rojek" target="_blank" class="pair-tracks__track-link">
                Szymon Rojek
              </a> ·
              <a href="https://soundcloud.com/simon-royek/szymon-rojek-blue-bossa" title="Blue Bossa" target="_blank" class="pair-tracks__track-link">
                Blue Bossa
              </a>
            </div>
          </div>
        </div>
        <div class="pair-tracks">
          <div class="pair-tracks__track">
            <iframe class="pair-tracks__track-iframe" scrolling="no" frameborder="no" allow="autoplay"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1031696458&color=%23130906&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
              <a href="https://soundcloud.com/simon-royek" title="Szymon Rojek" target="_blank" class="pair-tracks__track-link">
                Szymon Rojek
              </a> ·
              <a href="https://soundcloud.com/simon-royek/szymon-rojek-wyobraznia" title="Imagination" target="_blank" class="pair-tracks__track-link">
                Imagination
              </a>
          </div>
          <div class="pair-tracks__track">
            <iframe class="pair-tracks__track-iframe" scrolling="no" frameborder="no" allow="autoplay" style="border-radius: 4px;"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1031699374&color=%23130906&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
            <div>
              <a href="https://soundcloud.com/simon-royek" title="Szymon Rojek" target="_blank" class="pair-tracks__track-link">
                Szymon Rojek
              </a>
              <a href="https://soundcloud.com/simon-royek/release" title="Release" target="_blank" class="pair-tracks__track-link">
                Release
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="feedback" id="feedback">
        <article class="article">
          <div class="article__text">
            <h2 class="article__text-heading"><span>great</span> feedback</h2>
            <p class="article__text-paragraph">
              In my musical arrangements and compositions, my principal aim is to improvise with joy and fun. Because
              of
              that, I am able to capture the moment of 'here and now'. Moreover, it is particularly importnat for me
              to
              create a kind of sound which will not only be pleasant to listen to but will also bring back good
              memories.
            </p>
            <p class="article__text-paragraph article__text-paragraph--marginBottom">
              On my journey, I had the pleasure of meeting a number of wonderful musicians who kindly gave me feedback
              which you will find below.
            </p>
          </div>
        </article>
        <figure class="feedback__content">
          <img class="feedback__content__img" src="../src/images/paul_richards.jpg" alt="Paul Richards">
          <div class="feedback__content__text feedback__content__text--right">
            <blockquote>
              <p class="feedback__content__text-paragraph">
                Szymon has a beautiful touch on the instrument which breathes life into his playing!
              </p>
            </blockquote>
            <figcaption class="feedback__content__text-author">
              <a class="feedback__content__text-author-link" href="http://paulrichardsguitar.com/" rel="noreferrer noopener"
                target="_blank" title="personal website"><em>Paul Richards</em></a>
            </figcaption>
          </div>
        </figure>
        <figure class="feedback__content">
          <img class="feedback__content__img" src="../src/images/andrea_valeri.jpg" alt="Andrea Valeri">
          <div class="feedback__content__text feedback__content__text--left">
            <blockquote>
              <p class="feedback__content__text-paragraph">
                Szymon, you are doing absolutely great my Brother. I know there is a wonderful future ahead of You,
                keep
                rockin' with your music!
              </p>
            </blockquote>
            <figcaption class="feedback__content__text-author">
              <a class="feedback__content__text-author-link" href="http://www.andreavaleri.com/" rel="noreferrer noopener"
                target="_blank" title="personal website"><em>Andrea
                  Valeri</em></a>
            </figcaption>
          </div>
        </figure>

        <figure class="feedback__content">
          <img class="feedback__content__img" src="../src/images/piotr_krepec.jpg" alt="Piotr Krępeć">
          <div class="feedback__content__text feedback__content__text--right">
            <blockquote>
              <p class="feedback__content__text-paragraph">
                Szymon Rojek is an outstanding guitarist filled with enormous sensitivity and music taste. His music
                compositions touch a listener, and bring in a good mood.
              </p>
            </blockquote>
            <figcaption class="feedback__content__text-author">
              <a class="feedback__content__text-author-link" href="https://piotrkrepec.com/" rel="noreferrer noopener" target="_blank"
                title="personal website"><em>Piotr
                  Krępeć</em></a>
            </figcaption>
          </div>
        </figure>

        <figure class="feedback__content">
          <img class="feedback__content__img" src="../src/images/filip_fiebiger.jpg" alt="Filip Fiebiger">
          <div class="feedback__content__text feedback__content__text--left">
            <blockquote>
              <p class="feedback__content__text-paragraph">
                I notice a lot of passion and naturalness in Rojek's performance. He has mastered classical guitar and
                he perfectly finds himself in popular music: jazz, swing and Latin America music.
              </p>
            </blockquote>
            <figcaption class="feedback__content__text-author">
              <a class="feedback__content__text-author-link" href="http://filipfiebiger.pl/" rel="noreferrer noopener" target="_blank"
                title="personal website"><em>Filip
                  Fiebiger</em></a>
            </figcaption>
          </div>
        </figure>
      </section>
      <section class="contact" id="contact">
        <div class="contact__header">
          <h3 class="contact__header__heading">Say Hi!</h3>
          <h4 class="contact__header__sub-heading">Send me an email 👋</h4>
        </div>

        <form class="form" novalidate data-form>
          <p class="form__information">*Fields required</p>
          <ul class="form__list">
            <li>
              <div class="form__item">
                <input name="name" id="name" class="form__item__field js-form__item__field-name" placeholder=" " required data-validate/>
                <label for="name" class="form__item__label">name*</label>
                <i class="fas form__item__icon" data-icon></i>
                <p class="form__item__error" data-error></p>
              </div>
            </li>
            <li>
              <div class="form__item">
                <input name="email" id="email" class="form__item__field js-form__item__field-email" placeholder=" " required data-validate/>
                <label for="email" class="form__item__label">email*</label>
                <i class="fas form__item__icon" data-icon></i>
                <p class="form__item__error" data-error></p>
              </div>
            </li>
            <li>
              <div class="form__item">
                <input name="subject" id="subject" class="form__item__field js-form__item__field-subject" placeholder=" " required data-validate/>
                <label for="subject" class="form__item__label">subject*</label>
                <i class="fas form__item__icon" data-icon></i>
                <p class="form__item__error" data-error></p>
              </div>
            </li>
            <li>
              <div class="form__item">
                <textarea name="description" id="description" class="form__item__field form__item__field--last" placeholder=" " required data-validate data-area></textarea>
                <label for="description" class="form__item__label form__item__label--last">description*</label>
                <i class="fas form__item__icon" data-icon></i>
                <p class="form__item__error form__item__error--last" data-error></p>
              </div>
            </li>
          </ul>
          <button class="form__button js-submitButton" type="submit">Send Message</button>
        </form>
      </section>
    </main>
    <footer class="footer js-footer">
      <p class="footer__paragraph">
        &#169; 2021 | Coded by Szymon Rojek
      </p>
      <div>
        <button class="footer__buttonUp js-scrollTop"></button>
      </div>
    </footer>
  </div>
</body>
</html>