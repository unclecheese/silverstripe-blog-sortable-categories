<?php

/**
 * Updates the GridField to add the orderable rows component
 *
 * @author  Aaron Carlino <aaron@silverstripe.com>
 * @package  unclecheese/blog-sortable-categories
 */
class BlogSortableCategories extends DataExtension
{

    /**
     * @param  FieldList $fields	 
     */
    public function updateCMSFields(FieldList $fields)
    {
        if ($grid = $fields->dataFieldByName('Categories')) {
            $grid->getConfig()->addComponent(new GridFieldOrderableRows());
        }
    }
}
