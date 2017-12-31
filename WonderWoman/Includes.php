<html>
<style>

        nav ul ul 
        {
            display: none;
        }
        nav 
        {
            text-align:center;
        }
        nav ul li:hover > ul 
        {
            display: block;
        }
        nav ul 
        {
            background: black; 
            background: linear-gradient(top, black 0%,black 100%);  
            background: -moz-linear-gradient(top, black 0%, black 100%); 
            background: -webkit-linear-gradient(top, black 0%,black 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;
            border-style:solid;
            border-color: red;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        nav ul:after 
        {
            content: ""; clear: both; display: block;
        }
        nav ul li 
        {
            float: left;
        }
        nav ul li:hover 
        {
            background: Black;
            background: linear-gradient(top, red 0%, red 40%);
            background: -moz-linear-gradient(top, red 0%, red 40%);
            background: -webkit-linear-gradient(top, red 0%,red 40%);
        }
        nav ul li:hover a 
        {
            color: black;
        }
        nav ul li a 
        {
	    display: block; padding: 25px 40px;
	    color: white; text-decoration: none;
        }
        nav ul ul 
        {
	    background: red; border-radius: 0px; padding: 0;
	    position: absolute; top: 100%;
        }
        nav ul ul li 
        {
            float: none; 
            border-top: 1px solid red;
            border-bottom: 1px solid black;
            position: relative;
        }
        nav ul ul li a 
        {
            padding: 15px 40px;
            color: red;
        }	
        nav ul ul li a:hover 
        {
	    background: #4b545f;
        }
        nav ul ul ul 
        {
	    position: absolute; left: 100%; top:0;
        }
    </style>


 <nav align="Center">
	<ul>
		<li><a href="http://ocelot.aul.fiu.edu/~eoban007/"> <b> Home </b></a></li>
		<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Bosses.php?Boss=Boss"> <b> Bosses </b></a>
			<ul>
				<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Bosses.php?Boss=Boss"> <b>Cleric Beast</b></a></li>
				<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Bosses.php?Boss=Boss"> <b>Vicar Amelia</b></a></li>
			</ul>
		</li>
		<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Weapons.php?Weapons=Weapons"> <b> Weapons </b></a>
			<ul>
				<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Weapons.php?Weapons=Weapons"><b>Kirkhammer</b></a></li>
				<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Weapons.php?Weapons=Weapons"><b>Sword</b></a></li>
			</ul>
		</li>
		<li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Items.php?Items=Items"><b>Items</b></a>
                    <ul>
                        <li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Items.php?Items=Items"> <b>Blood Vials </b></a></li>
		        <li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/Items.php?Items=Items"> <b>Silver Bullets </b></a></li>
                    </ul>
                </li>
                <li><a href="http://ocelot.aul.fiu.edu/~eoban007/Data/Data.php"><b>Data</b></a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/PGM3.php"><b>PGM3</b></a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~eoban007/Contact/Contact.php"><b>Contact US </b></a></li>
                <li><a href="http://ocelot.aul.fiu.edu/~eoban007/Pages/PGM4.php"><b>PGM4</b></a></li>


	</ul>
</nav>
</html>