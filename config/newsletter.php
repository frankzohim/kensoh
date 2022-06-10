<?php

return [

    /*
     * The driver to use to interact with MailChimp API.
     * You may use "log" or "null" to prevent calling the
     * API directly from your environment.
     */
    'driver' => env('MAILCHIMP_DRIVER', 'api'),

    /*
     * The API key of a MailChimp account. You can find yours at
     * https://us10.admin.mailchimp.com/account/api-key-popup/.
     */
    'apiKey' => env('MAILCHIMP_APIKEY'),

    /*
     * The listName to use when no listName has been specified in a method.
     */
    'defaultListName' => 'Kensoh',

    /*
     * Here you can define properties of the lists.
     */
    'lists' => [

        'Kensoh' => [

            /*
             * A MailChimp list id. Check the MailChimp docs if you don't know
             * how to get this value:
             * http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id.
             */
            'id' => 'e95e38b4fd',

            /*
             * The GDPR marketing permissions of this audience.
             * You can get a list of your permissions with this command: "php artisan newsletter:permissions"
             */
            'marketing_permissions' => [
                // 'email' => '2a4819ebc7',
                // 'customized_online_advertising' => '4256fc7dc5',
            ],

        ],
    ],

    /*
     * If you're having trouble with https connections, set this to false.
     */
    'ssl' => true,

];
