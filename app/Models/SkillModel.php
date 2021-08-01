<?php

namespace App\Models;

use App\Libraries\MySql;
use PDO;

class SkillModel extends Model
{
// Name of the table
protected static $table = "skills";

// Max number of records when fetching all records from table
protected static $limit;

// Non writable fields
protected static $guarded = [
'id',
'updated',
'deleted',
'updated_by',
'deleted_by',
];

public static function userSkills(int $user_id)
{
if(empty($user_id)) {return false;
}

$sql = "SELECT * FROM " . self::$table . " WHERE user_id=" . $user_id . " AND deleted IS NULL";
return MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);
}
}
