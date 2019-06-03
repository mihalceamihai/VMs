<script type="text/text/javascript">
	function baga_clienti()
		{
			var xmlhhtp;
			xmlhhtp=new XMLHttpRequest();
			xmlhhtp.open("POST","insert.php?lastname="+document.getElementById('cnnume').value + "&firstname=" + document.getElementById('cnprenume').value + "&username=" + document.getElementById('cnusername').value + "&phone=" + document.getElementById('cnnrtelefon').value +"&email=" +document.getElementById('cnemail').value  +
			 "&dom" + document.getElementById('cnaddom').value + "&password=" +document.getElementById('cnparola').value + "&repass=" + document.getElementById('cnre_parola')  ,false);
			xmlhhtp.send(null);
		}
</script>


<ul>
<li class="userclass"><a href="#">Welcome,<?php
                                          session_start();
                                          if(isset($_SESSION["auth"]) )
                                          {
                                            echo $_SESSION["usr_name"];
                                          ?> !</a></li>
<li class="current"><a href=<?php echo "acasa.html"; ?> ><?php echo "Acasa"; ?> ></a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="#">Contul meu</a>
<ul>
<li><a href=<?php"logout.php" ?>><?php echo "Log out!"; ?></a></li>
<li><a href=<?php "detaliicont.html" ?>><?php echo "Editare";?></a></li>
<li><a href=<?php "cos.php"?>><?php echo "Editare";?></a></li>

</ul>
</li>
?>
</ul>













<li><a href="cos.php"><?php
													if(isset($_SESSION["auth"]) )
													{
														echo "Editare";
													}
?></a></li>
</ul>
</li>
</ul>
