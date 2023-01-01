<?php
namespace OCA\KMAUserManager\Controller\UserController;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;
use OCP\AppFramework\OCS\OCSForbiddenException;
use OCP\AppFramework\OCSController;
use OCA\KMAUserManager\Db\KMA_Canbo as CanboEntity;
use OCA\KMAUserManager\Db\KMA_CanboMapper;

class UserController extends Controller {
	private $userId;
    /** @var KMA_CanboMapper */
	private $mapper;

	public function __construct($AppName, 
                                IRequest $request, 
                                $UserId, 
                                KMA_CanboMapper $mapper){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
        $this->mapper = $mapper;
	}

	/**
	 * @NoAdminRequired
	 */
	public function users(string $path = ''): JSONResponse {
		// return $this->mapper->findAll();
        return null;
	}

}
