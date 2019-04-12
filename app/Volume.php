<?php

namespace App;

require_once 'vendor/autoload.php';

class Volume
{
  public function index()
  {
    $client = new Google_Client();
    $client->setApplicationName("Client_Library_Examples");
    $client->setDeveloperKey("YOUR_APP_KEY");

    $service = new Google_Service_Books($client);
    $optParams = array('filter' => 'free-ebooks');
    $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

    return $results;
  }
}
