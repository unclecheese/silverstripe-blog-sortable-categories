<?php
/**
 * Adds a Sort column to the BlogCategory object, with a default sort
 *
 * @author  Aaron Carlino <aaron@silverstripe.com>
 * @package  unclecheese/blog-sortable-categories
 */
class SortableBlogCategory extends DataExtension
{

    /**
     * @var array
     */
    private static $db = array(
        'Sort' => 'Int'
    );

    /**	 
     * @var string
     */
    private static $default_sort = 'Sort ASC';
}
