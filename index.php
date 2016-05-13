<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();

    
        
            

$app->GET('/media', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing mediaGet as a GET method ?');
            });

            
        
    
        
            

$app->GET('/repository/{repositoryid}', function(Application $app, Request $request) {
            $status = $request->get('status');    
            
            return new Response('How about implementing findPetsByStatus as a GET method ?');
            });

            

$app->GET('/repository', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing repositoryGet as a GET method ?');
            });

            
        
    
        
            

$app->GET('/source', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing sourceGet as a GET method ?');
            });

            
        
    

$app->run();
