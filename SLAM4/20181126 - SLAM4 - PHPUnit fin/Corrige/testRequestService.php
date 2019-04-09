<?php
use PHPUnit\Framework\TestCase;
class RequestServiceTest extends TestCase
{
    private $http;

    public function setUp()
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => 'https://httpbin.org/']);
    }

    public function tearDown() {
        $this->http = null;
    }

public function testGet()
{
    $response = $this->http->request('GET', 'user-agent');

    $this->assertEquals(200, $response->getStatusCode());

    $contentType = $response->getHeaders()["Content-Type"][0];
    $this->assertEquals("application/json", $contentType);

    $userAgent = json_decode($response->getBody())->{"user-agent"};
    $this->assertRegexp('/Guzzle/', $userAgent);
}

public function testImage()
{
    $response = $this->http->request('GET', 'image', [
        'headers' => [
          'Accept'     => 'image/jpeg'
        ]
    ]);

    $this->assertEquals(200, $response->getStatusCode());

    $contentType = $response->getHeaders()["Content-Type"][0];
    $this->assertEquals("image/jpeg", $contentType);

}

public function testPut()
{
    $response = $this->http->request('PUT', 'user-agent', ['http_errors' => false]);
    $this->assertEquals(405, $response->getStatusCode());
}

}

