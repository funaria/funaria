<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @property mixed title
 * @package App
 * @method Post published()
 */

class Post extends Model
{
    public function scopePublished($query) {
        /**
         * Post $post
         */
        return $query->where("published", true);
    }

    public function getImgAttribute() {
        return "http://fonds-ecran.widewallpapershd.info/file/23834/728x410/16:9/yeux-bleus-chat_1224139538.jpg";
    }

    public function getTitleLimitedAttribute() {
        return str_limit($this->title, 30);
    }
}
