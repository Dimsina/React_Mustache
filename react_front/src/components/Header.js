import React from 'react'
import { BrowserRouter as Router, Link } from 'react-router-dom'

const Header = () => (
	<header>
		<nav>
			<ul>
				<li><Link to='/'>Home</Link></li>
				<li><Link to='/Genre'>Genre</Link></li>
				<li><Link to='/search_genre'>Find Genre</Link></li>
				<li><Link to='/Artist'>Artist</Link></li>
				<li><Link to='/search_artist'>Find artist</Link></li>
				<li><Link to='/Album'>Album</Link></li>
				<li><Link to='/search_album'>Find album</Link></li>
				<li><Link to='/Track'>Track</Link></li>
				<li><Link to='/search_track'>Find track</Link></li>
			</ul>
		</nav>
	</header>
);

export default Header;
