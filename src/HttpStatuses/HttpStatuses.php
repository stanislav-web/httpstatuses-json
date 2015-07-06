<?php

namespace HttpStatuses;

/**
 * HttpStatuses class. HttpStatuses parser tool
 *
 * @package   HttpStatuses
 * @since     PHP >=5.2
 * @version   1.0
 * @author    Stanislav WEB | Lugansk <stanisov@gmail.com>
 * @copyright Samuel Ryan (citricsquid)
 */
class HttpStatuses
{
    /**
     * Get status full description from code
     *
     * @param int $code
     *
     * @return array
     */
    public function getStatus($code) {

        $filename = getcwd().'../../data/'.$code[0].'.json';

        if(file_exists($filename)) {
            return json_decode(file_get_contents($filename), true)[$code];
        }

        return [];
    }
}