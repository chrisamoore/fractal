<?php

/*
 * This file is part of the League\Fractal package.
 *
 * (c) Phil Sturgeon <email@philsturgeon.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\Fractal\Serializer;

class DataArraySerializer extends ArraySerializer
{
    /**
     * Serialize a collection
     *
     * @param  array  $data
     * @return array
     **/
    public function collection($resourceKey, array $data)
    {
        return array('data' => $data);
    }

    /**
     * Serialize an item
     *
     * @param  array  $data
     * @return array
     **/
    public function item($resourceKey, array $data)
    {
        return array('data' => $data);
    }
}
