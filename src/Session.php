<?php

namespace DaProd;

class Session {

    /**
     * Init New Session
     *
     * @return void
     */
    public static function init()
    {
        session_start();
    }

    /**
     * SET A NEW SESSION
     *
     * @param  mixed $key
     * @param  mixed $val
     *
     * @return void
     */
    public static function set($key,$val)
    {
        $_SESSION[$key] = $val;
    }

    /**
     * GET SESSION
     *
     * @param  mixed $key
     *
     * @return void
     */
    public static function get($key)
    {
        if(isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        return false;
    }

    /**
     * UNSET A SPECIFIC SESSION
     *
     * @param  mixed $key
     *
     * @return void
     */
    public static function delete($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * UNSET ALL SESSION
     *
     * @return void
     */
    public static function kill()
    {
        session_unset();
    }

    /**
     * DESTROY ALL SESSION
     *
     * @return void
     */
    public static function destroy()
    {
        session_destroy();
    }

}