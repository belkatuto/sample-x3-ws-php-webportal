# PHP web portal connected to X3 via SOAP  & REST web services

## Objectives

From a single portal php how can we use :
* X3 SOAP web service sales orders for reading and writing into Sage X3
* X3 SOAP web service products for reading into Sage X3
* X3 REST web service Hello


## Documentation

* [Howto pdf](https://github.com/Sage-ERP-X3/sample-x3-ws-php-webportal/blob/master/doc/pdf/Create_a_WebPortal_SageX3_WebServices.pdf).
	
* [Howto md](https://github.com/Sage-ERP-X3/sample-x3-ws-php-webportal/blob/master/doc/md/Create_a_WebPortal_SageX3_WebServices.md).

## Features

* Only php source with EDI Eclipse php Neon

* No X3 sources

* The name of X3 webservice SOAP used are YOSOH (object SOH) and YOITM (object ITM)

* The name of X3 webservice REST used is the representation YWSRESTRQ

## Remarks

* X3 Version minimum  X3 PU9

* The new Webservice server is Syracuse

* The authentication webservice had changed since X3 PU9

* We must use the basic authentication http.
