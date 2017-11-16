<?php

if( !function_exists('haha') )
{
    function haha()
    {
        echo "i'm haha";
    }
}

/**
 *  获取$_SERVER参数
 */
if( !function_exists('server') )
{
    function server( $param = null )
    {
        // 返回全部
        if( $param === null )
            return app('request')->server->all();
        // 返回一个值
        if( !is_array($param) && $param != '' )
            return app('request')->server->get($param);
        // 返回多值
        return array_map(
                function($v)
                {
                    return app('request')->server->get($v);
                },
                $param
        );
    }
}