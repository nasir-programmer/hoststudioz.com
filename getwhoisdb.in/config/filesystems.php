<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */
    'links' => [
        public_path('storage/app') => storage_path('app/public'),
        public_path('images') => storage_path('app/images'),
    ],

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],
        'google' => [
            'driver' => 'google',
            'clientId' => env('GOOGLE_DRIVE_CLIENT_ID', 'myclientID'),
            'clientSecret' => env('GOOGLE_DRIVE_CLIENT_SECRET' , 'AIzaSyAx04LKrBCuSfd37H4xm5Lu-4jarB6j08Y'),
            'refreshToken' => env('GOOGLE_DRIVE_REFRESH_TOKEN', 'token'),
            'folderId' => env('GOOGLE_DRIVE_FOLDER_ID', '/'),
            // 'teamDriveId' => env('GOOGLE_DRIVE_TEAM_DRIVE_ID'),
        ],
        // 'gcs' => [
	    //     'driver'          => 'gcs',
	    //     'project_id'      => env( 'GOOGLE_CLOUD_PROJECT_ID', 'your-project-id' ),
	    //     'key_file'        => env( 'GOOGLE_CLOUD_KEY_FILE', null ), // optional: /path/to/service-account.json
	    //     'bucket'          => env( 'GOOGLE_CLOUD_STORAGE_BUCKET', 'your-bucket' ),
	    //     'path_prefix'     => env( 'GOOGLE_CLOUD_STORAGE_PATH_PREFIX', null ), // optional: /default/path/to/apply/in/bucket
	    //     'storage_api_uri' => env( 'GOOGLE_CLOUD_STORAGE_API_URI', null ), // see: Public URLs below
        // ],
        'ftp' => [
            'driver'   => 'ftp',
            'host' => env('FTP_HOST'),
            'username' => env('FTP_USERNAME'),
            'password' => env('FTP_PASSWORD'),
            /** optional config settings */
            
            'port' => 21,
            'root' => '/public_html/crm.aztechtcs.com',
            'utf8' => true,
            'ssl' => false,
            'timeout' => 90,		// connect timeout
            'sslVerifyPeer' => 0, // using 0 is insecure, use it only if you know what you're doing
            'sslVerifyHost' => 0, // using 0 is insecure, use it only if you know what you're doing
            
            /** proxy settings */
            // 'proxyHost' => 'proxy-server.example.com',
            // 'proxyPort' => 80,
            // 'proxyUsername' => 'proxyuser',
            // 'proxyPassword' => 'proxypassword',
        ],

        'dropbox' => [
            'driver' => 'dropbox',
            'token'  => env('dsdOMv_jGLAAAAAAAAAAPKvbVrW1W5IS2M2pzx0TLtoKE2s-at3vLrCARqxURFeA'),
        ],

    ],

];
