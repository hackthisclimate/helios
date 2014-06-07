<a href="https://twitter.com/share" class="twitter-share-button" data-related="jasoncosta" data-lang="en" data-size="large" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div id="fb-root"></div>
<br/>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="100" data-type="button"></div>
	<!-- home -->
	<?php if(empty($kW && $Amt)){ ?>
	<div class="container-fluid">
    	<nav>
    		<h5>Helios</h5>
    	</nav>
		<div id="header">
			<div class="header-text">
				<h1>Convert your home to Solar.</h1>
				<p>Compute how much you'll save if you convert your home to renewable energy.</p>
			</div>
			<form class="form-horizontal" role="form" method="POSt" action='<?=base_url();?>index.php/main/generate'>
				<div class="clear"></div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<input type="text" class="form-control" name="kW" placeholder="Average kWH/month">
						</div>
						<div class="kwh-info">
							<div class="hidden-xs">
								<div class="left">
									<small>Look for it at the right side of your electric bill, next to the graph.</small>
								</div>
								<div class="right">
									<img src="<?=base_url();?>/assets/img/meralco.png" class="img-responsive" alt="Meralco Bill kWh">
								</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>

					<div class="row">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="Amt" placeholder="Budget for conversion">
							<div class="clear"></div>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-default">Compute</button>
						</div>
					</div>
				</div>
			</form>
		</div>	
		<div class="row">
			<div class="info">
				<div class="col-md-4">
					<h3>Compute</h3>
					<span class="entypo-chart-area"></span>
					<p>How much CO2 or you using? Find out by computing your Carbon Dioxide footprint.</p>
					<div class="clear"></div>
				</div>
				<div class="col-md-4">
					<h3>Visualize</h3>
					<span class="entypo-chart-line"></span>
					<p>View your savings and ROI in beautiful charts that show you a yearly timeline.</p>
					<div class="clear"></div>
				</div>
				
				<div class="col-md-4">
					<h3>Measure</h3>
					<span class="entypo-chart-bar"></span>
					<p>Measure how much energy you'll save when you convert your home to renewable energy</p>
					<div class="clear"></div>
				</div>
				
			</div>
		</div>
	</div>
	<?php } ?>

	<!-- user has entered kWh and budget -->
	<?php if(!empty($kW && $Amt)){ ?>
	<div class="container-fluid">
		<nav>
    		<h5>Helios</h5>
    	</nav>
		<div id="short-header">
			<h3>Your average monthly kWh usage: <strong><?php print_r($kW);?> kWh</strong></h1>
			<h4>Budget for solar conversion: <strong>PHP <?php print_r($Amt);?></strong></h2>
		</div>
		<div class="chart">
			<h5>This chart shows how much money you will save on your electricity bill per month.
				Based on your budget, you can get <strong><?php print_r($monthlySolar);?></strong> savings per month.<h5>
			<canvas id="myChart1" width="900" height="300"></canvas>
		</div>
		<div class="chart">
			<h5>Per year, your ROI will be $ROI%.
				Within %duration years, your investment will have paid for itself and 
				you have helped the environment along the way.<h5>
			<canvas id="myChart2" width="900" height="300"></canvas>
		</div>
		<div class="chart">
			<h5>Your overall carbon footprint will be lowered from <strong><?php print_r($Emission);?> pounds of CO2
			</strong> to <strong><?php print_r($emissionSolar);?> pounds of CO2</strong>,
				equivalent to <span class="text-success"><strong><?php print_r($trees);?></strong></span> trees being planted.<h5>
			<canvas id="myChart3" width="900" height="300"></canvas>
		</div>
		<div class="interested">
			<h4>Interested in converting your home to Solar? Order Solar panels from these local distributors: </h3>
			<div class="distributor">
				<img src="<?=base_url();?>/assets/img/distributor1.png" alt="Solar distributor 1" class="img-responsive">
			</div>
			<div class="distributor">
				<img src="<?=base_url();?>/assets/img/distributor2.png" alt="Solar distributor 2" class="img-responsive">
			</div>
			<div class="distributor">
				<img src="<?=base_url();?>/assets/img/distributor3.png" alt="Solar distributor 3" class="img-responsive">
			</div>
		</div>
	</div>
	<?php }?>
