<?php

namespace Validator\Test;

/**
 * Unit test TitleParser class.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @since 0.5
 *
 * @ingroup Validator
 * @ingroup Test
 *
 * @group Validator
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class TitleParserTest extends StringValueParserTest {

	/**
	 * @see ValueParserTestBase::parseProvider
	 *
	 * @since 0.5
	 */
	public function parseProvider() {
		$argLists = array();

		$valid = array(
			'Foo bar',
			'Ohi there!',
		);

		foreach ( $valid as $value ) {
			$argLists[] = array( $value, \ValueParserResultObject::newSuccess( \Title::newFromText( $value ) ) );
		}

		return array_merge( $argLists, parent::parseProvider() );
	}

	/**
	 * @see ValueParserTestBase::getParserClass
	 * @since 0.5
	 * @return string
	 */
	protected function getParserClass() {
		return 'TitleParser';
	}

}
