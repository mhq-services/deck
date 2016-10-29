<?php
/**
 * @copyright Copyright (c) 2016 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *  
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *  
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *  
 */

namespace OCA\Deck\Db;

use OCA\Deck\CardArchivedException;
use OCA\Deck\Controller\PageController;
use OCA\Deck\NoPermissionException;
use OCA\Deck\NotFoundException;

class ExceptionsTest extends \PHPUnit_Framework_TestCase {

	public function testNoPermissionException() {
		$c = new \stdClass();
		$e = new NoPermissionException('not allowed', $c, 'mymethod');
		$this->assertEquals('stdClass#mymethod: not allowed', $e->getMessage());
	}

	public function testNotFoundException() {
		$e = new NotFoundException('foo');
		$this->assertEquals('foo', $e->getMessage());
	}

	public function testCardArchivedException() {
		$e = new CardArchivedException('foo');
		$this->assertEquals('foo', $e->getMessage());
	}

}