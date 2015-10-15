<?php
class TxAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	public function index() {
		import ( 'ORG.Util.Page' );
		$m = D ( "Tx_record" );
		
		$count = $m->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header', '条记录');
        $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)
		$show = $Page->show (); // 分页显示输出
		
		$result = $m->limit ( $Page->firstRow . ',' . $Page->listRows )->order("id desc")->relation(true)->select ();
		$this->assign ( "result", $result );
		$this->assign ( "page", $show ); // 赋值分页输出
		$this->display ();
	}
	public function del(){
		$result = R ( "Api/Api/deltx", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
	public function payComplete(){
		$result = R ( "Api/Api/txpayComplete", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
}