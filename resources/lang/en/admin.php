<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            
        ],
    ],

    'system-property' => [
        'title' => 'System Properties',

        'actions' => [
            'index' => 'System Properties',
            'create' => 'New System Property',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tag' => 'Tag',
            'value' => 'Value',
            'description' => 'Description',
            
        ],
    ],

    'sms-log' => [
        'title' => 'Sms Log',

        'actions' => [
            'index' => 'Sms Log',
            'create' => 'New Sms Log',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'tag' => 'Tag',
            'to' => 'To',
            'message' => 'Message',
            'api_request' => 'Api request',
            'api_response' => 'Api response',
            'status' => 'Status',
            
        ],
    ],

    'system-property' => [
        'title' => 'System Properties',

        'actions' => [
            'index' => 'System Properties',
            'create' => 'New System Property',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tag' => 'Tag',
            'value' => 'Value',
            'description' => 'Description',
            
        ],
    ],

    'activation' => [
        'title' => 'Activations',

        'actions' => [
            'index' => 'Activations',
            'create' => 'New Activation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'token' => 'Token',
            'used' => 'Used',
            
        ],
    ],

    'log' => [
        'title' => 'Log',

        'actions' => [
            'index' => 'Log',
            'create' => 'New Log',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'tag' => 'Tag',
            'value' => 'Value',
            
        ],
    ],

    'api-gateway' => [
        'title' => 'Api Gateway',

        'actions' => [
            'index' => 'Api Gateway',
            'create' => 'New Api Gateway',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'key' => 'Key',
            'path' => 'Path',
            'status' => 'Status',
            
        ],
    ],

    'broadcast-message' => [
        'title' => 'Broadcast Messages',

        'actions' => [
            'index' => 'Broadcast Messages',
            'create' => 'New Broadcast Message',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'mobile_number' => 'Mobile number',
            'message' => 'Message',
            'channel' => 'Channel',
            'type' => 'Type',
            'status' => 'Status',
            
        ],
    ],

    'category-search-index' => [
        'title' => 'Category Search Index',

        'actions' => [
            'index' => 'Category Search Index',
            'create' => 'New Category Search Index',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'last_updated' => 'Last updated',
            'category' => 'Category',
            'keywords' => 'Keywords',
            'meta' => 'Meta',
            
        ],
    ],

    'geo-var' => [
        'title' => 'Geo Vars',

        'actions' => [
            'index' => 'Geo Vars',
            'create' => 'New Geo Var',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'comments' => 'Comments',
            'name' => 'Name',
            'description' => 'Description',
            'lat1' => 'Lat1',
            'lng1' => 'Lng1',
            'lat2' => 'Lat2',
            'lng2' => 'Lng2',
            'tpl_var' => 'Tpl var',
            'tpl_val' => 'Tpl val',
            
        ],
    ],

    'query' => [
        'title' => 'Queries',

        'actions' => [
            'index' => 'Queries',
            'create' => 'New Query',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'latlng' => 'Latlng',
            'from' => 'From',
            'categogry' => 'Categogry',
            'type' => 'Type',
            'status' => 'Status',
            'comments' => 'Comments',
            
        ],
    ],

    'user-segment' => [
        'title' => 'User Segments',

        'actions' => [
            'index' => 'User Segments',
            'create' => 'New User Segment',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'name' => 'Name',
            'description' => 'Description',
            'query' => 'Query',
            'comments' => 'Comments',
            
        ],
    ],

    'query-message' => [
        'title' => 'Query Messages',

        'actions' => [
            'index' => 'Query Messages',
            'create' => 'New Query Message',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'query_id' => 'Query',
            'type' => 'Type',
            'content' => 'Content',
            'meta' => 'Meta',
            
        ],
    ],

    'activation' => [
        'title' => 'Activations',

        'actions' => [
            'index' => 'Activations',
            'create' => 'New Activation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'token' => 'Token',
            'used' => 'Used',
            
        ],
    ],

    'user-messge' => [
        'title' => 'User Messges',

        'actions' => [
            'index' => 'User Messges',
            'create' => 'New User Messge',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'to' => 'To',
            'from' => 'From',
            'message' => 'Message',
            'type' => 'Type',
            'status' => 'Status',
            
        ],
    ],

    'admin' => [
        'title' => 'Admin',

        'actions' => [
            'index' => 'Admin',
            'create' => 'New Admin',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'user_id' => 'User',
            'email' => 'Email',
            'password' => 'Password',
            'discription' => 'Discription',
            'comments' => 'Comments',
            'type' => 'Type',
            'status' => 'Status',
            
        ],
    ],

    'business-account' => [
        'title' => 'Business Account',

        'actions' => [
            'index' => 'Business Account',
            'create' => 'New Business Account',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'business_id' => 'Business',
            'debit' => 'Debit',
            'credit' => 'Credit',
            'balance' => 'Balance',
            'currency' => 'Currency',
            'discription' => 'Discription',
            'type' => 'Type',
            'status' => 'Status',
            
        ],
    ],

    'business-order' => [
        'title' => 'Business Orders',

        'actions' => [
            'index' => 'Business Orders',
            'create' => 'New Business Order',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'datetime' => 'Datetime',
            'buisness_id' => 'Buisness',
            'buisness_account_id' => 'Buisness account',
            'from_username' => 'From username',
            'category' => 'Category',
            'query_id' => 'Query',
            'delivery_id' => 'Delivery',
            'comments' => 'Comments',
            'status' => 'Status',
            
        ],
    ],

    'business-profile' => [
        'title' => 'Business Profile',

        'actions' => [
            'index' => 'Business Profile',
            'create' => 'New Business Profile',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'datetime' => 'Datetime',
            'name' => 'Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'latlng' => 'Latlng',
            'discription' => 'Discription',
            'products_services' => 'Products services',
            'keywords' => 'Keywords',
            'comments' => 'Comments',
            'published_id' => 'Published',
            'currency' => 'Currency',
            'status' => 'Status',
            
        ],
    ],

    'default-grocery-dataset' => [
        'title' => 'Default Grocery Dataset',

        'actions' => [
            'index' => 'Default Grocery Dataset',
            'create' => 'New Default Grocery Dataset',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'product_id' => 'Product',
            'categroy' => 'Categroy',
            'product_name' => 'Product name',
            'weight_packing' => 'Weight packing',
            'description' => 'Description',
            'price' => 'Price',
            'currency' => 'Currency',
            'images' => 'Images',
            'meta' => 'Meta',
            'status' => 'Status',
            
        ],
    ],

    'marker' => [
        'title' => 'Markers',

        'actions' => [
            'index' => 'Markers',
            'create' => 'New Marker',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'place_id' => 'Place',
            'name' => 'Name',
            'tel_country_code' => 'Tel country code',
            'phone' => 'Phone',
            'address' => 'Address',
            'city' => 'City',
            'region' => 'Region',
            'country' => 'Country',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'timezone' => 'Timezone',
            'photo_urls' => 'Photo urls',
            
        ],
    ],

    'medium' => [
        'title' => 'Media',

        'actions' => [
            'index' => 'Media',
            'create' => 'New Medium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'model_type' => 'Model type',
            'model_id' => 'Model',
            'uuid' => 'Uuid',
            'collection_name' => 'Collection name',
            'name' => 'Name',
            'file_name' => 'File name',
            'mime_type' => 'Mime type',
            'disk' => 'Disk',
            'conversions_disk' => 'Conversions disk',
            'size' => 'Size',
            'manipulations' => 'Manipulations',
            'custom_properties' => 'Custom properties',
            'genrated_conversions' => 'Genrated conversions',
            'responsive_images' => 'Responsive images',
            
        ],
    ],

    'message-file' => [
        'title' => 'Message Files',

        'actions' => [
            'index' => 'Message Files',
            'create' => 'New Message File',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'message_id' => 'Message',
            'file' => 'File',
            'meta' => 'Meta',
            'type' => 'Type',
            'status' => 'Status',
            
        ],
    ],

    'default-grocery-dataset' => [
        'title' => 'Default Grocery Dataset',

        'actions' => [
            'index' => 'Default Grocery Dataset',
            'create' => 'New Default Grocery Dataset',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'categroy' => 'Categroy',
            'product_name' => 'Product name',
            'weight_packing' => 'Weight packing',
            'description' => 'Description',
            'price' => 'Price',
            'currency' => 'Currency',
            'images' => 'Images',
            'meta' => 'Meta',
            'status' => 'Status',
            
        ],
    ],

    'default-grocery' => [
        'title' => 'Default Grocery',

        'actions' => [
            'index' => 'Default Grocery',
            'create' => 'New Default Grocery',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'categroy' => 'Categroy',
            'product_name' => 'Product name',
            'weight_packing' => 'Weight packing',
            'description' => 'Description',
            'price' => 'Price',
            'currency' => 'Currency',
            'images' => 'Images',
            'meta' => 'Meta',
            'status' => 'Status',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];