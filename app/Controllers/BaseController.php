<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use App\Libraries\Notifications;
use App\Models\ModelProduct;
use App\Models\ModelOrder;
use App\Models\ModelUser;
use App\Models\ModelAdmin;
use App\Models\ModelStatus;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form', 'date'];
	protected $session = null;
	protected $request = null;
	protected $product;
	protected $order;
	protected $user;
	protected $admin;
	protected $status;
	protected $notif;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		$this->product = new ModelProduct();
		$this->order = new ModelOrder();
		// $this->user = new ModelUser();
		// $this->admin = new ModelAdmin();
		// $this->statusorder = new ModelStatus();
		$this->notif = new Notifications();
		$this->config    = new \Config\Encryption();      // load the configuration for the encryption service
		// $this->encrypter = \Config\Services::encrypter($this->config); // start the encryption service
	}

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}
}
