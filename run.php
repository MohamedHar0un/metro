<?php
if (isset($argc) && $argc == 2) {
    $main = new main();
    for ($i = 1; $i < $argc; $i++) {
        switch ($argv[$i]) {
            case  'date_filter':
                $main->date_filter();
                break;
            case 'price_filter':
                $main->price_filter();
                break;
            case 'vendor_offers_count':
                $main->vendor_offers_count();
                break;
            case 'help':
                echo 'this command accept one argument which is a function name: [date_filter, price_filter, vendor_offers_count]';
                break;
            default:
                echo 'no such a function exist please provide one of these: [date_filter, price_filter, vendor_offers_count]';
        }
    }
} else {
    echo "no arguments provided\n";
}

class main {

    public function date_filter(){
        return "date_filter function \n";
    }

    public function price_filter(){
        return "date_filter function \n";
    }

    public function vendor_offers_count(){
        return "date_filter function \n";
    }
}
