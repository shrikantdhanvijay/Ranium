<?php

namespace App\Http\Services;

use Illuminate\Http\Request;


class HomeService
{
    /**
     * Get difference  between two date
     *
     * @return days difference
     */
    public function daysCalculate($request)
    {

        $start_date = date_create($request->start_date);
        $end_date = date_create($request->end_date);

        $diff = date_diff($start_date, $end_date);

        $difference = $diff->format("%R%a");

        return $difference;
    }

    /**
     * Get Asteroids NeoWs Data in between two date
     *
     * @return array
     */
    public function getAsteroidsNeoWsData($startDate, $endDate)
    {

        $returnArray = [];
        $dataEnc = "";
        $url = html_entity_decode('http://api.nasa.gov/neo/rest/v1/feed?start_date=' . $startDate . '&end_date=' . $endDate . '&api_key=VLB5nismVZRI5YUn3kgqHk8CtTJuOVhv2Tdf7P4j');
        $dataEnc = file_get_contents($url);

        $data =  json_decode($dataEnc);

        if (!empty($data->element_count)) {

            $fastestSpeed = 0;
            $fastestId = 0;

            $closestDis = 0;
            $closestId = 0;

            $sizeArray = [];
            $dates = [];
            $count = [];

            foreach ($data->near_earth_objects as $key => $value) {

                $dates[] = $key;
                $count[] = sizeof($value);

                foreach ($value as $fvalue) {
                    $sizeArray[] = $fvalue->estimated_diameter->kilometers->estimated_diameter_max;

                    // Fastest asteroids find
                    if ($fvalue->close_approach_data[0]->relative_velocity->kilometers_per_hour > $fastestSpeed) {
                        $fastestSpeed = $fvalue->close_approach_data[0]->relative_velocity->kilometers_per_hour;
                        $fastestId = $fvalue->id;
                    }

                    // For Closest 
                    if ($fvalue->close_approach_data[0]->miss_distance->kilometers < $closestDis || $closestDis == 0) {
                        $closestDis = $fvalue->close_approach_data[0]->miss_distance->kilometers;
                        $closestId = $fvalue->id;
                    }
                }
            }

            $returnArray['fastest'] = [
                'id' => $fastestId,
                'speed' => $fastestSpeed,
            ];

            $returnArray['closest'] = [
                'id' => $closestId,
                'distance' => $closestDis,
            ];

            $size = array_filter($sizeArray);
            $returnArray['avgSize'] = 0;
            if (count($size)) {
                $returnArray['avgSize'] = array_sum($size) / count($size);
            }
            $returnArray['dates'] = json_encode($dates);
            $returnArray['count'] = json_encode($count);
        }

        return $returnArray;
    }
}
