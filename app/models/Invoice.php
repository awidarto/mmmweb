<?php
use Jenssegers\Mongodb\Model as Eloquent;

class Invoice extends Eloquent {

    protected $collection = 'invoices';

}