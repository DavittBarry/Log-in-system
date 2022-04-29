		<?php// $page = $_GET['page'];
		//	$subpage = $_GET['sub'];
		?>

		<?php 
			
			//$_SESSION['userid'] = "";
			$_GET['page'] = "";
			$page = $_GET['page'];
		
			//$subpage = $_GET['sub'];
			if(basename ( $_SERVER['PHP_SELF'] ) == "index.php"){
			$page = "frontpage";
			
			}
		?>
		
		<div id="menu">
			<ul class="mainmenu">
				<li class="<? if ($page == 'frontpage'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="../index.php?page=frontpage">Frontpage</a></li>
				<li class="<? if ($page == 'tables'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="./tables.php?page=tables">Tables</a></li>

				<li class="<? if ($page == 'users'){ echo('cp_frontpage');}else{echo('p_frontpage');}?>"><a href="./users.php?page=users">Users</a></li>
				
				<?php if(isset($_SESSION['userid'])){
					echo("<li class=\"whitetext\"> Your are an admin: " . $_SESSION['username'] . "</li>");
					echo("<li class=\"registerlink\"><a href=\"./logout.php\">Log out</a></li>");
				}else{
					echo("<li class=\"registerlink\"><a href=\"./index.php\">Login</a></li>");
				}
				?>
			</ul>
						

		</div>
		
		
