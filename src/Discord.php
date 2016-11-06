<?php

namespace Discord;
use Discord\Exceptions\NoContentException;
use Discord\Exceptions\NoURLException;

/**
 * Class Discord
 * @package Discord
 */
class Discord
{
    /**
     * Sends the supplied content to the webhook URL
     * @param string $content
     * @param string $url
     */
    public static function send($content, $url)
    {

        if(empty($content)) {
            throw new NoContentException('No content provided');
        }

        if(empty($url)) {
            throw new NoURLException('No URL provided');
        }

        $data = array("content" => $content);
        $data_string = json_encode($data);

        $opts = array(
            'http' => array(
                'method' => "POST",
                'header' => "Content-Type: application/json\r\n",
                'content' => $data_string
            )
        );

        $context = stream_context_create($opts);

        return file_get_contents($url, false, $context);
    }
}