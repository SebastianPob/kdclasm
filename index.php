<!doctype html>
<html class="no-js" lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/tools/normalize.css">
    <!-- build:css css/mains.css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- endbuild -->
</head>

<body>
    <div class="container">
      <header>
          <div class="logo">
            <img src="img/logo.svg" alt="logo" />
          </div>
          <nav>
            <ul>
              <li>Projects</li>
              <li>About</li>
              <li>Contact</li>
            </ul>
          </nav>
      </header>

      <section class="heading-page">
        <div class="slider">
          <div class="slide s-1">
            <img src="img/slides/1.jpg"/>
          </div>
        </div>
      </section>

    </div>

      <section class="projects">
        <div class="container">

          <h2 class="sec-title">Projects</h2>
          <main>
            <article class="kdclasm right">
              <img src="img/project/kdclasmt-main.jpg" alt="project-1" />
              <div class="desc">
                <h1>Kdclasm previous website</h1>
                <p>
                  First „kdclasm studio” website
                </p>
              </div>
            </article>
          </main>

        </div>
      </section>

      <div class="container">

      <section class="about">
        <h2 class="sec-title">About</h2>
        <p>
          Modern design studio specialized</br>
          in high-end web development
        </p>

      </section>

      </div>

      <section class="offer">
        <div class="main">
          <div class="product">
            <img src="img/icons/web dev.svg" alt="icon" class="icon"/>
            <h3 class="product-desc">Web Development</h3>
          </div>

          <div class="product">
            <img src="img/icons/UI UX.svg" alt="icon" class="icon"/>
            <h3 class="product-desc">UI/UX Design</h3>
          </div>

          <div class="product">
            <img src="img/icons/branding.svg" alt="icon" class="icon"/>
            <h3 class="product-desc">Branding</h3>
          </div>
        </div>
      </section>


      <section class="contact">
        <div class="container">
          <h2 class="sec-title">Contact</h2>

          <form class="ct-form" action="index.html" method="post">
            <fieldset class="ct-name">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Name">
            </fieldset>

            <fieldset class="ct-email">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">
            </fieldset>

            <fieldset class="ct-message">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Message"></textarea>
            </fieldset>
            <input type="submit" name="send" value="Send">
          </form>
        </div>

        <div class="waves">

        </div>

      </section>

      <footer>
        <div class="quote">
          <p>
            <q>
              Everything should be made as simple as possible, but not simpler.
            </q>
            <br>–Albert Einstein
          </p>
        </div>
        <div class="social-media">

        </div>
      </footer>








    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="scripts/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <!-- build:js scripts/mainscript.js -->

    <script src="scripts/main.js"></script>
    <script src="scripts/vendor/modernizr-2.8.3.min.js"></script>

    <!-- endbuild -->
</body>

</html>
