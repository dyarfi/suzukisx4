<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
	array(
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		'base_url' => '/hauth/endpoint',

		"providers" => array (
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),

			"Yahoo" => array (
				"enabled" => true,
                "keys"    => array ( "key" => "dj0yJmk9am95UE81UXJQcFFSJmQ9WVdrOVJYbGFjV0ZDTTJVbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD01OQ--", "secret" => "ab66f783f93132a8c7349ebd4e8d1e6d993889e5" ),
            ),

			"AOL"  => array (
				"enabled" => true
			),

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "135018674898-re8sd5nigbbuh30p19k8ca3nfv8qbsuk.apps.googleusercontent.com", "secret" => "iNxgUKBfzDtxYxNy0tAXg95U" ),
			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "1580264708905709", "secret" => "d03bb9c9d977bfc3dc8f4470e9dc9e7a" ),
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "dqu99PRCefOCpNPobQEvtBJpS", "secret" => "EXOPAceSDF7GNzaLXunByOClXLu0sGVxxAgxbyesLLSfYLcDLv" )
			),

			// windows live
			"Live" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"MySpace" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"LinkedIn" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "75blw6tuiaom3x", "secret" => "rJMdMWsbpe2ixl9d" )
			),

			"Foursquare" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => (ENVIRONMENT == 'development'),

		"debug_file" => APPPATH.'/logs/hybridauth.log',
	);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */