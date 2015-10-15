<?php
class OrderAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	
	public function get_pay_status()
	{
		$m = D ( "Order" );
		$result = $m->where(array('pay_status'=>1))->select();
		foreach($result as $info)
		{
			$text .= '"'.$info['orderid'].'",';
		}
		echo $text;
	}
	
	 //上传方法
    public function  upexcel()
    {
        header("Content-Type:text/html;charset=utf-8");
		
		$info = $this->upload ();
		$info = $info[0];
        $filename = $info['savepath'].$info['savename'];
        $exts = $info['extension'];
		
        if(!$info) {// 上传错误提示错误信息
              $this->error($upload->getError());
        }else{// 上传成功
            $this->goods_import($filename, $exts);
			$this->success ( "上传成功" );
        }
    }

    //导入数据方法
    public function goods_import($filename, $exts='xls')
    {
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
		require_once APP_PATH.'PHPExcel/PHPExcel.php'; 
		require_once APP_PATH.'PHPExcel/PHPExcel/Reader/Excel5.php';     // 用于其他低版本xls 
		require_once APP_PATH.'PHPExcel/PHPExcel/Reader/Excel2007.php'; // 用于 excel-2007 格式 
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类
        if($exts == 'xls'){
            $PHPReader=new PHPExcel_Reader_Excel5();
        }elseif($exts == 'xlsx'){
            $PHPReader=new PHPExcel_Reader_Excel2007();
        }else
		{
			exit('错误的格式');
		}
		
        //载入文件
        $PHPExcel=$PHPReader->load($filename);
        //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet=$PHPExcel->getSheet(0);
        //获取总列数
        $allColumn=$currentSheet->getHighestColumn();
        //获取总行数
        $allRow=$currentSheet->getHighestRow();
        //循环获取表中的数据，$currentRow表示当前行，从哪行开始读取数据，索引值从0开始
        for($currentRow=2;$currentRow<=$allRow;$currentRow++){
            //从哪列开始，A表示第一列
            for($currentColumn='A';$currentColumn<=$allColumn;$currentColumn++){
                //数据坐标
                $address=$currentColumn.$currentRow;
                //读取到的数据，保存到数组$arr中
                $data[$currentRow][$currentColumn]=$currentSheet->getCell($address)->getValue();
            }

        }
        
		foreach($data as $info)
		{
			$order_id = $info['A'];
			$name = $info['G'];
			$num = $info['H'];
			
			if(!empty($order_id) && !empty($name) && !empty($num))
			{
				$data['id'] = $order_id;
				$data['order_info'] = json_encode(array('num'=>$num,'name'=>$name));
				$result = M( "Order" )->save($data);
				
				$result = R ( "Api/Api/publish", array (
					$order_id,
				) );
			}
		}
    }
	
	public function import()
	{
		$m = D ( "Order" );
		$info = $m->where(array('order_status'=>0,'pay_status'=>1))->relation(false)->select();

		$data = array();
		$data[0][] = "编号"; 
		$data[0][] = "定单号"; 
		$data[0][] = "姓名"; 
		$data[0][] = "电话"; 
		$data[0][] = "地址"; 
		$data[0][] = "详情"; 
		$data[0][] = "快递公司"; 
		$data[0][] = "快递单号"; 

		$i=0;
		foreach($info as $result)
		{
			$i++;
			$data[$i][] = $result['id']; 
			$data[$i][] = $result['orderid']; 
			$data[$i][] = $result['shouhuoname']; 
			$data[$i][] = $result['phone']; 
			$data[$i][] = $result['address']; 
			$json = $result['cartdata'];
			$datas = json_decode($json,true);
			
			$info = '';
			
			foreach($datas as $res)
			{
				$info .= $res['name'].'('.$res['num'].'),';
			}
			
			$data[$i][] =     $info; 
		}
		
		$excelFileName=$sheetTitle='data';
		
		/*导入phpExcel核心类 */
		require_once APP_PATH.'PHPExcel/PHPExcel.php'; 
		require_once APP_PATH.'PHPExcel/PHPExcel/Writer/Excel5.php';     // 用于其他低版本xls 
		require_once APP_PATH.'PHPExcel/PHPExcel/Writer/Excel2007.php'; // 用于 excel-2007 格式 
			 /* 实例化类 */
		$objPHPExcel = new PHPExcel(); 
		
		/* 设置输出的excel文件为2007兼容格式 */
		//$objWriter=new PHPExcel_Writer_Excel5($objPHPExcel);//非2007格式
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		
		/* 设置当前的sheet */
		$objPHPExcel->setActiveSheetIndex(0);
		
		$objActSheet = $objPHPExcel->getActiveSheet();
		
		/*设置宽度*/
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(60);
		
		
			
		/* sheet标题 */
		$objActSheet->setTitle($sheetTitle);
		
		$i = 1;
		foreach($data as $value)
		{
			/* excel文件内容 */
			$j = 'A';
			foreach($value as $value2)
			{
	            //$value2=iconv("gbk","utf-8",$value2);
				$objActSheet->setCellValue($j.$i,$value2);
				$j++;
			}
			$i++;
		}
		
		/* 生成到浏览器，提供下载 */ 
		ob_end_clean();  //清空缓存			 
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
		header("Content-Type:application/force-download");
		header("Content-Type:application/vnd.ms-execl");
		header("Content-Type:application/octet-stream");
		header("Content-Type:application/download");
		header('Content-Disposition:attachment;filename="'.$excelFileName.'.xlsx"');
		header("Content-Transfer-Encoding:binary"); 
		$objWriter->save('php://output');
	}
	
	public function index() {
		import ( 'ORG.Util.Page' );
		$m = D ( "Order" );
		
		
		if(isset($_GET['order']))
		{
			$_GET['order'];
			$result = $m->where(array('orderid'=>$_GET['order']))->relation(true)->select ();

			$count = 1;
			$Page = new Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数
			$Page -> setConfig('header', '条记录');
			$Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)
			$show = $Page->show (); // 分页显示输出
		}
		else
		{
			if(isset($_GET['type']))
			{
				if($_GET['type']==5)
				{
					$count = $m->where(array('pay_status'=>1))->count (); // 查询满足要求的总记录数
				}
				elseif($_GET['type']==6)
				{
					$count = $m->where(array('pay_status'=>1,'order_status'=>0))->count (); // 查询满足要求的总记录数
				}
				else
				{
					$count = $m->where(array('order_status'=>(int)$_GET['type']))->count (); // 查询满足要求的总记录数
				}
			}
			else
			{
				$count = $m->count (); // 查询满足要求的总记录数
			}
			
			$Page = new Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数
			$Page -> setConfig('header', '条记录');
			$Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)
			$show = $Page->show (); // 分页显示输出
			
			$result = $m->limit ( $Page->firstRow . ',' . $Page->listRows )->order("id desc")->relation(true);
			
			if(isset($_GET['type']))
			{
				if($_GET['type']==5)
				{
					$result = $result->where(array('pay_status'=>1));
				}
				elseif($_GET['type']==6)
				{
					$result = $result->where(array('pay_status'=>1,'order_status'=>0));
				}
				else
				{
					$result = $result->where(array('order_status'=>(int)$_GET['type']));
				}
			}
			
			$result = $result->select ();
		}
		
		$this->assign ( "result", $result );
		$this->assign ( "page", $show ); // 赋值分页输出
		$this->display ();
	}
	
	public function set_order_info()
	{
		$id = (int)$_POST ['id'];
		$name = $_POST ['name'];
		$num = $_POST ['num'];

		$data['id'] = $id;
		$data['order_info'] = json_encode(array('num'=>$num,'name'=>$name));
		$result = M( "Order" )->save($data);
	}
	
	public function del(){
		$result = R ( "Api/Api/delorder", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
	public function publish(){
		$result = R ( "Api/Api/publish", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
	public function txpublish(){
		$result = R ( "Api/Api/txpublish", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
	public function payComplete(){
		$result = R ( "Api/Api/payComplete", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
}