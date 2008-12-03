<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2008, Phoronix Media
	Copyright (C) 2008, Michael Larabel

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

class list_saved_results implements pts_option_interface
{
	public static function run($r)
	{
		echo pts_string_header("Phoronix Test Suite - Saved Results");
		foreach(glob(SAVE_RESULTS_DIR . "*/composite.xml") as $saved_results_file)
		{
			echo new pts_test_results_details($saved_results_file) . "\n";
		}
		echo "\n";
	}
}

?>
