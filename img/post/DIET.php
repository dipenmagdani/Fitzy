<html>
<head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      background-color: black;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    .column:last-child {
      position: absolute;
      right: 0;
      float: right;
    }
   
    .card {
      box-shadow: 0 4px 8px 0 rgb(102, 96, 96);
      margin: 4px;
      margin-top: 20%;

    }

    .about-section {
      padding: 50px;
      text-align: center;
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("images/food3.jpg ");
      color: white;

      position: relative;
    }

    .container {
      padding: 0 16px;

    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: rgb(255, 248, 248);
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #f36100;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .topnav input[type=text] {
      border-radius: 15px;

      float: right;
      padding: 6px;
      /* position: absolute; */
      border: none;
      margin-top: 8px;
      margin-right: 16px;
      font-size: 17px;
    }

    @media screen and (max-width: 600px) {

      .topnav a,
      .topnav input[type=text] {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid rgb(15, 15, 15);
      }
    }

    .button:hover {
      background-color: #555;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }


    .container {
      padding: 64px;
      align-content: stretch;
    }

    .row:after {
      content: "";
      display: table;
      clear: both
    }

    .column-66 {
      float: left;
      width: 66.66666%;
      padding: 20px;
      background-color: white;
    }

    .column-33 {
      float: left;
      width: 33.33333%;
      padding: 20px;
    }

    .large-font {
      font-size: 48px;
    }

    .xlarge-font {
      font-size: 64px
    }

    img {
      display: block;
      height: auto;
      max-width: 100%;
    }

    @media screen and (max-width: 1000px) {

      .column-66,
      .column-33 {
        width: 100%;
        text-align: center;
      }

      img {
        margin: auto;
      }
    }
  </style>


</head>


<body>


  <div class="about-section">
    <h1>DIET</h1>
  </div>

  <h2 style="text-align:center">DIET PLANS</h2>


  <div class="column">
    <div class="card">
      <img src="images/boy2.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 class="title" align="center">VEG DIET</h2>
        <p class="title"></p>
        <p class="title"></p>
        <p class="title"></p>
        <p><button class="button">DIET PLAN'S</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/nonveg.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 class="title" align="center">NON VEG DIET</h2>
        <p class="title"></p>
        <p class="title"></p>
        <p class="title"></p>
        <p><button class="button">DIET PLAN'S</button></p>
      </div>
    </div>
  </div>

  <!-- <div class="column">
    <div class="card">
      <img src="images/nonveg.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 class="title" align="center">NON VEG DIET</h2>
        <p class="title"></p>
        <p class="title"></p>
        <p class="title"></p>
        <p><button class="button">DIET PLAN'S</button></p>
      </div>
    </div>
  </div> -->

  <!-- The App Section -->
  <div class="container">
    <div class="row">
      <div class="column-66">
        <h1 class="large-font"><b>The Diet</b></h1>
        <h1 class="large-font" style="color:black"><b>Why You Need Diet?</b></h1>
        <p><span style="font-size:36px;">Weight Loss or Maintenance</span> <br></p>
        <p style="font-size:20px">Use fruit, vegetables, lean protein and whole grains to replace high-fat, high-calorie
          foods. Staying within your required calorie range is vital for achieving and maintaining a healthy weight. The
          fiber in whole grains, fruits and vegetables help fill you up faster and keep you full longer than foods that
          are loaded with sugar. The longer you are satiated, the less likely you are to exceed your ideal calorie
          range.</p>

      </div>
      <div class="column-33">
        <img src="images/Food5.jpg" width="335" height="471">
      </div>
    </div>
  </div>

  <!-- Clarity Section -->
  <div class="container" style="background-color:#f1f1f1">
    <div class="row">
      <div class="column-33">
        <img src="images/FOOD2.JPG" alt="App" width="335" height="471">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Healthy Body</b></h1>
        <h1 class="large-font" style="color:red;"><b>Blood Sugar Control</b></h1>
        <p><span style="font-size:20px">Sugary foods, such as white bread, fruit juice, soda and ice cream, cause a
            spike in blood sugar. While your body can handle occasional influxes of glucose, over time this can lead to
            insulin resistance, which can go on to become type 2 diabetes. Complex carbohydrates, such as whole grain
            bread, oatmeal and brown rice, cause a slow release of sugar into the bloodstream, which helps regulate
            blood sugar.</p>

      </div>
    </div>
  </div>

  <!-- The App Section -->
  <div class="container">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font">
          <b< /b>
        </h1>
        <h1 class="large-font" style="color:MediumSeaGreen;"><b>Decreased Risk of Heart Disease</b></h1>
        <p style="font-size:20px"> Regularly consuming high-fat foods can increase your cholesterol and triglyceride
          levels, which can cause plaque to buildup in your arteries. Over time, this can lead to heart attack, stroke
          or heart disease. Eating a moderate amount of healthful fats such as those found in olive oil, avocados, fish,
          nuts and seeds helps protect your heart.</p>

      </div>
      <div class="column-33">
        <img src="images/food1.jfif" width="335" height="471">
      </div>
    </div>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <div class="row">
      <div class="column-33">
        <img src="images/food6.jpg" alt="App" width="335" height="471">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Support for Brain Health</b></h1>
        <h1 class="large-font" style="color:red;"><b></b></h1>
        <p><span style="font-size:20px">A healthful diet is just as good for your brain as the rest of your body.
            Unhealthy foods are linked to a range of neurological problems. Certain nutrient deficiencies increasing the
            risk of depression. Other nutrients, like potassium, actually involved in brain cell function. A varied,
            healthful diet keeps your brain functioning properly, and it can promote good mental health as well.</p>

      </div>
    </div>
  </div>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>