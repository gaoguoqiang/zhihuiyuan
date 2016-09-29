function hello()
      {
         d = new dTree('d');

			    d.add(0,-1,'后台管理',ThinkPHP['ROOT']+'/Admin/Index/index');

			    d.add(1,0,'管理员',ThinkPHP['ROOT']+'/Admin/User/index');

			    d.add(2,0,'会员管理','');
			    d.add(21,2,'讲师管理',ThinkPHP['ROOT']+'/Admin/Teacher/index');

			    d.add(3,0,'分类管理','');
			    d.add(31,3,'添加分类',ThinkPHP['ROOT']+'/Admin/Type/index');
			    d.add(32,3,'修改分类',''); 

			    //三级分类321->31

			    d.add(321,32,'两化融合',ThinkPHP['ROOT']+'/Admin/Type/oper/aid/1'); 
			    d.add(322,32,'企业百科',ThinkPHP['ROOT']+'/Admin/Type/oper/aid/2');  

			    d.add(4,0,'新闻管理','');
			    d.add(41,4,'修改新闻','');

			    d.add(411,41,'两化融合',ThinkPHP['ROOT']+'/Admin/News/index/aid/1'); 
			    d.add(412,41,'企业百科',ThinkPHP['ROOT']+'/Admin/News/index2/aid/2'); 




			    d.add(42,4,"添加新闻",'');


			     d.add(421,42,'两化融合',ThinkPHP['ROOT']+'/Admin/News/addShow/aid/1'); 
			    d.add(422,42,'企业百科',ThinkPHP['ROOT']+'/Admin/News/addShow1/aid/2'); 





			    d.add(5,0,'讨论区','');
			    d.add(51,5,'讨论内容','add.php');

			    d.add(6,0,'返回首页',ThinkPHP['ROOT']+'/Admin/Login/loginOut');

			    document.write(d);
      }

      hello();