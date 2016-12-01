<?php
/**
 * ownCloud - oauth2
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jonathan Neugebauer, Lukas Biermann
 * @copyright Jonathan Neugebauer, Lukas Biermann 2016
 */

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\OAuth2\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'routes' => [
        # Routes for the authorize view
        ['name' => 'page#authorize', 'url' => '/authorize', 'verb' => 'GET'],
        ['name' => 'page#generate_authorization_code', 'url' => '/authorize', 'verb' => 'POST'],
        # API endpoint for requesting a token
        ['name' => 'o_auth_api#generate_token', 'url' => '/api/v1/token', 'verb' => 'POST'],
        ['name' => 'o_auth_api#preflighted_cors', 'url' => '/api/v1/{path}', 'verb' => 'OPTIONS', 'requirements' => ['path' => '.+']],
        # Route for saving settings
        ['name' => 'settings#addClient', 'url' => '/clients', 'verb' => 'POST'],
        ['name' => 'settings#deleteClient', 'url' => '/clients/{id}/delete', 'verb' => 'POST']
    ]
];
