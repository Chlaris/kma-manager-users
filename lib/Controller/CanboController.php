<?php

use OCP\AppFramework\Http\Response;
use OCP\IDBConnection;

class CanboController {
    private $db;

    public function __construct(IDBConnection $db) {
        $this->db = $db;
    }

    public function getCanbo() {
        // Retrieve the data from the database
        // $query = $this->db->prepare('SELECT * FROM oc_kma_canbo');
        // $query->execute();
        // $data = $query->fetchAll();

        // // Create a new response object
        // $response = new Response();

        // // Set the status code and body of the response
        // $response->setStatus(200);
        // $response->setBody(json_encode($data));
        var_dump('Hi');
        die();
		$respone = "Hello"

        // Return the response
        return $response
	}
}
