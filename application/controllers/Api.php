<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }


    public function indikator_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $id = $this->get( 'id' );

        if ( array_key_exists( $id, $users ) )
        {
            $this->response( $users[$id], 200 );
        }
        else
        {
            $this->response( [
                'status' => false,
                'code'   =>  400,
                'message' => 'No such user found'
            ], 404 );
        }
    }
}