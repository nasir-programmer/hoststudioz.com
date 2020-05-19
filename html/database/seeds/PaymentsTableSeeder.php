<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'service_id' => 18,
                'request' => '{"ORDER_ID":18,"CUST_ID":1,"MOBILE_NO":"9716942965","EMAIL":"hoststudioz@gmail.com","TXN_AMOUNT":"1000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-16 06:04:17',
                'updated_at' => '2020-05-16 06:04:17',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'service_id' => 19,
                'request' => '{"ORDER_ID":19,"CUST_ID":1,"MOBILE_NO":"9716942965","EMAIL":"hoststudioz@gmail.com","TXN_AMOUNT":"1000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-16 06:04:26',
                'updated_at' => '2020-05-16 06:04:26',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'service_id' => 20,
                'request' => '{"ORDER_ID":20,"CUST_ID":1,"MOBILE_NO":"9716942965","EMAIL":"hoststudioz@gmail.com","TXN_AMOUNT":"1000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-16 06:05:00',
                'updated_at' => '2020-05-16 06:05:00',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'service_id' => 21,
                'request' => '{"ORDER_ID":21,"CUST_ID":1,"MOBILE_NO":"9716942965","EMAIL":"hoststudioz@gmail.com","TXN_AMOUNT":"1000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-16 06:05:29',
                'updated_at' => '2020-05-16 06:05:29',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'service_id' => 22,
                'request' => '{"ORDER_ID":22,"CUST_ID":1,"MOBILE_NO":"9716942965","EMAIL":"hoststudioz@gmail.com","TXN_AMOUNT":"1000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-16 06:07:53',
                'updated_at' => '2020-05-16 06:07:53',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 9,
                'service_id' => 23,
                'request' => '{"ORDER_ID":23,"CUST_ID":9,"MOBILE_NO":"9716942965","EMAIL":"nasir@programmer.net","TXN_AMOUNT":"1000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '{"ORDERID":"23","MID":"CNATYs13241991203128","TXNID":"20200516111212800110168111601531108","TXNAMOUNT":"1000.00","PAYMENTMODE":"NB","CURRENCY":"INR","TXNDATE":"2020-05-16 23:13:27.0","STATUS":"TXN_SUCCESS","RESPCODE":"01","RESPMSG":"Txn Success","GATEWAYNAME":"HDFC","BANKTXNID":"10605378197","BANKNAME":"HDFC","CHECKSUMHASH":"zoesVvsMGHBL7rtCR3fBkxZAjXDtXQQtsor4z8cbyVoXmm2GLWsBhe5VIE3U\\/CvHWCUT7FO4TOHjfNQg8fzwQFJZRP5VQeLqddpPvb8wbj8="}',
                'created_at' => '2020-05-16 17:43:24',
                'updated_at' => '2020-05-16 17:47:31',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 10,
                'service_id' => 24,
                'request' => '{"ORDER_ID":24,"CUST_ID":10,"MOBILE_NO":"9716942965","EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"3000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '{"ORDERID":"24","MID":"CNATYs13241991203128","TXNID":"20200517111212800110168101001524496","TXNAMOUNT":"3000.00","PAYMENTMODE":"NB","CURRENCY":"INR","TXNDATE":"2020-05-17 11:42:04.0","STATUS":"TXN_FAILURE","RESPCODE":"227","RESPMSG":"Your payment has been declined by your bank. Please try again or use a different method to complete the payment.","GATEWAYNAME":"HDFC","BANKTXNID":"13957475183","BANKNAME":"HDFC","CHECKSUMHASH":"ba5JmREfilaDnol3pFmF96+22TDnT9OfUiMYo+RDI4aJFQu8Bz3iMnI5W8UC+R9554fO06e7SEuEmQsgAgqRjn\\/Ro4CTs9g3Tbq\\/VBhUdT0="}',
                'created_at' => '2020-05-17 06:11:59',
                'updated_at' => '2020-05-17 06:12:18',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 11,
                'service_id' => 25,
                'request' => '{"ORDER_ID":25,"CUST_ID":11,"MOBILE_NO":"9716942965","EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '{"ORDERID":"25","MID":"CNATYs13241991203128","TXNID":"20200517111212800110168094301537520","TXNAMOUNT":"1600.00","PAYMENTMODE":"NB","CURRENCY":"INR","TXNDATE":"2020-05-17 11:44:34.0","STATUS":"TXN_FAILURE","RESPCODE":"227","RESPMSG":"Your payment has been declined by your bank. Please try again or use a different method to complete the payment.","GATEWAYNAME":"HDFC","BANKTXNID":"16274189277","BANKNAME":"HDFC","CHECKSUMHASH":"kcyJEPVDFLm\\/uUM0RLbFwytuPZOeAxSPfx5nDusKP0cpyHPUAPgRc0aKue8YBXFkUwLbITc61UbYRE4uHdgYUzQRihUZITYe0G8dcd1ciQc="}',
                'created_at' => '2020-05-17 06:14:30',
                'updated_at' => '2020-05-17 06:14:46',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 12,
                'service_id' => 26,
                'request' => '{"ORDER_ID":26,"CUST_ID":12,"MOBILE_NO":"9716942965","EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"3000","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '{"ORDERID":"26","MID":"CNATYs13241991203128","TXNID":"20200517111212800110168080502594024","TXNAMOUNT":"3000.00","PAYMENTMODE":"NB","CURRENCY":"INR","TXNDATE":"2020-05-17 13:12:14.0","STATUS":"TXN_SUCCESS","RESPCODE":"01","RESPMSG":"Txn Success","GATEWAYNAME":"HDFC","BANKTXNID":"16393242912","BANKNAME":"HDFC","CHECKSUMHASH":"d2G+pGMjZglY1XRarVpmGDDcop\\/y4k8A\\/R5tAP12+E81iILniTuJuB826r73JuubLJZsglbEOCBc+xqjEKNoyLI\\/9l2gNAE9WtvD5KrslS0="}',
                'created_at' => '2020-05-17 07:42:11',
                'updated_at' => '2020-05-17 07:42:32',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 13,
                'service_id' => 27,
                'request' => '{"ORDER_ID":27,"CUST_ID":13,"MOBILE_NO":"9716942965","EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:20:15',
                'updated_at' => '2020-05-17 13:20:15',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 13,
                'service_id' => 28,
                'request' => '{"ORDER_ID":28,"CUST_ID":13,"MOBILE_NO":"9716942965","EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:22:21',
                'updated_at' => '2020-05-17 13:22:21',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 13,
                'service_id' => 29,
                'request' => '{"ORDER_ID":29,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:26:36',
                'updated_at' => '2020-05-17 13:26:36',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 13,
                'service_id' => 30,
                'request' => '{"ORDER_ID":30,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:27:05',
                'updated_at' => '2020-05-17 13:27:05',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 13,
                'service_id' => 31,
                'request' => '{"ORDER_ID":31,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:27:39',
                'updated_at' => '2020-05-17 13:27:39',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 13,
                'service_id' => 32,
                'request' => '{"ORDER_ID":32,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:29:26',
                'updated_at' => '2020-05-17 13:29:26',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 13,
                'service_id' => 33,
                'request' => '{"ORDER_ID":33,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:32:06',
                'updated_at' => '2020-05-17 13:32:06',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 13,
                'service_id' => 34,
                'request' => '{"ORDER_ID":34,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 13:32:33',
                'updated_at' => '2020-05-17 13:32:33',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 13,
                'service_id' => 35,
                'request' => '{"ORDER_ID":35,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:04:06',
                'updated_at' => '2020-05-17 14:04:06',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 13,
                'service_id' => 36,
                'request' => '{"ORDER_ID":36,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:05:32',
                'updated_at' => '2020-05-17 14:05:32',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 13,
                'service_id' => 37,
                'request' => '{"ORDER_ID":37,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:10:59',
                'updated_at' => '2020-05-17 14:10:59',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 13,
                'service_id' => 38,
                'request' => '{"ORDER_ID":38,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:11:29',
                'updated_at' => '2020-05-17 14:11:29',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 13,
                'service_id' => 39,
                'request' => '{"ORDER_ID":39,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:23:06',
                'updated_at' => '2020-05-17 14:23:06',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 13,
                'service_id' => 40,
                'request' => '{"ORDER_ID":40,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:23:20',
                'updated_at' => '2020-05-17 14:23:20',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 13,
                'service_id' => 41,
                'request' => '{"ORDER_ID":41,"CUST_ID":13,"MOBILE_NO":9716942965,"EMAIL":"nasiruddin@thriwe.com","TXN_AMOUNT":"1600","CALLBACK_URL":"http:\\/\\/hoststudioz.com\\/payment\\/status"}',
                'response' => '',
                'created_at' => '2020-05-17 14:23:40',
                'updated_at' => '2020-05-17 14:23:40',
            ),
        ));
        
        
    }
}