<?php

namespace App\Model;

use Jenssegers\Mongodb\Model;

/**
 * Class Actors represente la table actors
 * @package App\Model
 */
class Notifications extends Model
{


    /**
     *CONNECTION
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * Nom de la COLLECTION
     * @var string
     */
    protected $collection = 'notifications';

}