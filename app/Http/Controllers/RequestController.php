<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        group by DT, GF order by DT, GF
        $params = $request->all();
        $table = $params['table'];
        $target_field = $params['target_field'];
        $agg = strtoupper($params['agg']);
        $aggArray = ['COUNT', 'AVG', 'SUM'];
        $id_field = $params['id_field'];
        $id_val = $params['id_val'];
        $where_field = $params['where_field'];
        $where_val = $params['where_val'];
        $dynamics = $params['dynamics'];

        $group = isset($params['group']) ? $params['group'] : '';
        $order = isset($params['order']) ? $params['order'] : '';

        $responseFields = ['surname', 'firstname', 'secondname', 'birthday_date', 'interests', 'countries.name as country', 'cities.name as city'];
        $start = microtime(true);
        // используемая таблица
        $info = DB::table($table);
        //основной фильтр
        if ($id_field != '' && $id_val != '')
            $info->where($id_field, '=', $id_val);
        //сортировка
        if ($order != '')
            $info->orderBy($order);
        //группировка
        if ($group != '')
            $info->groupBy($group);
        // доп. фильтр
        if ($where_field != '' && $where_val != '')
            $info->where($where_field, '=', $where_val);
        // агрегация ( по требованию )
//        if ($target_field != '' && in_array($agg, $aggArray)) {
//            switch ($agg) {
//                case 'COUNT':
//                    $info = $info->count($target_field);
//                    break;
//                case 'AVG':
//                    $info = $info->avg($target_field);
//                    break;
//                case 'SUM':
//                    $info = $info->sum($target_field);
//                    break;
//            }
//        }

        DB::enableQueryLog();
//        if (!in_array($agg, $aggArray))
        $info = $info->get();

        // агрегация ( по требованию )
        if ($target_field != '' && in_array($agg, $aggArray)) {
            $info = $this->AGG($info, $target_field, $agg, $dynamics);
        }
//        dd(DB::getQueryLog(), $info);

        $time = microtime(true) - $start;
        $result = [];
        $result['result'] = $info;
        $result['exec_time'] = $time;
        return $result;
    }

    public function AGG($info, $target_field, $agg, $dynamics)
    {

        $returnData = [];
        $tmpData = [];
        foreach ($info as $row) {
            $dateParse = date_parse_from_format('Y-m-d H:i:s', $row->cheque_datetime);
            $mForKey = strlen($dateParse['month']) == 2 ? $dateParse['month'] : "0" . $dateParse['month'];
            $dForKey = strlen($dateParse['day']) == 2 ? $dateParse['day'] : "0" . $dateParse['day'];
            if ($dynamics == 'd') {
                $key = $dateParse['year'] . $mForKey . $dForKey;
            } elseif ($dynamics == 'm') {
                $key = $dateParse['year'] . $mForKey;
            } elseif ($dynamics == 'y') {
                $key = $dateParse['year'];
            } else
                $key = $dateParse['year'] . $mForKey . $dForKey;

            if (isset($tmpData[$key]['sum'])) $tmpData[$key]['sum'] += $row->$target_field; else $tmpData[$key]['sum'] = $row->$target_field;
            if (isset($tmpData[$key]['cnt'])) $tmpData[$key]['cnt'] += 1; else $tmpData[$key]['cnt'] = 1;
        }

        if ($agg == 'AVG')
            foreach ($tmpData as $key => $value) {
                $returnData[$key] = number_format($value['sum'] / $value['cnt'], 2, '.', ' ');
            }
        elseif ($agg == 'COUNT')
            foreach ($tmpData as $key => $value) {
                $returnData[$key] = $value['cnt'];
            }
        elseif ($agg == 'SUM')
            foreach ($tmpData as $key => $value) {
                $returnData[$key] = $value['sum'];
            }
        return $returnData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
