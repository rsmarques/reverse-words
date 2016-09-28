<?php

class StringHandler
{
    protected $str;

    public function __construct($str = '')
    {
        $this->str = (string) $str;
    }

    public static function create($str = '')
    {
        return new static($str);
    }

    public function reverseWords()
    {
        if (strlen($this->str) === 0) {
            return $this->str;
        }

        $str            = $this->str;

        $pEnd           = false;
        $lastChar       = substr($str, -1);

        // checking if sentence ends with punctuation
        if (strpos(".!?", $lastChar) !== false) {
            $str        = substr($str, 0, -1);
            $pEnd       = true;
        }

        $strArray       = explode(' ', $str);
        $strReversed    = implode(' ', array_reverse($strArray));

        return $pEnd ? ($strReversed . $lastChar) : $strReversed;
    }
}
