<?php


function route_name()
{
    return str_replace('.', '-', Route::currentRouteName());
}

//生成摘要
const BRIEF_LENGTH = 30;
function generate_brief($text)
{
    mb_regex_encoding("UTF-8");
    if (mb_strlen($text) <= BRIEF_LENGTH) return $text;
    $Foremost = mb_substr($text, 0, BRIEF_LENGTH);
    $re = "<(\/?) 
(P|DIV|H1|H2|H3|H4|H5|H6|ADDRESS|PRE|TABLE|TR|TD|TH|INPUT|SELECT|TEXTAREA|OBJECT|A|UL|OL|LI| 
BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT|SPAN)[^>]*(>?)";
    $Single = "/BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT|BR/i";

    $Stack = array();
    $posStack = array();

    mb_ereg_search_init($Foremost, $re, 'i');

    while ($pos = mb_ereg_search_pos()) {
        $match = mb_ereg_search_getregs();
        /*    [Child-matching Formulation]:

            $matche[1] : A "/" charactor indicating whether current "<...>" Friction is
Closing Part
            $matche[2] : Element Name.
            $matche[3] : Right > of a "<...>" Friction
        */
        if ($match[1] == "") {
            $Elem = $match[2];
            if (mb_eregi($Single, $Elem) && $match[3] != "") {
                continue;
            }
            array_push($Stack, mb_strtoupper($Elem));
            array_push($posStack, $pos[0]);
        } else {
            $StackTop = $Stack[count($Stack) - 1];
            $End = mb_strtoupper($match[2]);
            if (strcasecmp($StackTop, $End) == 0) {
                array_pop($Stack);
                array_pop($posStack);
                if ($match[3] == "") {
                    $Foremost = $Foremost . ">";
                }
            }
        }
    }

    $cutpos = array_shift($posStack) - 1;
    $Foremost = mb_substr($Foremost, 0, $cutpos, "UTF-8");
    return $Foremost;
}
