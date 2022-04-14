<?php

class FishAPITest extends TestCase
{
    /**
     * Test External API Fish JSON structure on all fish endpoint.
     *
     * @return void
     */
    public function testShouldReturnAllFish()
    {
        $this->get('fish');
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            [
                [
                    'id',
                    "name",
                    "scientific",
                    "environment",
                    "minClimate",
                    "maxClimate",
                    "minDepth",
                    "maxDepth",
                    "avLength",
                    "maxLength",
                    "maxWeight",
                    "maxAge",
                    "description",
                    "biology"
                ]
            ]

        );
    }
}
