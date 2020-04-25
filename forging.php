<html>
  <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114409253-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-114409253-4');
	</script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/js/tronweb.js"></script>
  <script src="/js/abi.js"></script>
  <script src="/js/forging.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <title>World Builder Forging Platform</title>
	<meta property="og:title" content="World Builder Project" />
	<meta property="og:description" content="World Builder's ecosystem runs on a number of different tokens associated with different projects. The forging platform allows users to forge new tokens using WRLD as base material." />
	<meta property="og:url" content="https://wrldcoin.io" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:site" content="World Builder" />
	<meta property="og:image" content="https://worldbuilder.fun/img/logo.png"/>
	<meta name="twitter:title" content="World Ecosystem Forge" />
	<meta name="twitter:description" content="Forge Tokens for the World Builder Ecosystem" />
	<meta name="twitter:image" content="https://worldbuilder.fun/img/logo.png" />
	<style>
		.info {
			background-color: WhiteSmoke;
			margin: 20x;
		}
		img {
			width: 100%;
		}
	</style>
  </head>
  <body>
    <div id = "main" style = "margin-top:10px;">
		<h1><center>Welcome to The Forge</center></h1>
		<div class = "row" style = "margin-bottom: 2px;" id = "information-panel">
			<div class = "col-md-2" style = "border-width:1px; border-style:solid; background-color: #F5F5F5; padding: 2px;">
				<center>
			     	Token:
			     	<select id = "token" name = "token">
			      	</select>
			   </center>
		    </div>
			<div class = "col-md-3" style = "border-width:1px; border-style:solid; padding: 2px;">
				<center>Total Supply: <span id = "total-supply">0</span>M SUN</center>
			</div>
			<div class = "col-md-2" style = "border-width:1px; border-style:solid; padding: 2px;">
				<center>Smiths: <span id = "smith-count">0</span></center>
			</div>
			<div class = "col-md-3" style = "border-width:1px; border-style:solid; padding: 2px;">
				<center>WRLD Used: <span id = "total-wlrd">0</span>M SUN</center>
			</div>
		</div>
    	<div class = "row">
	    	<div class = "col-md-7 rounded border">
	    		<h1><center>About</center></h1>
	    		This platform lets you take World Builder's WRLD coin, and "burn" it in return for the creation of new tokens from our ecosystem. Those burned tokens will be temporarily locked out of circulation, before eventually being returned to the project team of the associated token.
	    		<hr/>
	    		<b>Forging:</b> To make forging a bit more like actually mining for things like gold and silver, the forge rate isn't constant. Instead, the cost to forge increases based on how recently the last forge occurred. You may try forging tokens once per hour, up to the current per user forge limit.
	    		<hr/>
	    		<b>Registration:</b> To prevent people from abusing the system and forging with multiple accounts, you'll have to pay an initial registration fee. This fee will make you a smith a coin. It's a one time fee (per token project), paid in TRX, to the project stewards. Each project sets its own smithing fee.
	    	</div>
	    	<div class = "col-md-3 rounded border" id = "register_form">
	    		<h1><center>Register to Forge <span id = "cur">ARC</span></center></h1>
	    		You're not currently registered as a smith for this token. You'll have to pay an initial fee of <span id = "registration_fee">0</span> TRX to forge.
		    	<form>
		    		<div class="form-group">
				        <center><button type = "button" class = "btn btn-primary" id = "register">Register</button></center>
		    		</div>
		    	</form>
	    	</div>
	    	<div class = "col-md-3 rounded border" id = "disconnected_message">
	    		<h1><center>Disconnected From Tron Network</center></h1>
	    		You are either not logged in using a Tron compatible browser, or are not using one.
	    	</div>
	    	<div class = "col-md-3 rounded border" id = "forge_form">
	    		<h1><center>Forge (<span id = "cur2">ARC</span>)</center></h1>
		    	Wallet Balance: <span id = "balance">0</span> <span id = "cur3">ARC</span><br/>
		    	Forge Price: <span id = "price">0</span> WLRD<br/>
		    	Maximum WRLD Allowed: <span id = "max">0</span><br/>
	  			Estimated number of tokens to forge: <span id = "est">0</span>
	    		<hr/>
		    	<form>
		    		<div class="form-group">
		    			<label>Amount of WRLD to spend:</label>
		    			<input type = "number" min = "0" max = "100000" class="form-control" id="amtWRLD">
		    		</div>
			        <button type = "button" class = "btn btn-primary" id = "forge">Forge</button>
		    	</form>
		    </div>
    	</div>
    </div>
  </body>
</html>
