<?php

namespace Discord;

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