<?php

namespace App\Model;

use Jenssegers\Mongodb\Model;


/**
 * Class Messages representant les Notifications
 * @package App\Model
 */
class Message extends Model{


    /**
     *CONNECTION
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * Nom de la COLLECTION
     * @var string
     */
    protected $collection = 'messages';
}