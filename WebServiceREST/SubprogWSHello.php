<?php
require_once ('WebServiceREST/SubprogWS.php');
class SubprogWSHello extends SubprogWS {
	
	function __construct(){
	
		parent::__construct();
	
	}
	function result(){
		$json_result = json_decode($this->_response);
		$arr1 = $json_result->ZWSRPARLINESIN;
		$str  = "<div>";
		$str .= "<table class='table table-striped table-bordered '>";
		$str .= "<thead><tr><th><h3 class='text-center'>Input parameters</h3></th></tr></thead>";
		$str .= "<tbody></tbody></table>";
		$str .= "<table class='table table-striped table-bordered table-condensed'>";
		$str .= "<thead><tr><th>Name</th><th>Value</th></tr></thead><tbody>";
		$str .= "<tr>";
		foreach ($arr1  as $obj){
		
			if ($obj->IN_PARCOD=='I_FIRSTNAME' or $obj->IN_PARCOD=='I_LASTNAME') {
				$str .="<tr>";
				$str .= "<td>";
				$str .= $obj->IN_PARCOD;
				$str .= "</td>";
				$str .= "<td>";
				$str .= $obj->IN_PARVAL;
				$str .= "</td>";
				$str .="</tr>";
			}
		
		}
		
		$str .= "</tbody></table>";
		$str .= "</div>";
		
		$arr1 = $json_result->ZWSRPARLINESOUT;
		$str .= "<div>";
		$str .= "<table class='table table-striped table-bordered '>";
		$str .= "<thead><tr><th><h3 class='text-center'>Output parameters</h3></th></tr></thead>";
		$str .= "<tbody></tbody></table>";
		$str .= "<table class='table table-striped table-bordered table-condensed'>";
		$str .= "<thead><tr><th>Name</th><th>Value</th></tr></thead><tbody>";
		$str .= "<tr>";
		foreach ($arr1  as $obj){
		
			if ($obj->OUT_PARCOD=='O_SAYHELLO') {
				
				$str .="<tr>";
				$str .= "<td>";
				$str .= $obj->OUT_PARCOD;
				$str .= "</td>";
				$str .= "<td>";
				$str .= $obj->OUT_PARVAL;
				$str .= "</td>";
				$str .="</tr>";
			}
		
		}
			
		$str .= "</tbody></table>";
		$str .= "</div>";
		
		return $str;
			
	}
	
}
?>
