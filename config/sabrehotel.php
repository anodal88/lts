<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/8/18
 * Time: 10:17 PM
 */


/*
   |--------------------------------------------------------------------------
   | sabre web services configurations parameters
   |--------------------------------------------------------------------------
   |
   | This file is for storing the credentials and versions to consume the
   | the sabre web services api
   |
   */

return [
    'log_path' => storage_path("logs/sabre/properties/"),
    'soap' => [
        'dev' => [
            'endpoint' => 'https://sws-crt.cert.havail.sabre.com',
            'ignore_transaction_rq_version' => '2.0.0',
            'ota_hotel_avail_rq_version' => '2.3.0',
            'ota_hotel_res_rq_version' => '2.2.0',
            'ota_cancel_rq_version' => '2.0.2',
            'hotel_property_description_rq_version' => '2.3.0',
            'hotel_rate_description_rq_version' => '2.3.0',
            'end_transactionlls_rq_version' => '2.0.8',
            'passenger_details_rq_version' => '3.3.0',
            'get_reservation_rq_version' => '1.17.0',
            'get_hotel_chain_rq_version' => '1.0.0',
            'get_hotel_list_version' => '1.0.0',
            'create_session_wsdl' => 'http://webservices.sabre.com/wsdl/sabreXML1.0.00/usg/SessionCreateRQ.wsdl',
            'close_session_wsdl' => 'http://webservices.sabre.com/wsdl/sabreXML1.0.00/usg/SessionCloseRQ.wsdl',
            'ignore_transaction_wsdl' => 'http://webservices.sabre.com/wsdl/tpfc/IgnoreTransactionLLS2.0.0RQ.wsdl',
            'logs_enabled' => false,
            'client' => [
                'timeout' => 10,
                'debug' => false
            ]
        ],
        'prod' => [
            'endpoint' => '',
            'ignore_transaction_rq_version' => '2.0.0',
            'ota_hotel_avail_rq_version' => '2.3.0',
            'ota_hotel_res_rq_version' => '2.2.0',
            'ota_cancel_rq_version' => '2.0.2',
            'hotel_property_description_rq_version' => '2.3.0',
            'hotel_rate_description_rq_version' => '2.3.0',
            'end_transactionlls_rq_version' => '2.0.8',
            'passenger_details_rq_version' => '3.3.0',
            'get_reservation_rq_version' => '1.17.0',
            'get_hotel_chain_rq_version' => '1.0.0',
            'get_hotel_list_version' => '1.0.0',
            'domain' => '',
            'organization' => '',
            'username' => '',
            'password' => '',
            'application_id' => '',
            'create_session_wsdl' => 'http://webservices.sabre.com/wsdl/sabreXML1.0.00/usg/SessionCreateRQ.wsdl',
            'close_session_wsdl' => 'http://webservices.sabre.com/wsdl/sabreXML1.0.00/usg/SessionCloseRQ.wsdl',
            'ignore_transaction_wsdl' => 'http://webservices.sabre.com/wsdl/tpfc/IgnoreTransactionLLS2.0.0RQ.wsdl',
            'logs_enabled' => false,
        ]

    ]

];