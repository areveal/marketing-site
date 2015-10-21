<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo "$title"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="<?php echo "$description"; ?>">
	<!-- stylesheets -->
	<link href="/assets/global.css" rel="stylesheet">
	<link href="/assets/promo.css" rel="stylesheet">
	<link href="/assets/responsive-nav.css" rel="stylesheet">
	<link href="/assets/jquery.tooltipster.css" rel="stylesheet">
	<link href="/assets/animate.css" rel="stylesheet">
	
	<!-- optimizely -->
	<script src="//cdn.optimizely.com/js/213035289.js"></script>
	
	<!-- Begin Inspectlet Embed Code -->
	<script type="text/javascript" id="inspectletjs">
		window.__insp = window.__insp || [];
		__insp.push(['wid', 1639662936]);
		(function() {
		function ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
		document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();

		})();
	</script>
	<!-- End Inspectlet Embed Code -->
		
	<!-- Segment.io -->
	<script>
		window.analytics=window.analytics||[],window.analytics.methods=["identify","group","track","page","pageview","alias","ready","on","once","off","trackLink","trackForm","trackClick","trackSubmit"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var key=window.analytics.methods[i];window.analytics[key]=window.analytics.factory(key)}window.analytics.load=function(t){if(!document.getElementById("analytics-js")){var a=document.createElement("script");a.type="text/javascript",a.id="analytics-js",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.io/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)}},window.analytics.SNIPPET_VERSION="2.0.9",
		window.analytics.load("kclkrs7sb8");
		window.analytics.page();
	</script>

	<!-- Mixpanel -->
	<script>
		(function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
		for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
		mixpanel.init("a1530c25cffe0af3ea30ada6cfcdb543");
	</script>

	<!-- SumoMe -->
        <script src="//load.sumome.com/" data-sumo-site-id="692f65793170ffe1fb10bc864e79434d131054eea677db95166010050b0cddeb" async="async">
        </script>
	
	<script>
  	//<![CDATA[
    (function() {var s=document.createElement('script');
      s.type='text/javascript';s.async=true;
      s.src=('https:'==document.location.protocol?'https':'http') +
      '://promoter.groovehq.com/widgets/d052bf50-e6eb-48d2-b1fd-c7d3b2f66488/ticket.js'; var q = document.getElementsByTagName('script')[0];q.parentNode.insertBefore(s, q);})();
  	//]]>
	</script>


	
</head>

<body>
<div id="container">
	
	<section id="header-wrap" class="<?php if ($section=="producthunt") {echo 'groove';} else {echo $section;} ?>" data-stellar-background-ratio="0.8">
		<header id="header" class="clearfix">			
			<nav id="nav" class="nav-collapse">				
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/pricing"<?php if ($section=="pricing") {echo ' class="selected"';} ?>>Pricing</a></li>
					<li><a href="/about"<?php if ($section=="about") {echo ' class="selected"';} ?>>About Us</a></li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="https://app.promoter.io/account/login/">Log In</a></li>
					<li><a href="https://app.promoter.io/account/signup/" class="signup">Sign Up</a></li>
				</ul>
				<script type="text/javascript">
    			mixpanel.track_links("#nav a", "click nav link", {
    				"referrer": document.referrer
    			});
    		</script>
			</nav>

			<a href="/" class="logo"></a>
			

		<?php if ($section=="home") {echo '
			<h1>The easiest and most effective way to capture actionable customer feedback</h1>
			<h2>Grow customer loyalty using the Net Promoter System. Launch your first survey in minutes -- no engineering required.</h2>
			<a href="https://app.promoter.io/account/signup/" class="btn-green">Get Started</a>
			<span class="trial-detail">Free Plan Includes 25 Surveys Per Month, No CC Required</span>			
			
			<div id="rackspace-video">
				<div id="wistia_4l7rxritt6" class="wistia_embed" style="width:640px; height:388px;"><div itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><meta itemprop="name" content="Rackspace + Promoter.io" /><meta itemprop="duration" content="PT2M" /><meta itemprop="thumbnailUrl" content="https://embed-ssl.wistia.com/deliveries/0c1885a38f5673c712112234c4f29946ca977157.bin" /><meta itemprop="contentURL" content="https://embed-ssl.wistia.com/deliveries/ae2deb11d821ec0621e5d2333912111a994c9208.bin" /><meta itemprop="embedURL" content="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?2013-10-04&autoPlay=false&banner=false&controlsVisibleOnLoad=true&customColor=7b796a&endVideoBehavior=default&fullscreenDisabled=true&hdUrl%5B2pass%5D=true&hdUrl%5Bext%5D=flv&hdUrl%5Bheight%5D=720&hdUrl%5Bsize%5D=39686222&hdUrl%5Btype%5D=hdflv&hdUrl%5Burl%5D=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F047ca36c0c1d8bfd454a16bdd38b426684746d05.bin&hdUrl%5Bwidth%5D=1280&mediaDuration=120.548&playButtonVisible=true&showPlayButton=true&showPlaybar=true&showVolume=true&stillUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F0c1885a38f5673c712112234c4f29946ca977157.bin%3Fimage_crop_resized%3D640x360&unbufferedSeek=false&videoUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Fae2deb11d821ec0621e5d2333912111a994c9208.bin" /><meta itemprop="uploadDate" content="2014-10-22T16:14:28Z" /><object id="wistia_4l7rxritt6_seo" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="display:block;height:360px;position:relative;width:640px;"><param name="movie" value="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?2013-10-04"></param><param name="allowfullscreen" value="true"></param><param name="bgcolor" value="#000000"></param><param name="wmode" value="opaque"></param><param name="flashvars" value="autoPlay=false&banner=false&controlsVisibleOnLoad=true&customColor=7b796a&endVideoBehavior=default&fullscreenDisabled=true&hdUrl%5B2pass%5D=true&hdUrl%5Bext%5D=flv&hdUrl%5Bheight%5D=720&hdUrl%5Bsize%5D=39686222&hdUrl%5Btype%5D=hdflv&hdUrl%5Burl%5D=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F047ca36c0c1d8bfd454a16bdd38b426684746d05.bin&hdUrl%5Bwidth%5D=1280&mediaDuration=120.548&playButtonVisible=true&showPlayButton=true&showPlaybar=true&showVolume=true&stillUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F0c1885a38f5673c712112234c4f29946ca977157.bin%3Fimage_crop_resized%3D640x360&unbufferedSeek=false&videoUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Fae2deb11d821ec0621e5d2333912111a994c9208.bin"></param><embed src="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?2013-10-04" allowfullscreen="true" bgcolor=#000000 flashvars="autoPlay=false&banner=false&controlsVisibleOnLoad=true&customColor=7b796a&endVideoBehavior=default&fullscreenDisabled=true&hdUrl%5B2pass%5D=true&hdUrl%5Bext%5D=flv&hdUrl%5Bheight%5D=720&hdUrl%5Bsize%5D=39686222&hdUrl%5Btype%5D=hdflv&hdUrl%5Burl%5D=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F047ca36c0c1d8bfd454a16bdd38b426684746d05.bin&hdUrl%5Bwidth%5D=1280&mediaDuration=120.548&playButtonVisible=true&showPlayButton=true&showPlaybar=true&showVolume=true&stillUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2F0c1885a38f5673c712112234c4f29946ca977157.bin%3Fimage_crop_resized%3D640x360&unbufferedSeek=false&videoUrl=https%3A%2F%2Fembed-ssl.wistia.com%2Fdeliveries%2Fae2deb11d821ec0621e5d2333912111a994c9208.bin" name="wistia_4l7rxritt6_html" style="display:block;height:100%;position:relative;width:100%;" type="application/x-shockwave-flash" wmode="opaque"></embed></object><noscript itemprop="description">Rackspace + Promoter.io</noscript></div></div>
			</div>
			<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>
			<script>
			wistiaEmbed = Wistia.embed("4l7rxritt6", {
			  videoFoam: true
			});
			</script>
			<script charset="ISO-8859-1" src="//fast.wistia.com/embed/medias/4l7rxritt6/metadata.js"></script>			
		
			<p class="helper">See how Rackspace uses Promoter.io and NPS to drive customer growth and a world-class experience</p>	
		';} ?>	

		<?php if ($section=="groove") {echo '
			<h1>Unlock consistent double digit growth for your company</h1>
			<h2>Understanding customer loyalty is the key to unlocking profitable growth for your business. Start gathering actionable customer insights in minutes.</h2>
			<h2>Groove friends, use code <strong>GSBS2015</strong> to get 50% off for 3 months!</h2><br>
			<a href="https://app.promoter.io/account/signup/" class="btn-green">Get Started</a>
			<span class="trial-detail">Free Plan Includes 25 Surveys Per Month, No CC Required</span>
		
			<div id="gallery">		
				<div id="gallery-inner" class="swipe">					

					<div id="slide-container">
				  	<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-create@2x.png)">
								<ul class="tooltips create">
									<li class="tip" title="<strong>Personalized Email Fields</strong>Set who you want your survey to come from so your customers always see a familiar name.">+<span></span></li>
									<li class="tip" title="<strong>Custom Tailored Survey in Seconds</strong>Add your logo, write a quick note and add in your brand, product or service name and you\'re done!">+<span></span></li>
									<li class="tip" title="<strong>Make Changes Easily</strong>Quickly navigate to any step of the campaign wizard if you need to make a change.">+<span></span></li>
									<li class="tip" title="<strong>Expert Tips at your Fingertips</strong>We share what works best so you can maximize your response rate and the accuracy if your score.">+<span></span></li>
								</ul>
							</div>
							<h2>Build and launch campaigns in minutes</h2>
							<p>Simply personalize your email, then set your branding and product or service. No survey builders here.<br> We\'ve done that for you including an engaging email template which embeds the Ultimate Question.</p>
						</div>
				  	<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-dashboard@2x.png)">
								<ul class="tooltips dashboard">
									<li class="tip" title="<strong>Score Breakdown</strong>See the full break-down of your score between Promoters, Passives & Detractors in real-time.">+<span></span></li>
									<li class="tip" title="<strong>Export Your Data Anytime</strong>Need to run some custom analysis on your data, or just like to have a backup? Easily export your data with a single click.">+<span></span></li>
									<li class="tip" title="<strong>NPS At-A-Glance</strong>Live calculation of your Net Promoter Score.<br>% Promoters - % Detractors = NPS.">+<span></span></li>
									<li class="tip" title="<strong>NPS Scorecard</strong>Get an idea of what your score means and how you\'re doing as an organization.">+<span></span></li>
									<li class="tip" title="<strong>Follow-up Completion</strong>We show you how you\'re doing on your follow-ups to responses. This is a critical step of the Net Promoter System.">+<span></span></li>
									<li class="tip" title="<strong>Trend Analysis</strong>Spot the biggest factors impacting your score and whether they are driving Promoters or Detractors.">+<span></span></li>
								</ul>
							</div>
							<h2>View customer insights in real time</h2>
							<p>Custom analytics tailored just for NPS. See your score and breakdown of customers in real-time,<br> track follow-up completion, response rates and the trends impacting your score without lifting a finger.</p>
						</div>
						<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-responses@2x.png)">
								<ul class="tooltips responses">
									<li class="tip" title="<strong>Detailed Responses</strong>Browse through responses quickly and with a simple inbox style view.">+<span></span></li>
									<li class="tip" title="<strong>Filter & Search</strong>View just your Promoters, Passives or Detractors as you work on closing the loop. Easily search for specific customer responses.">+<span></span></li>
									<li class="tip" title="<strong>Historical Score Tracking</strong>Never manually search for a customers previous response again. All historical data is shown inline with their most recent response.">+<span></span></li>
									<li class="tip" title="<strong>Respond Inline</strong>Close the loop with your responses directly from the app or forward to team members for follow-up.">+<span></span></li>
									<li class="tip" title="<strong>Tag Key Trends</strong>Tag specific themes and trends your customers mention and apply sentiment to identify the biggest drivers of your Net Promoter Score.">+<span></span></li>
								</ul>
							</div>
							<h2>Respond and close the loop directly from Promoter.io</h2>
							<p>Acknowledge feedback and resolve issues instantly, all in one place. Review detailed feedback<br> and historical scores effortlessly. Better than email, better than ticketing systems.</p>
						</div>
						<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-campaigns@2x.png)">
								<ul class="tooltips campaigns">
									<li class="tip" title="<strong>Separate Campaigns for Organization</strong>Create separate campaigns for different products, locations, or customer segments easily.">+<span></span></li>
									<li class="tip" title="<strong>Quick View Analytics</strong>Get an quick view of your campaign performance or compare to other campaigns at-a-glance.">+<span></span></li>
									<li class="tip" title="<strong>New Campaign Wizard</strong>Create new NPS surveys in just minutes with our super simple campaign builder.">+<span></span></li>
									<li class="tip" title="<strong>Resources Quick View</strong>Always know how many contacts you’ve engaged for the month and if you’ll need to upgrade plans before your next campaign.">+<span></span></li>
								</ul>
							</div>
							<h2>Organize engagement based on your business</h2>
							<p>Create unlimited campaigns to organize customers based on your needs. Multiple locations, separate product lines,<br> brand manager for different clients? Segment to your hearts content and compare at-a-glance.</p>
						</div>
						<!-- end -->					
				  </div>			

				</div>

				<div id="slide-controls">	  
					<a class="prev" onclick="gallery.prev()"><img src="/images/icon-arrow-left.svg"></a> 
					<a class="next" onclick="gallery.next()"><img src="/images/icon-arrow-right.svg"></a>
				</div>
				<!-- indicator dots -->
				  <div id="indicators-container">
						<ul id="indicators">
							<li class="on"></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>				
			</div>
		';} ?>

		<?php if ($section=="zapier") {echo '
			<h1>Customer insights in your workflow</h1>
			<h2>Integrate and share your NPS data with hundreds of platforms using Zapier. No development required!</h2>
			<h2>Zapier friends, use code <strong>ZAPIER50</strong> to get 50% off any Promoter.io plan for 3 months!</h2><br>
			<a href="https://app.promoter.io/account/signup/" class="btn-green">Get Started</a>
			<span class="trial-detail">Free Plan Includes 25 Surveys Per Month, No CC Required</span>
		';} ?>


		<?php if ($section=="producthunt") {echo '
			<h1>The easiest and most effective way to capture actionable customer feedback</h1>
			<h2>Grow customer loyalty using the Net Promoter System. Launch your first survey in minutes -- no engineering required.</h2>
			<h2>Product Hunt friends, use code <strong>WeLovePH</strong> to get 50% off any plan for 3 months!</h2><br>
			<a href="https://app.promoter.io/account/signup/" class="btn-green">Get Started</a>
			<span class="trial-detail">Free Plan Includes 25 Surveys Per Month, No CC Required</span>
		
			<div id="gallery">		
				<div id="gallery-inner" class="swipe">					

					<div id="slide-container">
				  	<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-create@2x.png)">
								<ul class="tooltips create">
									<li class="tip" title="<strong>Personalized Email Fields</strong>Set who you want your survey to come from so your customers always see a familiar name.">+<span></span></li>
									<li class="tip" title="<strong>Custom Tailored Survey in Seconds</strong>Add your logo, write a quick note and add in your brand, product or service name and you\'re done!">+<span></span></li>
									<li class="tip" title="<strong>Make Changes Easily</strong>Quickly navigate to any step of the campaign wizard if you need to make a change.">+<span></span></li>
									<li class="tip" title="<strong>Expert Tips at your Fingertips</strong>We share what works best so you can maximize your response rate and the accuracy if your score.">+<span></span></li>
								</ul>
							</div>
							<h2>Build and launch campaigns in minutes</h2>
							<p>Simply personalize your email, then set your branding and product or service. No survey builders here.<br> We\'ve done that for you including an engaging email template which embeds the Ultimate Question.</p>
						</div>
				  	<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-dashboard@2x.png)">
								<ul class="tooltips dashboard">
									<li class="tip" title="<strong>Score Breakdown</strong>See the full break-down of your score between Promoters, Passives & Detractors in real-time.">+<span></span></li>
									<li class="tip" title="<strong>Export Your Data Anytime</strong>Need to run some custom analysis on your data, or just like to have a backup? Easily export your data with a single click.">+<span></span></li>
									<li class="tip" title="<strong>NPS At-A-Glance</strong>Live calculation of your Net Promoter Score.<br>% Promoters - % Detractors = NPS.">+<span></span></li>
									<li class="tip" title="<strong>NPS Scorecard</strong>Get an idea of what your score means and how you\'re doing as an organization.">+<span></span></li>
									<li class="tip" title="<strong>Follow-up Completion</strong>We show you how you\'re doing on your follow-ups to responses. This is a critical step of the Net Promoter System.">+<span></span></li>
									<li class="tip" title="<strong>Trend Analysis</strong>Spot the biggest factors impacting your score and whether they are driving Promoters or Detractors.">+<span></span></li>
								</ul>
							</div>
							<h2>View customer insights in real time</h2>
							<p>Custom analytics tailored just for NPS. See your score and breakdown of customers in real-time,<br> track follow-up completion, response rates and the trends impacting your score without lifting a finger.</p>
						</div>
						<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-responses@2x.png)">
								<ul class="tooltips responses">
									<li class="tip" title="<strong>Detailed Responses</strong>Browse through responses quickly and with a simple inbox style view.">+<span></span></li>
									<li class="tip" title="<strong>Filter & Search</strong>View just your Promoters, Passives or Detractors as you work on closing the loop. Easily search for specific customer responses.">+<span></span></li>
									<li class="tip" title="<strong>Historical Score Tracking</strong>Never manually search for a customers previous response again. All historical data is shown inline with their most recent response.">+<span></span></li>
									<li class="tip" title="<strong>Respond Inline</strong>Close the loop with your responses directly from the app or forward to team members for follow-up.">+<span></span></li>
									<li class="tip" title="<strong>Tag Key Trends</strong>Tag specific themes and trends your customers mention and apply sentiment to identify the biggest drivers of your Net Promoter Score.">+<span></span></li>
								</ul>
							</div>
							<h2>Respond and close the loop directly from Promoter.io</h2>
							<p>Acknowledge feedback and resolve issues instantly, all in one place. Review detailed feedback<br> and historical scores effortlessly. Better than email, better than ticketing systems.</p>
						</div>
						<!-- slide -->
						<div>							
							<div style="background-image: url(/images/tour-campaigns@2x.png)">
								<ul class="tooltips campaigns">
									<li class="tip" title="<strong>Separate Campaigns for Organization</strong>Create separate campaigns for different products, locations, or customer segments easily.">+<span></span></li>
									<li class="tip" title="<strong>Quick View Analytics</strong>Get an quick view of your campaign performance or compare to other campaigns at-a-glance.">+<span></span></li>
									<li class="tip" title="<strong>New Campaign Wizard</strong>Create new NPS surveys in just minutes with our super simple campaign builder.">+<span></span></li>
									<li class="tip" title="<strong>Resources Quick View</strong>Always know how many contacts you’ve engaged for the month and if you’ll need to upgrade plans before your next campaign.">+<span></span></li>
								</ul>
							</div>
							<h2>Organize engagement based on your business</h2>
							<p>Create unlimited campaigns to organize customers based on your needs. Multiple locations, separate product lines,<br> brand manager for different clients? Segment to your hearts content and compare at-a-glance.</p>
						</div>
						<!-- end -->					
				  </div>			

				</div>

				<div id="slide-controls">	  
					<a class="prev" onclick="gallery.prev()"><img src="/images/icon-arrow-left.svg"></a> 
					<a class="next" onclick="gallery.next()"><img src="/images/icon-arrow-right.svg"></a>
				</div>
				<!-- indicator dots -->
				  <div id="indicators-container">
						<ul id="indicators">
							<li class="on"></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>				
			</div>
		';} ?>

		<?php if ($section=="pricing") {echo '
			<h1>Simple pricing that scales with your growth</h1>
			<h2>Risk free, 60-day money back guarantee</h2>
			<a href="https://app.promoter.io/account/signup/" class="btn-green">Get Started</a>
			<span class="trial-detail">Free Plan Includes 1000 Surveys Per Month, No CC Required</span>
		';} ?>

		<?php if ($section=="about") {echo '
			<h1>Handcrafted in Texas</h1>	
			<h2>We are a team of successful entrepreneurs and software developers who are<br> passionate about helping other businesses realize their full potential.</h2>
		';} ?>	
		</header>
	</section>
