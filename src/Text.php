<?php


namespace langdonglei;


class Text
{
    public static function show(string $str = '', string $pad_str = '', int $pad_len = 20)
    {
        if (PHP_SAPI == 'cli') {
            if ($str == '') {
                echo PHP_EOL;
            } else {
                if ($pad_str) {
                    echo str_pad($str, $pad_len, $pad_str) . PHP_EOL;
                } else {
                    echo $str . PHP_EOL;
                }
            }
        } else {
            if ($str == '') {
                echo '<pre></pre>';
            } else {
                if ($pad_str) {
                    echo '<div>' . str_pad($str, $pad_len, $pad_str) . '</div>';
                } else {
                    echo "<div>$str</div>>";
                }
            }
        }
    }
}