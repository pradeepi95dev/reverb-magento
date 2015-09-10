<?php
/**
 * Author: Sean Dunagan
 * Created: 8/22/15
 */

abstract class Reverb_ReverbSync_Model_Mysql4_Task_Unique extends Reverb_ReverbSync_Model_Mysql4_Task
{
    public function _construct()
    {
        $this->_init('reverb_process_queue/task_unique','task_id');
    }

    protected function _getInsertColumnsArray()
    {
        return array('code', 'unique_id', 'status', 'object', 'method', 'serialized_arguments_object');
    }

    protected function _getUniqueInsertDataArrayTemplate($object, $method, $unique_id)
    {
        $insert_data_array_template = parent::_getInsertDataArrayTemplate($object, $method);
        $insert_data_array_template['unique_id'] = $unique_id;
        return $insert_data_array_template;
    }
}
