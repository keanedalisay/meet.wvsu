<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="application-name" content="Meet.WVSU">
  <title>Meet.WVSU</title>
  <link href="../styles/global.css" rel="stylesheet">
  <link href="../styles/dshbrd.css" rel="stylesheet">
</head>

<body>
  <?php require_once('cmpnts/header.logout.php') ?>
  <main class="mn">
    <section class="hdng">
      <h1 class="hdng-user">Welcome, Keane.</h1>
      <hr class="hdng-hr">
    </section>
    <section class="chatbox">
      <div class="wrap--msgs">
        <ul class="msgs">
          <li class="msg msg--others">
            <cite class="msg-athr">Nel Alanan</cite>
            <blockquote class="msg-ctnt">
              Hello world! This is asd asdj asdj asdj asdj asd asdj nsad ijfsdji aeijasd asdij.
            </blockquote>
          </li>
          <li class="msg msg--user">
            <cite class="msg-athr">You</cite>
            <blockquote class="msg-ctnt">
              Hello world! This is asd asdj asdj asdj asdj asd asdj nsad ijfsdji aeijasd asdij.
            </blockquote>
          </li>
          <li class="msg msg--user">
            <cite class="msg-athr">You</cite>
            <blockquote class="msg-ctnt">
              Hello world! This is asd asdj asdj asdj asdj asd asdj nsad ijfsdji aeijasd asdij.
            </blockquote>
          </li>
          <li class="msg msg--user">
            <cite class="msg-athr">You</cite>
            <blockquote class="msg-ctnt">
              Hello world! This is asd asdj asdj asdj asdj asd asdj nsad ijfsdji aeijasd asdij.
            </blockquote>
          </li>
        </ul>
      </div>
      <form class="wdgt">
        <textarea class="wdgt-input" placeholder="Enter your message..." aria-label="Message box."></textarea>
        <button class="wdgt-sbmt" type="submit" aria-label="Send message.">
          <img src="../assets/icons/send_msg_icon.svg" alt="Send message.">
        </button>
      </form>
    </section>
  </main>
  <?php require_once('cmpnts/footer.php') ?>
</body>

</html>