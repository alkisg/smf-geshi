<?php
/*************************************************************************************
 * pseudoglossa.php
 * ----------
 * Author: Alkis Georgopoulos (github.com/alkisg)
 * Copyright: (c) 2020 Alkis Georgopoulos (github.com/alkisg)
 * Release Version: 20.04
 * Date Started: 2020/04/13
 *
 * Pseudoglossa language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2020/04/13 (1.9.0)
 *   -  First Release
 *
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Ψευδογλώσσα',
    'COMMENT_SINGLE' => array(1 => '!'),
    'COMMENT_MULTI' => array(),
    //Compiler directives
    'COMMENT_REGEXP' => array(2 => '/\\{\\$.*?}|\\(\\*\\$.*?\\*\\)/U'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',

    'KEYWORDS' => array(
        1 => array(
            'div', 'mod', 'Α_Μ', 'Α_Τ', 'Αλγόριθμος',
            'Αληθής', 'αλλιώς', 'αλλιώς_αν', 'Αν',
            'Αντιμετάθεσε', 'από', 'Αποτελέσματα',
		    'Αρχή_επανάληψης', 'Για', 'Δεδομένα',
		    'Διάβασε', 'Εitdoesntwork', 'Εκτύπωσε', 'Εμφάνισε',
		    'επανάλαβε', 'Επίλεξε', 'ΕΦ', 'ήitdoesntwork', 'ΗΜ',
		    'και', 'ΛΟΓ', 'με_βήμα', 'μέχρι',
		    'Μέχρις_ότου', 'Όσο', 'όχι', 'Περίπτωση',
		    'ΣΥΝ', 'Τ_Ρ', 'Τέλος', 'Τέλος_αν',
		    'Τέλος_επανάληψης', 'Τέλος_επιλογών',
		    'τότε', 'Ψευδής'
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']',
            '.', ',', ':', '<', '>', '=', '←', '≥', '≤',
            '+', '-', '*', '/', '^')
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #008000; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff0000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #ff0000; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #800080;',
            //'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #008000;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000cc;',
            1 => 'color: #ff0000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #ff0000; font-weight: bold;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(
        //Hex numbers
        0 => '\$[0-9a-fA-F]+',
        //Characters
        1 => '\#(?:\$[0-9a-fA-F]{1,2}|\d{1,3})'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>
