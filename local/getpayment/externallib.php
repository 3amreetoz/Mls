<?php

use dml_exception;
use stdClass;
use local_getpayment\manager;
use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_single_structure;
use core_external\external_value;


require_once(__DIR__ . '/../../config.php'); // Adjust the path as needed

class local_getpayment_external extends external_api
{

    public static function save_data_parameters()
    {
        return new external_function_parameters(
            array(
                // 'username' => new external_value(PARAM_TEXT, 'User Name'),
                'enrolid' => new external_value(PARAM_TEXT, 'enrol id'),
                'userid' => new external_value(PARAM_TEXT, 'user id'),
            )
        );
    }
    public static function save_data( $enrolid,  $userid)
    {
        $params = self::validate_parameters(
            self::save_data_parameters(),
            array('enrolid' => $enrolid, 'userid' => $userid)
        );

        // Create the notification using the manager class
        $manager = new manager();
        $result = $manager->create_payment(
            // $params['username'],
            $params['enrolid'],
            $params['userid']
        );
        if ($result) {

            return array(
                'success' => true,
                'urlredirect' => 'You are now Enrolled in the Curse'
            );
        } else {
            return array(
                'success' => false,
                'urlredirect' => 'Failed to create payment form'
            );
        }
    }

    public static function save_data_returns()
    {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Whether the form processing was successful'),
            'urlredirect' => new external_value(PARAM_TEXT, 'Response message'),


        ]);
    }
}
