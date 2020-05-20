<?php
class Singleton {
    protected static $instance = null;

    public static function GetInstance(){
        if(self::$instance == null)
            $instance = new Singleton();
        return $instance;
    }
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array(array(self::GetInstance(),$name),$arguments);
    }
    protected function sqr($n){
        return $n * $n;
    }
    protected function format($n){
        return $n . " рубля";
    }
    public static function SqrNumber($n){
        $s = self::GetInstance();
        return $s->sqr($n);
    }
    public static function FormatNumber($n){
        $s = self::GetInstance();
        return $s->format($n);
    }
}
?>