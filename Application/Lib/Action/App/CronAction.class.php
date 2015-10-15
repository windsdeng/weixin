<?php
/*
用户结算程序，获取上个月的用户下级东家数量，给予上个月销售额的一定奖励
*/
class CronAction extends Action {
	function _initialize() {
		header("Content-type: text/html; charset=utf-8"); 
	}
	
	/*获取用户上个月销售*/
	public function get_xiaoshou()
	{
		
		
		
	   echo $start_day = date('Y-m-01 00:00:00', strtotime('-1 month'));
	   echo "<br/>";
	   echo $end_day = date('Y-m-t 23:59:59', strtotime('-1 month'));
	   echo "<br/>";
	   
	   
		$db = new Model();
		$ALL_COUNT = $db->query("SELECT sum(`totalprice`) as `total` FROM `wemall_order` where order_status=2 AND `time` >= '".$start_day."' and `time`<='".$end_day."';");
		echo $all_buy_price = empty($ALL_COUNT[0]['total']) ? 0 : $ALL_COUNT[0]['total'];
   
   
	}
}