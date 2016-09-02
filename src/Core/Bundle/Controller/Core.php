<?php

namespace Core\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Core
{

    private static $_instance;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    public static function getInstance()
	{
		if(!self::$_instance)
		{
			self::$_instance = new self();
		}
		return self::$_instance;
	}

    public function response($response)
    {
        return new Response($response);
    }

    /*
    | Response to ajax/json request
    | @parameters: status, exit
    | Developer: JR
    */
    public function json($status, $message, $exit = true, $field = null)
    {
		echo json_encode(['status' => $status, 'message' => $message, 'field' => $field]);
        if ($exit)
          exit();
    }


    /*
    | This method validating fields array.
    | proceeding request if all fields are fields in array.
    | Developer: JR
    */
    public function validateFields(array $datas)
    {
        foreach ($datas as $d => $data)
        {
            if (!$this->request->get($d))
                return $this->json('error', 'Please supply '.$data, true, $d);
            else
            {
                $da = str_replace('-', '_', $d);
                $fields[$da] = $this->request->get($d);
            }
        }

        return (object) $fields;
    }
}
