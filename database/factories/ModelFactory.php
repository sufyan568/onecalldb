<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SystemProperty::class, static function (Faker\Generator $faker) {
    return [
        'tag' => $faker->sentence,
        'value' => $faker->sentence,
        'description' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SmsLog::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'tag' => $faker->sentence,
        'to' => $faker->sentence,
        'message' => $faker->sentence,
        'api_request' => $faker->sentence,
        'api_response' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SystemProperty::class, static function (Faker\Generator $faker) {
    return [
        'tag' => $faker->sentence,
        'value' => $faker->sentence,
        'description' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Activation::class, static function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'token' => $faker->sentence,
        'used' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Log::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'tag' => $faker->sentence,
        'value' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ApiGateway::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'key' => $faker->sentence,
        'path' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BroadcastMessage::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'mobile_number' => $faker->sentence,
        'message' => $faker->sentence,
        'channel' => $faker->sentence,
        'type' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CategorySearchIndex::class, static function (Faker\Generator $faker) {
    return [
        'last_updated' => $faker->sentence,
        'category' => $faker->sentence,
        'keywords' => $faker->sentence,
        'meta' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\GeoVar::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'comments' => $faker->sentence,
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'lat1' => $faker->sentence,
        'lng1' => $faker->sentence,
        'lat2' => $faker->sentence,
        'lng2' => $faker->sentence,
        'tpl_var' => $faker->sentence,
        'tpl_val' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Query::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'latlng' => $faker->sentence,
        'from' => $faker->sentence,
        'categogry' => $faker->sentence,
        'type' => $faker->sentence,
        'status' => $faker->sentence,
        'comments' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\UserSegment::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'query' => $faker->sentence,
        'comments' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\QueryMessage::class, static function (Faker\Generator $faker) {
    return [
        'query_id' => $faker->sentence,
        'type' => $faker->sentence,
        'content' => $faker->sentence,
        'meta' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\UserMessge::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'to' => $faker->sentence,
        'from' => $faker->sentence,
        'message' => $faker->sentence,
        'type' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Admin::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'user_id' => $faker->sentence,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'discription' => $faker->sentence,
        'comments' => $faker->sentence,
        'type' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\AdminActivation::class, static function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'token' => $faker->sentence,
        'used' => $faker->sentence,
        'created_at' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BusinessAccount::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'business_id' => $faker->sentence,
        'debit' => $faker->sentence,
        'credit' => $faker->sentence,
        'balance' => $faker->sentence,
        'currency' => $faker->sentence,
        'discription' => $faker->sentence,
        'type' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BusinessOrder::class, static function (Faker\Generator $faker) {
    return [
        'datetime' => $faker->sentence,
        'buisness_id' => $faker->sentence,
        'buisness_account_id' => $faker->sentence,
        'from_username' => $faker->sentence,
        'category' => $faker->sentence,
        'query_id' => $faker->sentence,
        'delivery_id' => $faker->sentence,
        'comments' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\BusinessProfile::class, static function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->sentence,
        'datetime' => $faker->sentence,
        'name' => $faker->firstName,
        'phone' => $faker->sentence,
        'address' => $faker->sentence,
        'latlng' => $faker->sentence,
        'discription' => $faker->sentence,
        'products_services' => $faker->sentence,
        'keywords' => $faker->sentence,
        'comments' => $faker->sentence,
        'published_id' => $faker->sentence,
        'currency' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\DefaultGroceryDataset::class, static function (Faker\Generator $faker) {
    return [
        'product_id' => $faker->sentence,
        'categroy' => $faker->sentence,
        'product_name' => $faker->sentence,
        'weight_packing' => $faker->sentence,
        'description' => $faker->sentence,
        'price' => $faker->sentence,
        'currency' => $faker->sentence,
        'images' => $faker->sentence,
        'meta' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Marker::class, static function (Faker\Generator $faker) {
    return [
        'place_id' => $faker->sentence,
        'name' => $faker->firstName,
        'tel_country_code' => $faker->sentence,
        'phone' => $faker->sentence,
        'address' => $faker->sentence,
        'city' => $faker->sentence,
        'region' => $faker->sentence,
        'country' => $faker->sentence,
        'lat' => $faker->sentence,
        'lng' => $faker->sentence,
        'timezone' => $faker->sentence,
        'photo_urls' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Medium::class, static function (Faker\Generator $faker) {
    return [
        'model_type' => $faker->sentence,
        'model_id' => $faker->sentence,
        'uuid' => $faker->sentence,
        'collection_name' => $faker->sentence,
        'name' => $faker->firstName,
        'file_name' => $faker->sentence,
        'mime_type' => $faker->sentence,
        'disk' => $faker->sentence,
        'conversions_disk' => $faker->sentence,
        'size' => $faker->sentence,
        'manipulations' => $faker->sentence,
        'custom_properties' => $faker->sentence,
        'genrated_conversions' => $faker->sentence,
        'responsive_images' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\MessageFile::class, static function (Faker\Generator $faker) {
    return [
        'message_id' => $faker->sentence,
        'file' => $faker->sentence,
        'meta' => $faker->sentence,
        'type' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\DefaultGroceryDataset::class, static function (Faker\Generator $faker) {
    return [
        'categroy' => $faker->sentence,
        'product_name' => $faker->sentence,
        'weight_packing' => $faker->sentence,
        'description' => $faker->sentence,
        'price' => $faker->sentence,
        'currency' => $faker->sentence,
        'images' => $faker->sentence,
        'meta' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\DefaultGrocery::class, static function (Faker\Generator $faker) {
    return [
        'categroy' => $faker->sentence,
        'product_name' => $faker->sentence,
        'weight_packing' => $faker->sentence,
        'description' => $faker->sentence,
        'price' => $faker->sentence,
        'currency' => $faker->sentence,
        'images' => $faker->sentence,
        'meta' => $faker->sentence,
        'status' => $faker->sentence,
        
        
    ];
});
