<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @see         https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2018 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\SimpleType;

use PhpOffice\PhpWord\Shared\AbstractEnum;

/**
 * Horizontal Alignment Type.
 *
 * Introduced in 1st Edition of ECMA-376. Initially it was intended to align paragraphs and tables.
 * Since ISO/IEC-29500:2008 the type must not be used for table alignment.
 *
 * @since 0.13.0
 *
 * @see \PhpOffice\PhpWord\SimpleType\JcTable For table alignment modes available since ISO/IEC-29500:2008.
 * @see  http://www.datypic.com/sc/ooxml/t-w_ST_Jc.html
 */
final class WordWrap extends AbstractEnum
{
    const ON = 'on';
    const OFF = 'off';

}
