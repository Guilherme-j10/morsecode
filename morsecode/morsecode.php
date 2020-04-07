<?php

    namespace morsecode;

    class morsecode{

        const alfabet = ['/a/','/b/','/c/','/d/','/e/','/f/','/g/','/h/','/i/','/j/','/k/','/l/','/m/','/n/','/o/','/p/','/q/','/r/','/s/','/t/','/u/','/v/','/w/','/x/','/y/','/z/'];
        const codemorse = ['.-', '-...', '-.-.', '-..', '.', '..-.', '--.', '....', '..', '.---', '-.-', '.-..','--', '-.', '---', '.--.','--.-', '.-.', '...', '-', '..-', '...-', '.--', '-..-', '-.--', '--..'];
        const codemorse_bar = ['.-/', '-.../', '-.-./', '-../', './', '..-./', '--./', '..../', '../', '.---/', '-.-/', '.-../','--/', '-./', '---/', '.--./','--.-/', '.-./', '.../', '-/', '..-/', '...-/', '.--/', '-..-/', '-.--/', '--../'];

        public function encode($text, $option_bar){
           switch ($option_bar) {
                case true:
                   return preg_replace(self::alfabet, self::codemorse_bar, $text);
                break;
                case false:
                    return preg_replace(self::alfabet, self::codemorse, $text); 
                break;
                default:
                   echo "value passed error";
                break;
           }
        }

    }