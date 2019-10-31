<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Arr;
use File;
class Aboutus extends Model
{
    protected $table = 'aboutus';
    protected $guarded = [''];
    public $timestamps = false;

    protected $status = [
        1 => [
            'name' => 'Hiện',
            'class'=> 'label-danger'
        ],
        0 =>[
            'name' =>'Ẩn',
            'class'=>'label-default'
        ]
    ];

    public function getStatus(){
        return Arr::get($this->status,$this->active, '[N\A]');
    }

    public function aboutusList(){
        $abouts = Aboutus::orderBy('id','DESC')->get();
        return $abouts;
    }

    public function insertOrUpdate($request, $id=''){
        $abouts = new Aboutus();
        if($id) $abouts = Aboutus::find($id);

        $abouts->preview_text = $request->preview_text;
        $abouts->detail_text =  $request->detail_text;
        $abouts->active = $request->active;
        if ($request->hasFile('picture')){
            $file =  upload_image('picture');
            if(isset($file['name'])){
                $abouts->picture = $file['name'];
                if(File::exists($file['path_img'])){
                    File::delete($file['path_img']);
                }
            }
        }
        $abouts->save();
        return $abouts;
    }

    public function getId($id){
        $abouts = Aboutus::find($id);
        return $abouts;
    }

    public function actionId($action, $id){
        if($action)
        {
            $abouts = Aboutus::find($id);
            switch ($action){
                case 'delete':
                    $abouts->delete();
                    $msgAbout = 'Xóa giới thiệu thành công';
                    break;
                case 'active':
                    $abouts->active = $abouts->active ? 0 : 1;
                    $msgAbout = 'Cập nhật giới thiệu thành công';
                    $abouts->save();
                    break;
            }
        }
        return  $msgAbout;
    }
}
