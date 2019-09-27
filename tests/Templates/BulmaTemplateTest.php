<?php
/**
 * This file is part of Flash.
 *
 * Flash is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Flash is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Flash.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace Felix\Tests\Flash\Templates;


use Felix\Flash\Templates\BulmaTemplate;
use PHPUnit\Framework\TestCase;

class BulmaTemplateTest extends TestCase
{
    /**
     * @covers \Felix\Flash\Templates\BulmaTemplate::wrap
     */
    public function testWrap()
    {
        $template = new BulmaTemplate();
        $this->assertEquals('<section class="notification is-error">error</section>', $template->wrap('error', 'error'));
    }
}