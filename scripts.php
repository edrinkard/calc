<?php
	

	if (isset($_POST['cost']) && isset($_POST['rate'])) {
			
		$html = '';

		$data = array();			

		$orginal_cost =$_POST['cost'];

		$gross_rate = $_POST['rate'];

		$total_gross_percent = 100;

		$markup_rate = ($total_gross_percent - $gross_rate)/100;

		$selling_price = $orginal_cost / $markup_rate;


		$data['selling_price'] = $selling_price;

		$data['gross_profit'] = $selling_price - $orginal_cost ;

		$data['markup_amount'] = 100 * (  $data['gross_profit'] / $orginal_cost ) ;

		$html.='<div class="card mt-2">';

		$html.='<div class="card-body">';		

		$html.='<h3>Result</h3>';

		$html.='<hr>';

		$html.='<ul class="list-unstyled">';

		$html.='<li> Markup = <strong>$'.number_format((float)$data['markup_amount'], 2, '.', '').'</strong></li>';

		$html.='<li> Selling price (revenue)  = <strong>$'.number_format((float)$data['selling_price'], 2, '.', '').'</strong></li>';

		$html.='<li> Gross profit = <strong>$'.number_format((float)$data['gross_profit'], 2, '.', '').'</strong></li>';

		$html.='</ul>'; 

		$html.='</div>';

		$html.='</div>';

		echo $html;
			
	}


?>