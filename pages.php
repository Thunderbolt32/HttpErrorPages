<?php
return array (
        
        // STANDARD ERROR CODES
        // =======================================================

        '400' => array (
                'title' => 'Bad Request',
                'message' => 'The server cannot process the request due to something that is perceived to be a client error.' 
        ),
        '401' => array (
                'title' => 'Unauthorized',
                'message' => 'The requested resource requires an authentication.'
        ),

        '403' => array (
                'title' => 'Access Denied',
                'message' => 'The requested resource requires an authentication.' 
        ),
        
        // http 404 not found
        '404' => array (
                'title' => 'Resource not found',
                'message' => 'The requested resource could not be found but may be available again in the future.' 
        ),
        
         // http 405 not found
        '405' => array (
                'title' => 'Method not allowed',
                'message' => 'The server cannot process the request due to an illegal request method.' 
        ),

        // http 406 not found
        '406' => array (
                'title' => 'Not Acceptable',
                'message' => 'The requested type of the resource is not available.' 
        ),

        // http 404 not found
        '407' => array (
                'title' => 'Proxy Authentication Required',
                'message' => 'The requested resource requires an authentication.' 
        ),

        // http 404 not found
        '412' => array (
                'title' => 'Precondition Failed',
                'message' => 'A prerequisite for processing the request could not be fulfilled.' 
        ),

        // http 404 not found
        '414' => array (
                'title' => 'Request-URL Too Long',
                'message' => 'The request address is too long to be processed.' 
        ),

        // http 404 not found
        '415' => array (
                'title' => 'Unsupported Media Type',
                'message' => 'The request was not made in a supported format.' 
        ),
        
        // internal server error
        '500' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "An unexpected condition was encountered.\nOur service team has been dispatched to bring it back online." 
        ),
        
        // unknown http method
        '501' => array (
                'title' => 'Not Implemented',
                'message' => 'The Webserver cannot recognize the request method.'
        ),
        
        // http proxy forward error
        '502' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "We've got some trouble with our backend upstream cluster.\nOur service team has been dispatched to bring it back online."
        ),
        
        // webserver service error
        '503' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "We've got some trouble with our backend upstream cluster.\nOur service team has been dispatched to bring it back online."
        ),
        
        // CUSTOM ERROR CODES
        // =======================================================

        // webserver origin error
        '520' => array(
            'title' => 'Origin Error - Unknown Host',
            'message' => 'The requested hostname is not routed. Use only hostnames to access resources.'
        ),
        
        // webserver down error
        '521' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "We've got some trouble with our backend upstream cluster.\nOur service team has been dispatched to bring it back online."
        ),
        
        // maintenance
        '533' => array(
                'title' => 'Scheduled Maintenance',
                'message' => "This site is currently down for maintenance.\nOur service team is working hard to bring it back online soon."                
        )
);
