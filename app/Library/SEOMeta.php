<?php
/*
* @Created by: NDV
* @Author   : nguyenducvinh704@gmail.com
* @Date    : 09/2023
* @Version   : 1.0
*/
namespace App\Library;

class SEOMeta {

    public static $extraMeta;

    public static function init($img = '', $titleSeo = '', $keywordsSeo = '', $descriptionSeo = '', $type = 'website', $url = '')
    {
        $img = $img ? $img : asset('assets/img/logo-icon.jpg');
        $titleSeo = $titleSeo ?: config('app.name');
        $keywordsSeo = $keywordsSeo ?: $titleSeo;
        $descriptionSeo = $descriptionSeo ?: $titleSeo;

        $str = '';
        $str .= '<title>'.$titleSeo.'</title>';
        $str .= '<meta name="robots" content="index,follow">';
        $str .= '<meta http-equiv="REFRESH" content="1800">';
        $str .= '<meta name="revisit-after" content="days">';
        $str .= '<meta http-equiv="content-language" content="'.config('app.locale').'"/>';
        $str .= '<meta property="og:locale" content="'.config('app.faker_locale').'"/>';
        $str .= '<meta name="copyright" content="'.config('app.url').'">';
        $str .= '<meta name="author" content="'.config('app.url').'">';
        $str .= '<meta itemprop="image" content="'.$img.'">';

        $url = request()->url();
        if(isset($url) && $url != ''){
            $str .= '<link rel="canonical" href="'.$url.'">';
        }

        //Google
        $str .= '<meta name="keywords" content="'.$keywordsSeo.'">';
        $str .= '<meta name="description" content="'.$descriptionSeo.'">';

        //Facebook
        $str .= '<meta content="'.$type.'" property="og:type">';
        $str .= '<meta content="'.$titleSeo.'" property="og:title">';
        $str .= '<meta content="'.$descriptionSeo.'" property="og:description">';
        $str .= '<meta content="'.config('app.name').'" property="og:site_name">';
        $str .= '<meta content="'.$img.'" itemprop="thumbnailUrl" property="og:image">';
        $str .= '<meta property="og:image:width" content="1215" />';
        $str .= '<meta property="og:image:height" content="896" />';

        //Twitter
        $str .= '<meta name="twitter:title" content="'.$titleSeo.'">';
        $str .= '<meta name="twitter:description" content="'.$descriptionSeo.'">';
        $str .= '<meta name="twitter:image" content="'.$img.'">';

        if($url != ''){
            $str .= '<link rel="canonical" href="'.$url.'">';
            $str .= '<meta property="og:url" itemprop="url" content="'.$url.'">';
            $str .= '<meta name="twitter:url" content="'.$url.'">';
        }

        static::$extraMeta = $str;
    }
}
