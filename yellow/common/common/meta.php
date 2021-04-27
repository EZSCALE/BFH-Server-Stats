<?php
// BFHL Stats Page by Ty_ger07
// http://open-web-community.com/

// if valid ?p is specified in the URL
if(!empty($page))
{
	if($page == 'player')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="' . $SoldierName . ',' . $ServerName . ',' . $clan_name . ',BFHL,Player,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' player stats page for ' . $SoldierName . '." />
			<title>' . $clan_name . ' BFHL Stats - ' . $SoldierName . ' - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="' . $SoldierName . ',' . $clan_name . ',BFHL,Player,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global player stats page for ' . $SoldierName . '." />
			<title>' . $clan_name . ' BFHL Stats - ' . $SoldierName . ' - Global Stats</title>
			';
		}
	}
	elseif($page == 'suspicious')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Suspicious,Players,' . $ServerName . ',' . $clan_name . ',BFHL,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' Suspicious Players page." />
			<title>' . $clan_name . ' BFHL Stats - Suspicious Players - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Suspicious,Players,' . $clan_name . ',BFHL,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global Suspicious Players page." />
			<title>' . $clan_name . ' BFHL Stats - Suspicious Players - Global Stats</title>
			';
		}
	}
	elseif($page == 'leaders')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Top,Players,' . $ServerName . ',' . $clan_name . ',BFHL,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' Top Players page." />
			<title>' . $clan_name . ' BFHL Stats - Top Players - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Top,Players,' . $clan_name . ',BFHL,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global Top Players page." />
			<title>' . $clan_name . ' BFHL Stats - Top Players - Global Stats</title>
			';
		}
	}
	elseif($page == 'countries')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Country,Stats,' . $ServerName . ',' . $clan_name . ',BFHL" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' Country Stats page." />
			<title>' . $clan_name . ' BFHL Stats - Country Stats - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Country,Stats,' . $clan_name . ',BFHL" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global Country Stats page." />
			<title>' . $clan_name . ' BFHL Stats - Country Stats - Global Stats</title>
			';
		}
	}
	elseif($page == 'maps')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Map,Stats,' . $ServerName . ',' . $clan_name . ',BFHL" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' Map Stats page." />
			<title>' . $clan_name . ' BFHL Stats - Map Stats - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Map,Stats,' . $clan_name . ',BFHL" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global Map Stats page." />
			<title>' . $clan_name . ' BFHL Stats - Map Stats - Global Stats</title>
			';
		}
	}
	elseif($page == 'server')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Server,Stats,' . $ServerName . ',' . $clan_name . ',BFHL,Info" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' Server Info page." />
			<title>' . $clan_name . ' BFHL Stats - Server Info - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Server,Stats,' . $clan_name . ',BFHL,Info" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global Server Info page." />
			<title>' . $clan_name . ' BFHL Stats - Server Info - Global Stats</title>
			';
		}
	}
	elseif($page == 'chat')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Chat,Recent,' . $ServerName . ',' . $clan_name . ',BFHL" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' Chat Content page." />
			<title>' . $clan_name . ' BFHL Stats - Chat Log - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Chat,Recent,' . $clan_name . ',BFHL" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global Chat Content page." />
			<title>' . $clan_name . ' BFHL Stats - Chat Log - Global Stats</title>
			';
		}
	}
	elseif($page == 'home')
	{
		// if there is a ServerID, this is a server stats page
		if(!empty($ServerID))
		{
			echo '
			<meta name="keywords" content="Home,' . $ServerName . ',' . $clan_name . ',BFHL,Server,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' stats Home Page." />
			<title>' . $clan_name . ' BFHL Stats - Home Page - ' . $ServerName . '</title>
			';
		}
		// or else this is a combined stats page
		else
		{
			echo '
			<meta name="keywords" content="Home,' . $clan_name . ',BFHL,Server,Stats" />
			<meta name="description" content="This is our ' . $clan_name . ' BFHL global stats Home Page." />
			<title>' . $clan_name . ' BFHL Stats - Home Page - Global Stats</title>
			';
		}
	}
}
else
{
	// if there is a ServerID, this is a server stats page
	if(!empty($ServerID))
	{
		echo '
		<meta name="keywords" content="Home,' . $ServerName . ',' . $clan_name . ',BFHL,Server,Stats" />
		<meta name="description" content="This is our ' . $clan_name . ' BFHL ' . $ServerName . ' stats Home Page." />
		<title>' . $clan_name . ' BFHL Stats - Home Page - ' . $ServerName . '</title>
		';
	}
	// or else this is a combined stats page
	else
	{
		echo '
		<meta name="keywords" content="Index,' . $clan_name . ',BFHL,Server,Stats" />
		<meta name="description" content="This is our ' . $clan_name . ' BFHL stats Index Page." />
		<title>' . $clan_name . ' BFHL Stats - Index Page</title>
		';
	}
}
?>