<?php
// This file is part of Moodle Course Rollover Plugin
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * @package     local_user_paymentform
 * @author      Kristian
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_getpayment;

use dml_exception;
use stdClass;

class manager {
        

     public function create_payment(int $enrolid,int $userid): bool
     {
         global $DB;
         $record_to_insert = new stdClass();
        //  $record_to_insert->user_name = $username;
         $record_to_insert->enrolid = $enrolid;
         $record_to_insert->userid = $userid;

         $currentDate = time();
        $record_to_insert->timestart = $currentDate;
        $record_to_insert->timecreated = $currentDate;
        $record_to_insert->timemodified = $currentDate;

        try {
            return $DB->insert_record('user_enrolments', $record_to_insert);
        } catch (dml_exception $e) {
            return false;
        }
    }
    }

// }$insert=mysql_query("insert into mdl_user_enrolments (`enrolid`, `userid`, `timestart`, `timecreated`, `timemodified`) values 
// ('$enrollid', '$usrid', '$date1', '$date1', '$date1')");