<?php
/*
 * @Author: zhangtao 
 * @Date: 2017-12-04 15:55:48 
 * @Last Modified by: zhangtao
 * @Last Modified time: 2017-12-11 17:12:21
 */
namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Config;
use zgldh\QiniuStorage;
use Illuminate\Http\Request;

class Posts extends Model
{
    const STATUS_PUBLISH = 'PUBLISH'; // 已发布
    const STATUS_DRAFT   = 'DRAFT'; // 草稿
    protected $primaryKey = 'post_id';
    protected $fillable = ['title','cat_id','excerpt','author','status','is_allow','is_page','markdown','html','image','slug'];
    /**
     * get article list info
     *
     * @return void
     */
    static public function getPublishList()
    {
        return self::select('post_id','title','author','cat_id','read_num','updated_at','status')
            ->where(['status' => self::STATUS_PUBLISH])
            ->orderBy('post_id', 'desc')
            ->paginate(Config::get('constants.page_size'));
    }
    /**
     * 获取文章草稿列表
     *
     * @return void
     */
    static public function getDraftList()
    {
        return self::select('post_id','title','author','cat_id','read_num','updated_at','status')
            ->where(['status' => self::STATUS_DRAFT])
            ->orderBy('post_id', 'desc')
            ->paginate(Config::get('constants.page_size'));
    }
    /**
     * 分类的关联
     *
     * @return void
     */
    public function cat()
    {
        return $this->belongsTo('App\Categories', 'cat_id', 'cat_id');
    }

   

}