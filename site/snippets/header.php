<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?>
    <?php if(!$page->isHomepage()) {
      echo '| ';
      echo $page->title()->html(); } ?>
      </title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php echo js('assets/js/app.min.js') ?>

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50748412-1', 'auto');
  ga('send', 'pageview');

</script>

  <!--


    .-.  .-.
    : :  : :
    : :  : :   .--. .-..-. .--.   .-..-. .--. .-..-.
    : :  : :_ ' .; :: `; :' '_.'  : :; :' .; :: :; : _
    :_;  `.__;`.__.'`.__.'`.__.'  `._. ;`.__.'`.__.':_;
                                   .-. :
                                   `._.'

  -->

</head>

<body class="<?php echo $page->template() ?>">

  <div id="popup-menu">

    <div class="outer-container">

      <div class="toggle">&#215</div>


    <?php snippet('menu') ?>

  </div>

  </div>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 width="256.4863281px" height="214.6503906px" viewBox="0 0 256.4863281 214.6503906"
      	 enable-background="new 0 0 256.4863281 214.6503906" xml:space="preserve">
      <g>
      	<path fill="#00FF66" d="M41.8642578,107.8735352c0-12.0507812,0.4824219-16.6318359,2.2890625-22.4169922
      		c4.21875-13.2568359,15.546875-19.8876953,30.1308594-19.8876953c13.2578125,0,22.4179688,5.4267578,26.7578125,12.7763672
      		c0.9628906,1.6875,1.5644531,3.3769531,1.5644531,5.3027344c0,4.7001953-3.6152344,7.9550781-8.0742188,7.9550781
      		c-3.0136719,0-5.4238281-0.9628906-7.8339844-4.3378906c-3.1328125-4.3388672-7.109375-6.0253906-12.4140625-6.0253906
      		c-6.9902344,0-11.3300781,3.4931641-13.1367188,9.1591797c-0.9648438,3.0126953-1.3261719,6.8691406-1.3261719,17.4746094
      		c0,10.6064453,0.3613281,14.5830078,1.3261719,17.5966797c1.8066406,5.5439453,6.265625,9.0390625,13.3769531,9.0390625
      		c6.2675781,0,11.4511719-3.2539062,13.1386719-8.4365234c0.7207031-2.1699219,0.9648438-4.9404297,0.9648438-8.0751953
      		c0-0.4824219-0.2441406-0.7216797-0.7265625-0.7216797h-5.5429688c-4.578125,0-7.4707031-2.7734375-7.4707031-6.9912109
      		s2.8925781-6.9921875,7.4707031-6.9921875h16.875c4.4589844,0,6.9882812,2.5332031,6.9882812,6.9921875v0.84375
      		c0,7.2304688-0.6015625,13.9804688-2.046875,18.5615234c-4.2207031,13.1357422-15.3066406,20.4882812-29.890625,20.4882812
      		s-25.9121094-6.6289062-30.1308594-19.8876953C42.3466797,124.5073242,41.8642578,119.9262695,41.8642578,107.8735352z"/>
      	<path fill="#00FF66" d="M151.9013672,75.0717773c0-5.7851562,3.734375-9.4003906,8.9179688-9.4003906
      		c5.0605469,0,8.8007812,3.6152344,8.8007812,9.4003906v23.2617188c0,0.4804688,0.2382812,0.7216797,0.7207031,0.7216797h26.7539062
      		c0.4824219,0,0.7265625-0.2412109,0.7265625-0.7216797V75.0717773c0-5.7851562,3.734375-9.4003906,8.796875-9.4003906
      		c5.1816406,0,8.9179688,3.6152344,8.9179688,9.4003906v64.5996094c0,5.7871094-3.7363281,9.4003906-8.9179688,9.4003906
      		c-5.0625,0-8.796875-3.6132812-8.796875-9.4003906v-24.1035156c0-0.4833984-0.2441406-0.7246094-0.7265625-0.7246094h-26.7539062
      		c-0.4824219,0-0.7207031,0.2412109-0.7207031,0.7246094v24.1035156c0,5.7871094-3.8574219,9.4003906-8.9199219,9.4003906
      		c-5.1835938,0-8.7988281-3.6132812-8.7988281-9.4003906V75.0717773z"/>
      	<path fill="#00FF66" d="M238.7275391,32.1801758H137.2841797V12.8178711c0-4.9921875-4.046875-9.0390625-9.0390625-9.0390625
      		s-9.0390625,4.046875-9.0390625,9.0390625v19.3623047H17.7587891c-4.9921875,0-9.0390625,4.0478516-9.0390625,9.0400391
      		v132.2080078c0,4.9921875,4.046875,9.0400391,9.0390625,9.0400391h101.4472656v19.3632812
      		c0,4.9931641,4.046875,9.0400391,9.0390625,9.0400391s9.0390625-4.046875,9.0390625-9.0400391v-19.3632812h101.4433594
      		c4.9921875,0,9.0390625-4.0478516,9.0390625-9.0400391V41.2202148
      		C247.7666016,36.2280273,243.7197266,32.1801758,238.7275391,32.1801758z M26.7978516,164.3881836V50.2592773h92.4082031
      		v114.1289062H26.7978516z M229.6865234,164.3881836h-92.4023438V50.2592773h92.4023438V164.3881836z"/>
      </g>
      </svg>
    </a>
    <div class="toggle">=</div>
  </header>
