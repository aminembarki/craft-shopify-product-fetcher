<?php
/**
 * Created by PhpStorm.
 * User: nmaier
 * Date: 22.07.18
 * Time: 14:20
 */

namespace shopify\models;

use craft\base\Model;

class Settings extends Model
{
    public $apiKey;

    public $password;

    public $secret;

    public $hostname;

    public $allProductsEndpoint = 'admin/products.json';

    public $singleProductEndpoint = 'admin/products/';


    public function rules()
    {
        return [
            [['apiKey', 'password', 'secret', 'hostname'], 'required'],
        ];
    }
}