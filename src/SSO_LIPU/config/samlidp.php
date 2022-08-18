<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SAML idP configuration file
    |--------------------------------------------------------------------------
    |
    | Use this file to configure the service providers you want to use.
    |
     */
    // Outputs data to your laravel.log file for debugging
    'debug' => false,
    // Define the email address field name in the users table
    'email_field' => 'email',
    // The URI to your login page
    'login_uri' => 'login',
    // Log out of the IdP after SLO
    'logout_after_slo' => env('LOGOUT_AFTER_SLO', false),
    // The URI to the saml metadata file, this describes your idP
    'issuer_uri' => 'saml/metadata',
    // Name of the certificate PEM file
    'certname' => 'cert.pem',
    // Name of the certificate key PEM file
    'keyname' => 'saml.pem',
    // Encrypt requests and responses
    'encrypt_assertion' => true,
    // Make sure messages are signed
    'messages_signed' => true,
    // Defind what digital algorithm you want to use
    'digest_algorithm' => \RobRichards\XMLSecLibs\XMLSecurityDSig::SHA1,
    // list of all service providers
    'sp' => [
        // Base64 encoded ACS URL
        'aHR0cDovLzUyLjEzLjc2LjQvcGhwLXNhbWwtc3RhcnQvZGVtbzEvaW5kZXgucGhwP2Fjcw==' => [
            'destination' => 'https://portal.sso.us-west-2.amazonaws.com/saml/assertion/Njg1ODY4MTI0MDIyX2lucy1kZGY1NTdkYWMxYzc2ZjY0',
            'logout' => 'https://portal.sso.us-west-2.amazonaws.com/saml/logout/Njg1ODY4MTI0MDIyX2lucy1kZGY1NTdkYWMxYzc2ZjY0',
            'certificate' => 'MIIDAzCCAeugAwIBAgIBATANBgkqhkiG9w0BAQsFADBFMRYwFAYDVQQDDA1hbWF6 b25hd3MuY29tMQ0wCwYDVQQLDARJREFTMQ8wDQYDVQQKDAZBbWF6b24xCzAJBgNV BAYTAlVTMB4XDTIyMDcwODE5MzYxNFoXDTI3MDcwODE5MzYxNFowRTEWMBQGA1UE AwwNYW1hem9uYXdzLmNvbTENMAsGA1UECwwESURBUzEPMA0GA1UECgwGQW1hem9u MQswCQYDVQQGEwJVUzCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANmN dXOZ5D23XXGX923s7WoGB3J3+BCbwnko6ZfcKFm0IlUJ2y8i8uuLRznLg9khRKfA dcHmMNerDGhQpWgY06xdyCM55mf6/3ohw7Qd+nFowOX2P23KYHBAfIkX7miE9jep jbo9Z+rZnw++K7mLVhYdNpex7+/uZuOqlu/p9V0hT/hfHTd8fLnMRvslJpZRUXu1 acFNhRlJ3gJwi5cfHYNXg3c1dLjYR1kaWs4j6PD0L4LwCQJNmMmupIxVFtMI52NE j1EYRFyDiIqyI3Vkp5WoJpLZKQrtprHZNbq4k6DG0456/ibH2dkkE60ef2ylFEwH bPJ47Tbk0A3k7Eo7TQkCAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAHoB2ox8ucnmi KKSLvk71NRJ8iadLHWL+sLVTvgP4VdNdKRq+NyCY+Cg6pCasN60MYBuXlNTITF01 eDfuPczqETY7AKuic5Vzwvq9Rao2BHm+a8/6YCTBYUzmu4I7LyJu4pBW+aRizKDv ngKOSJ242OxsMwjrcLRpMOAngHwjWWdlAfISQh2Gh/pI+UrL5J8KWXmGhde93Zck 0r6+ugOPl4V20sMs8UlzextKUYFs4rUzAohxGsyCSA3bw7Lu1LQgdeCLysy/a06w V0iXDrihTt/vHFVZzb/+DSvVtQvdwsFw6ELwE18p96P/ipCBD0Y5F1N70JIe5qWx fHFdjnUgOA==',
            'query_params' => false
        ]


       
    ],

    // If you need to redirect after SLO depending on SLO initiator
    // key is beginning of HTTP_REFERER value from SERVER, value is redirect path
    'sp_slo_redirects' => [
         'https://portal.sso.us-west-2.amazonaws.com/saml/assertion/Njg1ODY4MTI0MDIyX2lucy1kZGY1NTdkYWMxYzc2ZjY0',
    ],

    // All of the Laravel SAML IdP event / listener mappings.
    'events' => [
        'CodeGreenCreative\SamlIdp\Events\Assertion' => [],
        'Illuminate\Auth\Events\Logout' => [
            'CodeGreenCreative\SamlIdp\Listeners\SamlLogout',
        ],
        'Illuminate\Auth\Events\Authenticated' => [
            'CodeGreenCreative\SamlIdp\Listeners\SamlAuthenticated',
        ],
        'Illuminate\Auth\Events\Login' => [
            'CodeGreenCreative\SamlIdp\Listeners\SamlLogin',
        ],
    ],

    // List of guards saml idp will catch Authenticated, Login and Logout events
    'guards' => ['web']
];