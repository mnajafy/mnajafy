<?php
namespace Model;

use Core\Mvc\Model;
use Model\Category;
/**
 * Template
 * 
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $content
 * @property int $category_id
 * 
 * @property Category $category
 */
class Template extends Model 
{
    public static function tablename() 
    {
        return 'template';
    }

    public static function byCategory($value = null) 
    {
        if ($value == 1) 
        { $value = null; }
        
        if ($value) 
        {
            return static::runAll('
                SELECT m1.*, 
                m2.id AS m2_id, m2.title AS m2_title
                FROM template AS m1
                INNER JOIN category m2 ON m1.category_id = m2.id AND m2.id = ?
                ORDER BY m1.id DESC
            ', [$value]);
        }
        return static::runAll('
            SELECT m1.*, 
            m2.id AS m2_id, m2.title AS m2_title
            FROM template AS m1 
            INNER JOIN category m2 ON m1.category_id = m2.id
            ORDER BY m1.id DESC');
    }
}