<div id="screen_preloader" style="position: absolute;width: 100%;height: 1000px;z-index: 9999;text-align: center;background: #fff;padding-top: 200px;">
	<h3>WP Charts and Graphs<br><small><i>by Pantherius</i></small></h3>
	<img src="<?php echo esc_url( plugins_url( '../assets/img/screen_preloader.gif', __FILE__ ) ); ?>">

	<h5><?php esc_html_e( 'LOADING', 'pwpcharts' );?><br><br><?php esc_html_e( 'Please wait...', 'pantherius-wordpress-survey-polls' );?></h5>
</div>
<div class="wrap pwpc" style="visibility:hidden">
	
	<h3 class="pwpc-title">WP Charts and Graphs</h3>
	
	<div id="pwp-charts-left">
		<div id="wp-charts-settings">
			
			<div class="pwpc-form-row-half">
				<label class="pwpc-form-label" for="pwpc_types"><?php esc_html_e( "Please choose the type here", 'pwpcharts' );?></label>
				<select class="pwpc-form-control" id="pwpc_types">
					<option value="piechart"><?php esc_html_e( "Pie Chart", 'pwpcharts' );?></option>
					<option value="polarchart"><?php esc_html_e( "Polar Chart", 'pwpcharts' );?></option>
					<option value="doughnutchart"><?php esc_html_e( "Doughnut Chart", 'pwpcharts' );?></option>
					<option value="linechart"><?php esc_html_e( "Line Chart", 'pwpcharts' );?></option>
					<option value="barchart"><?php esc_html_e( "Bar Chart", 'pwpcharts' );?></option>
					<option value="horizontalbarchart"><?php esc_html_e( "Horizontal Bar Chart", 'pwpcharts' );?></option>
					<option value="radarchart"><?php esc_html_e( "Radar Chart", 'pwpcharts' );?></option>
					<option value="bubblechart"><?php esc_html_e( "Bubble Chart", 'pwpcharts' );?></option>
				</select>
			</div>
			
			<div class="pwpc-form-row-half">
				<label class="pwpc-form-label" for="pwpc_legend"><?php esc_html_e( "Display Legend?", 'pwpcharts' );?></label>
				<select class="pwpc-form-control" id="pwpc_legend">
					<option value="false"><?php esc_html_e( "No", 'pwpcharts' );?></option>
					<option value="true"><?php esc_html_e( "Yes", 'pwpcharts' );?></option>
				</select>
			</div>
			
			<div class="pwpc-form-row">
				<label class="pwpc-form-label" for="titles"><?php esc_html_e( "Please add the titles here", 'pwpcharts' );?></label>
				<input class="pwpc-form-control" id="pwpc_titles" type="text" value="Title 1, Title 2, Title 3, Title 4">
			</div>
			
			<div class="pwpc-form-row">
				<label class="pwpc-form-label" for="values"><?php esc_html_e( "Please add the values here", 'pwpcharts' );?></label>
				<input class="pwpc-form-control" id="pwpc_values" type="text" value="3,7,5,12">
			</div>

			<div class="pwpc-form-row">
				<label class="pwpc-form-label" for="values"><?php esc_html_e( "Specify the maximum value, that you would like to be displayed on the chart or leave it empty.", 'pwpcharts' );?></label>
				<input class="pwpc-form-control" id="pwpc_max" type="text" value="">
			</div>
			
			<div class="pwpc-form-row">
				<label class="pwpc-form-label" for="values"><?php esc_html_e( "Specify the suggested minimum value, that you would like to be displayed on the chart or leave it empty.", 'pwpcharts' );?></label>
				<input class="pwpc-form-control" id="pwpc_min" type="text" value="">
			</div>

			<div class="pwpc-form-row">
				<label class="pwpc-form-label" for="values"><?php esc_html_e( "Color:Stroke Color:Hover Color (Accepts HEX color codes, color names, random)", 'pwpcharts' );?></label>
				<input class="pwpc-form-control" id="pwpc_bgcolor" type="text" value="red:gray:yellow, blue:gray:yellow, random:gray:yellow, purple:gray:yellow">
			</div>

			<div class="pwpc-form-row">
				<button class="pwpc-btn button button-primary" type="button" id="generate_wpc_shortcode"><?php esc_html_e( "Generate", 'pwpcharts' );?></button>
			</div>	
		</div>

		<div class="pwpc-form-row">
			<label class="pwpc-form-label" for="pwpc-shortcode"><?php esc_html_e( "Please copy this shortcode to any of your page or post", 'pwpcharts' );?></label>
			<input class="pwpc-form-control" id="pwpc-shortcode" type="text" value="" placeholder="<?php esc_html_e( "The shortcode will be displayed after you clicked the Generate button", 'pwpcharts' );?>">
		</div>
		<div class="pwpc-area" id="pwpc-chart-area"></div>
	</div>
	<?php require_once( plugin_dir_path( __FILE__ ) . '/sidebar.php' );?>
</div>