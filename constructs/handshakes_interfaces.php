<?php


interface Newsletter 

{
    public function subscribe($email);
}


class CampaignMonitor implements Newsletter

{

    public function subscribe($email)

    {
        die('subscribing with campaign monitor');
    }
}

class Drip implements Newsletter

{
    public function subscribe($email)

    {
        die('subscribing with drip');
    }   
}


class NewsletterSubscriptionsController

{
    public function store(Newsletter $newsletter)

    {
        $email = 'joe@example.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new Drip());