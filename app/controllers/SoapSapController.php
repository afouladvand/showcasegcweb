<?php


class SoapSapController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

     public function callWebserviceRead($parameters){
           ini_set('default_socket_timeout', '30');

           $sap_host   = '192.168.10.21'; //gbserv10erp
           $sap_port   = '8000';
	   $sap_client = '200';
           $sap_user   = 'RFC_TEST';
           $sap_pass   = 'rfcrfc123';
           $function   = 'Z_GOBIZ_HAU_WSR_PARTNER';
           
		   $wsdl = 'http://' . $sap_host . ':' . $sap_port . '/sap/bc/soap/wsdl?services=' . $function;       

           try{
            $time_start = microtime(true);

            $SoapClient = new SoapClient( $wsdl, array(
               'login'    => $sap_user,
               'password' => $sap_pass,
               'location' => 'http://' . $sap_host . ':' . $sap_port  .'/sap/bc/soap/rfc?sap-client=' . $sap_client,
               'uri'      => $wsdl
                                                 )
                          );
                          
            $result = array();         
            $result = $SoapClient->$function( $parameters );         
         
            $time_request = (microtime(true)-$time_start);
           } catch (SoapFault $soapFault) {
            	  //$log = fopen(DIR_SOAPLOG . LOG_SOAPLOG,'a');
                  //fwrite($log, $soapFault);
                  //fclose($log);
               
           }
         
           //return $result;
           //
       }     	
     

}