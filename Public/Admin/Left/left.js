function hello()
      {
         d = new dTree('d');

			    d.add(0,-1,'后台管理','#');

			    d.add(1,0,'管理员','../index.php');

			    d.add(2,0,'会员管理','');
			    d.add(21,2,'用户管理','addnews.php');
			    d.add(22,2,'讲师管理','modnews.php');

			    d.add(3,0,'分类管理','');
			    d.add(31,3,'添加分类','addtype.php');
			    d.add(32,3,'修改分类','modtype.php');  

			    d.add(4,0,'新闻管理','');
			    d.add(41,4,'新闻动态','add.php');
			    d.add(42,4,"添加新闻","__ROOT__/App/Admin/News/index");

			    d.add(5,0,'讨论区','');
			    d.add(51,5,'讨论内容','add.php');

			    d.add(6,0,'返回首页','index.php');

			    document.write(d);
      }

      hello();