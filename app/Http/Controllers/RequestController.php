<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Cache;
use Mockery\CountValidator\Exception;
use App\Models\UserReward;
use App\Models\User;
use App\Models\Reward;
use App\Models\Cheque;
use App\Models\Card;

class RequestController extends Controller
{

    public function dbQuery($table)
    {
//        dd($table);
        set_time_limit(60);
        switch ($table) {
            case 'user_reward':
                $start = microtime(true);
                if (($handle = fopen(public_path() . '/csv/user_reward.csv', 'r')) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                        $tmp = new UserReward();

                        $datetime = date_parse_from_format('d.m.y H:i:s', $data[0]);

                        $tmp->datetime = $datetime['year'] . '-' . $datetime['month'] . '-' . $datetime['day'] . ' ' . $datetime['hour'] . ':' . $datetime['minute'] . ':' . $datetime['second'];
                        $tmp->first_owner_id = $data[1];
                        $tmp->id = $data[2];
                        $tmp->percent = $data[3];
                        $tmp->rating = $data[4];
                        $tmp->reward_id = $data[5];
                        $tmp->reward_supplier_id = $data[6];
                        $tmp->staff_id = $data[7];
                        $tmp->state = $data[8];
                        $tmp->tradepoint_id = $data[9];
                        $tmp->user_id = $data[10];

                        $tmp->save();
                    }
                    fclose($handle);
                }
                $time_exec = microtime(true) - $start;

                return ['line' => UserReward::all(), 'exec' => $time_exec];
                break;
            case 'user':
                $start = microtime(true);
                if (($handle = fopen(public_path() . '/csv/user.csv', 'r')) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                        $tmp = new User();

                        $datetime = date_parse_from_format('d.m.Y', $data[0]);
                        $tmp->birthday_date = $datetime['year'] . '-' . $datetime['month'] . '-' . $datetime['day'];
                        $tmp->cashback_total = $data[1];
                        $tmp->cheque_avg = $data[2];
                        $tmp->city_id = $data[3];
                        $tmp->country_id = $data[4];
                        $tmp->district = $data[5];
                        $tmp->email = $data[6];
                        $tmp->favorites = $data[7];
                        $tmp->firstname = $data[8];
                        $tmp->id = $data[9];
                        $tmp->imei = $data[10];
                        $tmp->imsi = $data[11];
                        $tmp->interests = $data[12];
                        //
                        $datetime1 = date_parse_from_format('d.m.y H:i:s', $data[13]);
                        $tmp->lastseen_datetime = $datetime1['year'] . '-' . $datetime1['month'] . '-' . $datetime1['day'] . ' ' . $datetime1['hour'] . ':' . $datetime1['minute'] . ':' . $datetime1['second'];

                        $tmp->login = $data[14];
                        $tmp->money_spent_thresold = $data[15];
                        $tmp->money_spent_total = $data[16];
                        $tmp->phone = $data[17];
                        $tmp->pwd_md5 = $data[18];
                        //
                        $datetime2 = date_parse_from_format('d.m.y H:i:s', $data[19]);
                        $tmp->registered_datetime = $datetime2['year'] . '-' . $datetime2['month'] . '-' . $datetime2['day'] . ' ' . $datetime2['hour'] . ':' . $datetime2['minute'] . ':' . $datetime2['second'];;
                        $tmp->secondname = $data[20];
                        $tmp->surname = $data[21];
                        $tmp->timezone_current = $data[22];

                        $tmp->save();
                    }
                    fclose($handle);
                }
                $time_exec = microtime(true) - $start;

                return ['line' => User::all(), 'exec' => $time_exec];
                break;

            case 'reward':
                $start = microtime(true);
                if (($handle = fopen(public_path() . '/csv/reward.csv', 'r')) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                        $tmp = new Reward();

                        $tmp->code_1c = $data[0];
                        $tmp->count = $data[1];

                        $datetime = date_parse_from_format('d.m.Y H:i:s', $data[2]);
                        $tmp->date_from = $datetime['year'] . '-' . $datetime['month'] . '-' . $datetime['day'] . ' ' . $datetime['hour'] . ':' . $datetime['minute'] . ':' . $datetime['second'];;
                        //
                        $datetime2 = date_parse_from_format('d.m.Y H:i:s', $data[3]);
                        $tmp->date_to = $datetime2['year'] . '-' . $datetime2['month'] . '-' . $datetime2['day'] . ' ' . $datetime2['hour'] . ':' . $datetime2['minute'] . ':' . $datetime2['second'];;;
                        $tmp->id = $data[4];
                        $tmp->photo_url = $data[5];
                        $tmp->possible_tradepoints = $data[6];
                        $tmp->price = $data[7];
                        $tmp->rating = $data[8];
                        $tmp->reward_supplier_id = $data[9];
                        $tmp->text = $data[10];

                        $tmp->save();
                    }
                    fclose($handle);
                }
                $time_exec = microtime(true) - $start;

                return ['line' => Reward::all(), 'exec' => $time_exec];
                break;

            case 'cheque':
                $start = microtime(true);
                if (($handle = fopen(public_path() . '/csv/cheque.csv', 'r')) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                        $tmp = new Cheque();

                        $tmp->card_id = $data[0];
                        $tmp->cashback = $data[1];
                        $datetime = date_parse_from_format('d.m.y H:i:s', $data[2]);
                        $tmp->cheque_datetime = $datetime['year'] . '-' . $datetime['month'] . '-' . $datetime['day'] . ' ' . $datetime['hour'] . ':' . $datetime['minute'] . ':' . $datetime['second'];
                        $tmp->company_id = $data[3];
                        $datetime1 = date_parse_from_format('d.m.y H:i:s', date('d.m.y H:i:s'));
                        $tmp->confirm_datetime = $datetime1['year'] . '-' . $datetime1['month'] . '-' . $datetime1['day'] . ' ' . $datetime1['hour'] . ':' . $datetime1['minute'] . ':' . $datetime1['second'];
                        $tmp->id = $data[5];
                        $datetime2 = date_parse_from_format('d.m.y H:i:s', date('d.m.y H:i:s'));
                        $tmp->scan_datetime = $datetime2['year'] . '-' . $datetime2['month'] . '-' . $datetime2['day'] . ' ' . $datetime2['hour'] . ':' . $datetime2['minute'] . ':' . $datetime2['second'];
                        $tmp->scanned_qr = $data[7];
                        $tmp->sum_clear = $data[8];
                        $tmp->sum_powerup = $data[9];
                        $tmp->sum_total = $data[10];
                        $tmp->tradepoint_id = $data[11];
                        $tmp->user_id = $data[12];

                        $tmp->save();
                    }
                    fclose($handle);
                }
                $time_exec = microtime(true) - $start;

                return ['line' => Cheque::all(), 'exec' => $time_exec];
                break;

            case 'card':
                $start = microtime(true);
                if (($handle = fopen(public_path() . '/csv/card.csv', 'r')) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                        $tmp = new Card();


                        $tmp->balance_current = $data[0];
                        $tmp->balance_debt = $data[1];
                        $tmp->cheque_avg = $data[2];
                        $tmp->company_id = $data[3];
                        $tmp->id = $data[4];
                        $datetime = date_parse_from_format('d.m.y H:i:s', $data[5]);
                        $tmp->last_usage_datetime = $datetime['year'] . '-' . $datetime['month'] . '-' . $datetime['day'] . ' ' . $datetime['hour'] . ':' . $datetime['minute'] . ':' . $datetime['second'];
                        $tmp->level = $data[6];
                        $tmp->money_spent_thresold = $data[7];
                        $tmp->money_spent_total = $data[8];
                        $tmp->multiplicator = $data[9];
                        $datetime1 = date_parse_from_format('d.m.y H:i:s',$data[10]);
                        $tmp->start_datetime = $datetime1['year'].'-'.$datetime1['month'].'-'.$datetime1['day'].' '.$datetime1['hour'].':'.$datetime1['minute'].':'.$datetime1['second'];
                        $tmp->user_id = $data[11];
//                        $datetime2 = date_parse_from_format('d.m.y H:i:s',date('d.m.y H:i:s'));
//                        $tmp->scan_datetime = $datetime2['year'].'-'.$datetime2['month'].'-'.$datetime2['day'].' '.$datetime2['hour'].':'.$datetime2['minute'].':'.$datetime2['second'];

                        $tmp->save();
                    }
                    fclose($handle);
                }
                $time_exec = microtime(true) - $start;

                return ['line' => Card::all(), 'exec' => $time_exec];
                break;

        }

    }

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

    public function upload(Request $request)
    {
        $all = $request->all();
//        $target_path = storage_path('uploads/');
        $target_path = public_path('uploads/');
        $target_path = $target_path . rand(1, 10000) . "_" . basename($_FILES['file']['name']);
        $ret = [];
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            $ret['result'] = "Upload and move success! " . $target_path;
        } else {
            $ret['result'] = $target_path;
        }
        return $ret;
//        dd($all);
    }

    public function showUpload()
    {
        Cache::flush();
//        $dir = storage_path('uploads/');
        $dir = public_path('uploads/');
        $scan = scandir($dir);
//        dd($scan, $dir);
        $images = [];
        $key = 0;
        foreach ($scan as $file) {
            if ($file == '.' || $file == '..') continue;

            $r['file'] = '/uploads/' . $file;
            array_push($images, (object)$r);

            $key++;
        }
//        $images = (object)$images;
//        dd($images);
//        return view('images')->with('img', 'Victoria');;
        try {
            return view('welcome', ['images' => $images]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

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
