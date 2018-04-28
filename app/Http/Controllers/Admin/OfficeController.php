<?php

namespace App\Http\Controllers\Admin;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\IOFactory;

class OfficeController extends Controller
{
    public function upload()
    {
        $members = Member::paginate(20);
        return view('admin.uploadfile', compact('members'));
    }

    public function uploadfile(Request $request)
    {
        $file = $request->file('data');
        $path = $file->storeAs('files', generate_filename($file));
        $realpth = base_path() . '/storage/app/' . $path;

        if($realpth){
            $this->importdata($realpth);
            session()->flash('success', '导入数据成功');
        }

        session()->flash('danger', '导入数据失败，请确定excel表格格式、版本是否合适');
        return back();
    }

    public function importdata($path)
    {
        $speadsheet = IOFactory::load($path);
        $data = $speadsheet->getSheet(0)->toArray();

        $result = [];
        for($i = 1; $i < count($data); $i++) {
            $item = [
                'enumber' => trim($data[$i][1]),
                'name' => trim($data[$i][2]),
                'group' => trim($data[$i][3]),
                'id_number' => trim($data[$i][4]),
                'password' => bcrypt(substr(trim($data[$i][4]), -6)),
                'phone' => intval(trim($data[$i][5]))
            ];

            array_push($result, $item);
        }

        \DB::table('members')->truncate();
        Member::insert($result);

    }

}
