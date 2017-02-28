<?php
require_once ('config/Config.php');
class SubprogWS {
	
	public static $WS_CLASS				= "ZWSREST";
	public static $WS_REPRESENTATION	= "ZWSRESTRQ";
	public static $WS_FACET				= "edit";
	public static $WS_METHOD_HTTP		= "POST";
	
	protected $_curl;
	protected $_response;
	protected $_err;
	
	
	function __construct(){
		
		$this->_curl = curl_init();
		
	}
	
	
	
	
	function getErr(){
		return $this->_err;
	}
	function getResponse(){
		return $this->_response;
	}
	
	public function setConfig ($bodyRequest) {
		
		curl_setopt_array($this->_curl, array(
				CURLOPT_PORT => Config::$PORT,
				CURLOPT_URL => Config::$SERVER.":".Config::$PORT."/sdata/x3/erp/".Config::$ENDPOINT."/".$this::$WS_CLASS."?representation=".$this::$WS_REPRESENTATION.".%24".$this::$WS_FACET, //x3erpv11eapvm:8124/sdata/x3/erp/X3ERPV11EAP_SEED/ZWSREST?representation=ZWSRESTRQ.%24edit",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => $this::$WS_METHOD_HTTP,
				CURLOPT_POSTFIELDS => $bodyRequest,//"{\n  \n  \"WSEXEC\": true,\n  \"WSNAME\": \"WSHELLO\",\n  \"WSTEMPLATE\": false,\n  \"WSTYPE\": 1,\n  \"ZWSRPARLINESIN\": [\n    {\n      \"\$uuid\": \"c11b8a33-9f91-4f9b-91b2-f04971f13273\",\n      \"IN_PARCOD\": \"I_FIRSTNAME\",\n      \"IN_PARVAL\": \"Olivier\"\n     \n    },\n    {\n      \"\$uuid\": \"cc6019c7-094f-472c-9c31-9f3656ec25de\",\n      \"IN_PARCOD\": \"I_LASTNAME\",\n      \"IN_PARVAL\": \"Mantel\"\n     \n    }\n  ]\n  \n}",
				CURLOPT_HTTPHEADER => array(
						"authorization: Basic ". base64_encode(Config::$CODE_USER.":".Config::$PASSWORD),
						"content-type: application/json"
						
				),
		));
		
		
	}
	public function execute(){
		$this->_response	= curl_exec($this->_curl);
		$this->_err 		= curl_error($this->_curl);
		curl_close($this->_curl);
	}
	
}
?>
